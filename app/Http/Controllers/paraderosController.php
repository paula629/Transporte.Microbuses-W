<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB; // trabajar con base de datos utilizando procedimientos almacenados

use Illuminate\Http\Request; // recuperar datos de la vista
use DataTables;

class paraderosController extends Controller
{
    public function index(Request $request){

        if($request -> ajax()){
            $paraderos= DB::select ("SELECT id, direccion FROM paraderos");
            return DataTables::of($paraderos)
             ->addColumn('accion', function($paraderos){
              $acciones = '<button type="button" name ="delete"  id="" class="btn btn-danger btn-sm"> Borrar </button>';
              return $acciones;
             })
             ->rawColumns(['accion'])
             ->make(true);
        }



        return view ('paraderos.index');

    }

}

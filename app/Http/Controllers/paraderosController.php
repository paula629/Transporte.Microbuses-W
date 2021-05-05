<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB; // trabajar con base de datos utilizando procedimientos almacenados

use Illuminate\Http\Request; // recuperar datos de la vista

class paraderosController extends Controller
{
    public function index(Request $request){
        if($request -> ajax()){
            $paraderos= DB::select ('SELECT direccion FROM paraderos');
            return DataTables::off($paraderos)
             ->addColumn('action', function($paraderos){
              $acciones = '<button type="button"> name ="delete"  id="" class="btn bt-danger btn-sm"> Borrar </button>';
              return $acciones;
             })
             ->rawColumns(['action'])
             ->make(true);
        }



        return view ('paraderos.index');

    }

    public function create(){

    }

    public function store (Request $request){

    }

    public function show($id){

    }
    public function update(Request $request, $id){

    }
    public function destroy($id){
        
    }
}

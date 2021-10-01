<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computador;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class ComputadoraController extends Controller
{

    public function index()
    {
        
        $registro=Computador::get();    
        //return $registro;
        return view ('computadora.computadora',compact ('registro'));

    }


    public function create()
    {
        return view ('computadora.registro');
    }


    public function store(Request $request)
    {
       // return $request;


       $BdRegistrar=new Computador;

       $BdRegistrar->com_marca= $request->txt_marca;
       $BdRegistrar->com_modelo= $request->txt_modelo;
       $BdRegistrar->com_serie= $request->txt_serie;
       $BdRegistrar->com_nombre= $request->txt_nombre;
       $BdRegistrar->com_descripcion= $request->txt_descripcion;
       $BdRegistrar->com_fecha= $request->txt_fecha;
       $BdRegistrar->com_precio= $request->txt_precio;

      
      
       


        if ($BdRegistrar-> save()) {
            Session::flash('exito', 'Se ha registrado correctamente');
            return Redirect::to ('computadora');
        }
       else {
           Session::flash('error','Ocurrio un problema, verifique');
           return Redirect::to ('computadora.create');
       }
        }
  

 
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

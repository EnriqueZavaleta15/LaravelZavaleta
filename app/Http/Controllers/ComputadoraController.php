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
        return view ('Computadora.computadora',compact ('registro'));

    }


    public function create()
    {
        return view ('Computadora.registro');
    }


    public function store(Request $request)
    {
       // return $request;
        $request->validate([
            'txt_marca'=>'required',
            'txt_modelo'=>'required',
            'txt_serie'=>'required',
            'txt_nombre'=>'required',
            'txt_fecha'=>'required',
            'txt_precio'=>'required'
        ]);

        

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
        $IdCompu=Computador::findOrFail($id);
        return view ('Computadora.eliminar',compact('IdCompu'));
    }

    public function edit($id)
    {
      $IdCompu=Computador::findOrFail($id);
      return view ('Computadora.editar',compact('IdCompu'));
     
        // return 'el id del registro es'.$id;
    }


    public function update(Request $request, $id)
    {
        $IdCompu=Computador::findOrFail($id);


        $IdCompu->com_marca=$request->txt_marca;
        $IdCompu->com_modelo=$request->txt_modelo;
        $IdCompu->com_serie=$request->txt_serie;
        $IdCompu->com_nombre=$request->txt_nombre;
        $IdCompu->com_descripcion=$request->txt_descripcion;
        $IdCompu->com_fecha=$request->txt_fecha;
        $IdCompu->com_precio=$request->txt_precio;


        if ($IdCompu-> save()) {
            Session::flash('exito', 'Se ha Actualizado correctamente');
            return Redirect::to ('computadora');
        }
       else {
           Session::flash('error','Ocurrio un problema, verifique');
           return Redirect::to ('computadora/'.$id.'/edit');
       }
     
        
        //return $request;
    }


    public function destroy($id)
    {

    Computador::destroy($id);
    Session::flash('exito', 'Se elimino correctamente');
            return Redirect::to ('computadora');



    }
}

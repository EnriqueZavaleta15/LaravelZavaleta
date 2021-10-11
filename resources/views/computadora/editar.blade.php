<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Editar Computadoras</title>
     @include ('layout.scrip_cabecera')
     
</head>
<body>
     <div class="container">
     <h2>Editar Computadoras</h2>
     <hr>

                <div>
               @if(Session('exito'))
               <div class="alert alert-success">
                    {{session('exito')}}
               </div>
               @endif
               @if(Session('error'))
               <div class="alert alert-danger">
                    {{session('error')}}
               </div>
               @endif
                </div> 
    

    
     <br>

        <form action="{{route('computadora.update',$IdCompu->id)}}" method="POST">
            @method('PATCH')
            @csrf 
          
               <div class="form-group">
                    <label for="exampleInputEmail1">Marca</label>
                    <input type="text" class="form-control" id="txt_marca" name="txt_marca"  value="{{$IdCompu->com_marca}}">
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Modelo</label>
                    <input type="text" class="form-control" id="txt_modelo" name="txt_modelo" value="{{$IdCompu->com_modelo}}">
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Serie</label>
                    <input type="text" class="form-control" id="txt_serie" name="txt_serie" value="{{$IdCompu->com_serie}}">
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" value="{{$IdCompu->com_nombre}}">
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Descripcion</label>
                    <input type="text" class="form-control" id="txt_descripcion" name="txt_descripcion" value="{{$IdCompu->com_descripcion}}">
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Fecha</label>
                    <input type="date" class="form-control" id="txt_fecha" name="txt_fecha" value="{{$IdCompu->com_fecha}}">
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Precio</label>
                    <input type="text" class="form-control" id="txt_precio" name="txt_precio" value="{{$IdCompu->com_precio}}">
               </div>
               <button type="submit" class="btn btn-primary">Actualizar <i class="fas fa-check-square"></i></button>
               
               <a href="{{url('computadora')}}" class="btn btn-danger btn-sm">Atras</a>

        </form>
     </div>
@include ('layout.scrip_pie')
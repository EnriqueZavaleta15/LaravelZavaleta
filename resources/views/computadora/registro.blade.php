<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registrar Computadoras</title>
     @include ('layout.scrip_cabecera')
     
</head>
<body>
     <div class="container">
     <h2>Resgistrar Computadoras</h2>
     <hr>

 <div class="row">
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


          <form action="{{url('computadora')}}" method="POST">
          @csrf
          
               <div class="form-group">
                    <label for="exampleInputEmail1">Marca</label>
                    <input type="text" class="form-control" id="txt_marca" name="txt_marca" required >
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Modelo</label>
                    <input type="text" class="form-control" id="txt_modelo" name="txt_modelo" required >
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Serie</label>
                    <input type="text" class="form-control" id="txt_serie" name="txt_serie"required >
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="txt_nombre" name="txt_nombre" required>
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Descripcion</label>
                    <input type="text" class="form-control" id="txt_descripcion" name="txt_descripcion">
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Fecha</label>
                    <input type="date" class="form-control" id="txt_fecha" name="txt_fecha"required >
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Precio</label>
                    <input type="text" class="form-control" id="txt_precio" name="txt_precio" required>
               </div>
               <button type="submit" class="btn btn-primary">Registrar <i class="fas fa-check-square"></i></button>
               <a href="{{url('computadora')}}" class="btn btn-danger btn-sm">Atras</a>

          </form>
     </div>
@include ('layout.scrip_pie')
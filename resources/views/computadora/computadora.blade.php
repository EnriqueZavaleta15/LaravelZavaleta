<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inicio</title>
    @include ('layout.scrip_cabecera')
</head>
<body >
   

   <div class="container">
          <h1 > Registro de Computadoras </h1>
      
          <br>

          <a href="{{url('computadora/create')}}" class="btn btn-sm btn-success" >Registrar computadoras <i class="fas fa-plus"></i></a>


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


          <table class="table">
        <thead>
          <tr>
          
            <th scope="col">Marca</th>
            <th scope="col">Modelo</th>
            <th scope="col">Serie</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Fecha</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
            
          </tr>
        </thead>
        <tbody>

          @foreach ($registro as $registros)
       

            <tr>
              <th scope="row">{{$registros->com_marca}}</th>
                <td>{{$registros->com_modelo}}</td>
                <td>{{$registros->com_serie}}</td>
                <td>{{$registros->com_nombre}}</td> 
                <td>{{$registros->com_descripcion}}</td>
                <td>{{$registros->com_fecha}}</td>
                <td>{{$registros->com_precio}}</td>
              <td>
                  <a class="btn btn-sm btn-info" href="{{route('computadora.edit',$registros->id)}}"><i class="fas fa-pencil-alt"></i> </a>
                  <a class="btn btn-sm btn-danger" href="{{route('computadora.show',$registros->id)}}"><i class="fas fa-trash-alt"></i> </a>
              </td>
            </tr>

          @endforeach

        </tbody>


      </table>

   </div>
</body>
@include ('layout.scrip_pie')
</html>
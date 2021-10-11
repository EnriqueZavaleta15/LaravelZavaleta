<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Eliminar Computadoras</title>
     @include ('layout.scrip_cabecera')
     
</head>
<body>
     <div class="container">
 

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
    

    
     

        <form action="{{route('computadora.destroy',$IdCompu->id)}}" method="POST">
            @method('DELETE')
            @csrf 
          
             <center>
                 <h1>
                   ¡ATENCION! Estar apunto de eliminar este registro
                 </h1>
                 <br>
                 <h3>
                    {{$IdCompu->com_nombre}} ,
                    {{$IdCompu->com_marca}} 
                 </h3>

             </center>  
               
            <center>

                    <h4> 
                        ¿Desea eliminar este registro?
                    </h4>

            <button type="submit" class="btn btn-danger btn-lg">Eliminar <i class="fas fa-check-square"></i></button>
            <a href="{{url('computadora')}}" class="btn btn-info btn-lg">Atras</a>

            </center>
            

        </form>
     </div>
@include ('layout.scrip_pie')
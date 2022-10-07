@extends('layouts.app')

@section('content')
<style>
    body{
        background-color: rgb(169, 230, 245)
    }
  form{
    background-color: rgb(195, 209, 211)
  }
    </style>

<body>
    <div class="container" >

    <div class="row"> 
        <div class="col-sm-1">
    </div>

    <div  class="col-sm-5"  class="border-success" style="background-color: rgb(113, 121, 122)"> 
        


        <form action="{{ route('veterinarios.store') }}" method="POST" >
                @csrf
          <div align="center">
<br>
            <h3>Registrar Veterinario</h3>
        </div> 
         <div class="form-group" >
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" />
            </div>
            
            <label for="especialidad">Especialidad</label>
            <input type="text" class="form-control" name="especialidad" />

            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" name="direccion" />

            <label for="horario">Horario</label>
            <input type="text" class="form-control" name="horario" />

            <label for="telefono">Telefono</label>
            <input type="text" class="form-control" name="telefono" />

            <br>
            <div align="center">
            <button type="submit" class="btn btn-success">Agregar Veterinario</button>
            </div> <br> <br> 
           
        </form>

    </div>
    <div class="col-sm-1">

    </div>

<div class="col-sm-4">
    <img src="{{ asset('imagenes/veterinarios.jpg') }}" class="img-fluid" alt="" width="100%" height="100%">
  
    </div>
    <div class="col-sm-1">

    </div>
</body>


@endsection
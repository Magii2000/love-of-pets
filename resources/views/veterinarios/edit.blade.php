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
    <div class="container" >
  <div align="center">
      
            <div class="col-sm-10" class="border-success"   style="background-color: rgb(216, 216, 216)"> 
              
          
        <form action="{{ route('veterinarios.update', $veterinario->id) }}" method="POST" >
            @csrf
            @method("PUT")

            <h3>Actualizar Datos</h3>

            <div class="form-group" align="left" \ >
                <label for="nombre" ><b> Nombre<b></label>
                <input type="text" class="form-control" name="nombre" value="{{ $veterinario->nombre }}"/>
            </div>
            
            <div class="form-group" align="left">
            <label for="especialidad">Especialidad</label>
            <input type="text" class="form-control" name="especialidad" value="{{ $veterinario->especialidad }}"/>
        </div>

        <div class="form-group" align="left">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" name="direccion" value="{{ $veterinario->direccion }}" />
        </div>

        <div class="form-group" align="left">
            <label for="horario">Horario</label>
            <input type="text" class="form-control" name="horario"  value="{{ $veterinario->horario }}"/>  
        </div>

        <div class="form-group" align="left">
  <label for="telefono">Telefono</label>
            <input type="text" class="form-control" name="telefono" value="{{ $veterinario->telefono }}" />


        </div>
          
            <hr>

            <button type="submit" class="btn btn-success">Actualizar Veterinario</button>
        <br>  <br>
        
        </form>
      
    </div>
</div>
  </div>
   
@endsection
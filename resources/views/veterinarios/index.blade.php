@extends('layouts.app')

@section('content')

<style>
table td{
    background-color: rgb(92, 104, 181);
}
</style>
    

<div class="container">

<div align="center">

    <h1 >VETERINARIOS</h1>
</div>

    <div class="card"  >
    <div class="card-header">

   
    <a  href="{{ route('veterinarios.create') }}" class="btn btn-success">Nuevo Veterinario</a>
 </div>
            <div class="card-body" aling="center">
<hr>


    <table class="table table-bordered table-hover table-dark  table-responsive container">
       
            <thead >
            <th>Id </th>
            <th>Nombre</th>
            <th>Especialidad</th>
            <th>Direccion</th>
            <th>Horario de consultas</th>
            <th>Telefono</th>
            <th>Edit</th>
            <th>Delete</th>


        </thead>
        <tbody >
            @foreach ($veterinarios as $veterinario)
                <tr>
                    <td>{{$veterinario->id}}</td>
                    <td>{{$veterinario->nombre}}</td>
                    <td>{{$veterinario->especialidad}}</td>
                    <td>{{$veterinario->direccion}}</td>
                    <td>{{$veterinario->horario}}</td>
                    <td>{{$veterinario->telefono}}</td>

                    <td><a href="{{ route('veterinarios.edit', $veterinario->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('veterinarios.destroy', $veterinario->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Del</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $veterinarios->links() }}
</div>
<div class="card-footer">
   
</div>
   </div>

</body>
@endsection
@extends('layouts.app')

@section('content')

<style>
    .imagen{
        background-image: url("imagenes/home.jpg");
        height: 100%;
        width: 100%;
        margin: 10%;
       

    }
    </style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}
 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
</div>

                <div class="card-body">
                    <div align="center">
                    <h1> LOVE OF PETS </h1>
                    </div>
                    <h3> GESTION </h3>

                    <a href="{{ route('veterinarios.index') }}" class="btn btn-primary"> Veterinarios</a>
                
                <img src="https://soyfotografodeperros.com/por-que-las-rescatistas-de-perros-piden-tantos-requisitos-para-adopcion/" alt="">
<div class="imagen">
</div>

                </div>
            </div>
        </div>
    </div>

    
</div>
@endsection

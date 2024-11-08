@extends('layouts/Molde')
@section('title', 'UsersAdmin')
@section('content')
<!-- Contenido Principal -->
<div class="background-div">
        <div class="inner-container">
            <div class="card my-4">
                <div class="card-header text-white" style='background-color: #143d7c'>
                    <h2>Agrega datos de usuarios</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="input-username">Nombre de usuario:</label>
                            <input type="text" id="input-username" class="form-control" placeholder="username">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input-e-mail">Correo:</label>
                            <input type="text" id="input-email" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input-password">Contraseña:</label>
                            <input type="text" id="input-password" class="form-control" placeholder="Contraseña">
                        </div>  
                        <button type="submit" class="btn btn-primary" style="background-color: #b20505">Agregar usuario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection 
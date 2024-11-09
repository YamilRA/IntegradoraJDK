@extends('layouts/Molde')
@section('title', 'UsersAdmin')
@section('content')
<!-- Contenido Principal -->
<div class="background-div">
        <div class="inner-container">
            <div class="card my-4">
                <div class="card-header text-white" style='background-color: #143d7c'>
                    <h2>Registra un nuevo usuario</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="input-name">Nombre y apellidos:</label>
                            <div class="input-group">
                                <input type="text" aria-label="First name" class="form-control" placeholder="Nombre">
                                <input type="text" aria-label="Last name" class="form-control" placeholder="Apellidos">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input-age">Fecha de Nacimiento:</label>
                            <input type="date" id="input-age" class="form-control bg-gray-700 text-gray-200 border-0 rounded-md p-2">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input-address">Dirección:</label>
                            <input type="text" id="input-address" class="form-control" placeholder="Dirección">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="input-phone">Teléfono:</label>
                            <input type="text" id="input-phone" class="form-control" placeholder="Teléfono">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="roles">Escoja un rol:</label>
                            <select id="roles" class="form-select">
                                <option value="">~</option>
                                <option value="admin">Administrador</option>
                                <option value="teacher">Profesor</option>
                                <option value="student">Alumno</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: #b20505"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection         
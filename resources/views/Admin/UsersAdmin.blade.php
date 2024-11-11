@extends('layouts.Molde')
@section('title', 'Users')
@section('content')
    <div class="inner-container">
        <div class="card my-4">
            <div class="card-header text-white" style="background-color: #143d7c;">
                <h2>Registra un nuevo usuario</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <!-- Columna principal del formulario -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="input-name">Nombre y apellidos:</label>
                                <div class="input-group">
                                    <input type="text" id="input-first-name" aria-label="First name" class="form-control" placeholder="Nombre">
                                    <input type="text" id="input-last-name" aria-label="Last name" class="form-control" placeholder="Apellidos">
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
                        </div>

                        <!-- Columna lateral para Correo, Usuario y Contraseña -->
                        <div class="col-md-6">
                            <div class="mb-3 d-flex align-items-center">
                                <label class="form-label me-2" for="input-email">Correo:</label>
                                <input type="text" id="input-email" class="form-control" placeholder="Correo">
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <label class="form-label me-2" for="input-user">Usuario:</label>
                                <input type="text" id="input-user" class="form-control" placeholder="Usuario">
                            </div>
                            <div class="mb-3 d-flex align-items-center">
                                <label class="form-label me-2" for="input-password">Contraseña:</label>
                                <input type="password" id="input-password" class="form-control" placeholder="Contraseña">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" style="background-color: #b20505;">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

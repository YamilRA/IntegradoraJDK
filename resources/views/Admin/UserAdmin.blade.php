@extends('layouts.Molde')
@section('title', 'Users')
@section('content')
<div class="inner-container">
    <div class="card my-4">
        <div class="card-header text-white" style="background-color: #143d7c;">
            <h2>Registra Usuario</h2>
        </div>
        <div class="card-body">
            <form action="/admin/guardar/persona" method="post">
                <section class="addPerson">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" id="username" name="username" class="form-control bg-gray-700 text-gray-200 border-0 rounded-md p-2">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Dirección">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">email:</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Teléfono">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="recovery_email">recovery_email:</label>
                        <input type="email" id="recovery_email" name="recovery_email" class="form-control" placeholder="Teléfono">
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
                    <button type="submit" class="btn btn-primary" style="background-color: #b20505;">Enviar</button>
                </section>
            </form>
        </div>
    </div>
</div>
@endsection

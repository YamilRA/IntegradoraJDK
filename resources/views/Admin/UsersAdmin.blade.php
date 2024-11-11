@extends('layouts.Molde')
@section('title', 'Users')
@section('content')
<div class="inner-container">
    <div class="card my-4">
        <div class="card-header text-white" style="background-color: #143d7c;">
            <h2>Registra un nuevo usuario</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="input-name">Nombre y apellidos:</label>
                    <div class="input-group">
                        <input type="text" id="input-first-name" name="first_name" aria-label="First name" class="form-control" placeholder="Nombre" required>
                        <input type="text" id="input-last-name" name="last_name" aria-label="Last name" class="form-control" placeholder="Apellidos" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="input-age">Fecha de Nacimiento:</label>
                    <input type="date" id="input-age" name="birth_date" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="input-address">Dirección:</label>
                    <input type="text" id="input-address" name="address" class="form-control" placeholder="Dirección" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="input-phone">Teléfono:</label>
                    <input type="text" id="input-phone" name="phone" class="form-control" placeholder="Teléfono" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="roles">Escoja un rol:</label>
                    <select id="roles" name="role_id" class="form-select" required>
                        <option value="">~</option>
                        <option value="1">Administrador</option>
                        <option value="2">Profesor</option>
                        <option value="3">Alumno</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: #b20505;">Enviar</button>
            </form>
            
        </div>
    </div>
</div>
@endsection
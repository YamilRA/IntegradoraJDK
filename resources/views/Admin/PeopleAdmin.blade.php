@extends('layouts.Molde')
@section('title', 'Users')
@section('content')
<div class="inner-container">
    <div class="card my-4">
        <div class="card-header text-white" style="background-color: #143d7c;">
            <h2>Registra Persona</h2>
        </div>
        <div class="card-body">
            <form action="/admin/guardar/persona" method="post">
                <section class="addPerson">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="name">Nombre y apellidos:</label>
                        <div class="input-group">
                            <input type="text" id="first_name" name="first_name" aria-label="First name" class="form-control" placeholder="Nombre">
                            <input type="text" id="last_name" name="last_name" aria-label="Last name" class="form-control" placeholder="Apellidos">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="birth-date">Fecha de Nacimiento:</label>
                        <input type="date" id="birth_date" name="birth_date" class="form-control bg-gray-700 text-gray-200 border-0 rounded-md p-2">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="address">Dirección:</label>
                        <input type="text" id="address" name="address" class="form-control" placeholder="Dirección">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="phone">Teléfono:</label>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Teléfono">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" style="background-color: #b20505;">Enviar</button>
                </section>
            </form>
        </div>
    </div>
</div>
@endsection

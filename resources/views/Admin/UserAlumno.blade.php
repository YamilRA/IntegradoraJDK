@extends('layouts/Molde')

@section('title', 'UserAlumno')

@section('content')
<!-- Contenido Principal -->
<div class="background-div">
    <div class="inner-container">
        <div class="card my-4">
            <div class="card-header text-white" style="background-color: #143d7c">
                <h2>Agrega datos de usuarios</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label" for="input-username">Nombre de usuario:</label>
                        <input type="text" id="input-username" class="form-control" placeholder="username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="input-email">Correo:</label>
                        <input type="email" id="input-email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="input-password">Contraseña:</label>
                        <input type="password" id="input-password" class="form-control" placeholder="Contraseña">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="Cintas">Cinta:</label>
                        <select id="Cintas" class="form-select">
                            <option>Blanca: 10 Kup</option>
                            <option>Blanca Avanzada: 9 Kup</option>
                            <option>Amarilla: 8 Kup</option>
                            <option>Amarilla Avanzada: 7 Kup</option>
                            <option>Verde: 6 Kup</option>
                            <option>Verde Avanzada: 5 Kup</option>
                            <option>Azul: 4 Kup</option>
                            <option>Azul Avanzada: 3 Kup</option>
                            <option>Roja: 2 Kup</option>
                            <option>Roja Avanzada: 1 Kup</option>
                            <option>Rojinegra: 1 Poom</option>
                            <option>Rojinegra: 2 Poom</option>
                            <option>Negra: 1 Dan</option>
                            <option>Negra: 2 Dan</option>
                            <option>Negra: 3 Dan</option>
                            <option>Negra: 4 Dan</option>
                            <option>Negra: 5 Dan</option>
                            <option>Negra: 6 Dan</option>
                            <option>Negra: 7 Dan</option>
                            <option>Negra: 8 Dan</option>
                            <option>Negra: 9 Dan</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: #b20505">Agregar usuario</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

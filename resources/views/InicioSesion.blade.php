@extends('Layouts.Molde')

@section('title', 'Inicio de Sesión')

@section('contents')
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card p-4" style="width: 300px;">
            <div class="text-center mb-4">
                <img src="{{ asset('images/JDKJulietasLogoBlanco.png') }}" alt="Logo" style="width: 100px;">
            </div>
            <h3 class="text-center">Inicio de Sesión</h3>
            <form>
                <div class="form-group">
                    <div class="input-container">
                        <input placeholder="Usuario" class="input-field" type="text">
                        <label for="input-field" class="input-label">Usuario</label>
                        <span class="input-highlight"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-container">
                        <input placeholder="Contraseña" class="input-field" type="password">
                        <label for="input-field" class="input-label">Contraseña</label>
                        <span class="input-highlight"></span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                <div class="text-center mt-3">
                    <a href="#">¿Olvidó su contraseña?</a>
                </div>
            </form>
        </div>
    </div>
@endsection
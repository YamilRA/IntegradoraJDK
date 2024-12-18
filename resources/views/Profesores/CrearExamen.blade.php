    @extends('layouts.Molde')
    @section('title', 'Crear nuevo Examen')
    @section('content')
    
    <!-- Contenido Principal -->
    <div class="background-div">
        <div class="inner-container">
        <div class="card my-4" >
        <div class="card-header text-white " style='background-color: #143d7c'>
            <h2>Crear Nuevo Examen</h2>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="grupoSeleccionado" class="form-label">Nombre del examen:</label>
                    <input type="text" id="examenNombre" class="form-control" placeholder="Ingresar el nombre del examen">
                </div>

                <div class="mb-3">
                    <label for="ubicacion" class="form-label">Ubicación del examen:</label>
                    <input type="text" id="ubicacion" class="form-control" placeholder="Ingresar la ubicación del examen">
                </div>

                <div class="mb-3">
                    <label for="fechaExamen" class="form-label">Fecha del examen:</label>
                    <input type="date" id="fechaExamen" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="horaInicio" class="form-label">Duracion del examen:</label>
                    <input type="time" id="horaInicio" class="form-control" placeholder="Ingresar la hora de inicio del examen">
                </div>

                <div class="mb-3">
                    <label for="descripcionExamen" class="form-label">Descripción del examen:</label>
                    <textarea id="descripcionExamen" class="form-control" rows="3" placeholder="Ingresar la descripción del examen"></textarea>
                </div>

                <button type="submit" class="btn btn-primary" style='background-color: #b20505'>Crear Examen</button>
            </form>
        </div>
    </div>
        </div>
    </div>
@endsection


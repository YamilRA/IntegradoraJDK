@extends('../Layouts.Molde')
@section('title', 'Crear nueva Clase')
@section('contents')
    <!-- Contenido Principal -->
    <div class="background-div">
        <div class="inner-container">
        <div class="card my-4" >
        <div class="card-header text-white " style='background-color: #143d7c'>
            <h2>Crear Nueva Clase</h2>
        </div>
        <div class="card-body">
            <form>
                
                <div class="mb-3">
                    <label for="numEstudiantes" class="form-label">Número de Estudiantes:</label>
                    <input type="number" id="numEstudiantes" class="form-control" max="30" min="1" placeholder="Máximo 30" value="1">
                </div>

                <div class="mb-3">
                    <label for="diasClase" class="form-label">Días de la clase:</label>
                    <input type="text" id="diasClase" class="form-control" placeholder="Ingresar los días de la clase">
                </div>

                <div class="mb-3">
                    <label for="horaInicio" class="form-label">Hora de inicio:</label>
                    <input type="time" id="fechaInicio" class="form-control" placeholder="Ingresar la hora de inicio del examen">
                </div>

                <div class="mb-3">
                    <label for="horaFin" class="form-label">Hora de fin:</label>
                    <input type="time" id="horaFin" class="form-control" placeholder="Ingresar la hora de fin del examen">
                </div>

                <button type="submit" class="btn btn-primary" style='background-color: #b20505'>Crear Clase</button>
            </form>
        </div>
    </div>
        </div>
    </div>
@endsection

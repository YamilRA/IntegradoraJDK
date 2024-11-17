{{-- @extends('layouts.Molde')
@section('title', 'Asignar alumno a clase')
@section('content')


<!-- Contenido Principal -->
  <div class="background-div">

<!-- Contenido Principal -->

    <div class="inner-container-fluid">
        <div class="card my-4" >
            <div class="card-header text-white " style='background-color: #143d7c'>
                <h2>Asignar alumno a clase</h2>

                <table class="table table-primary table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col"></th>
                        <th scope="col">Clase</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody class="table-group-divider">
                      <tr>
                        <th scope="row">1</th>
                        <td>Clase 1</td>
                        <td><p><a class="link-opacity-100" href="#">Agregar alumno</a></p></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Clase 2</td>
                        <td><p><a class="link-opacity-100" href="#">Agregar alumno</a></p></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Clase 3</td>
                        <td><p><a class="link-opacity-100" href="#">Agregar alumno</a></p></td>
                      </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>

@endsection --}}

@extends('layouts.Molde')
@section('title', 'Asignar alumno a clase')
@section('content')

<!-- Contenido Principal -->
<div class="background-div">
    <div class="inner-container-fluid">
        <div class="card my-4">
            <div class="card-header text-white" style='background-color: #143d7c'>
                <h2>Asignar alumno a clase</h2>

                <table class="table table-primary table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Clase</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <th scope="row">1</th>
                            <td>Clase 1</td>
                            <td>
                                <p><a class="link-opacity-100" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="setClassInfo('Clase 1')">Agregar alumno</a></p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Clase 2</td>
                            <td>
                                <p><a class="link-opacity-100" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="setClassInfo('Clase 2')">Agregar alumno</a></p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Clase 3</td>
                            <td>
                                <p><a class="link-opacity-100" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="setClassInfo('Clase 3')">Agregar alumno</a></p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Asignar Alumno a <span id="classTitle"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="{{ route('asignar.alumno', ['classId' => $classId]) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="studentName" class="form-label">Nombre del Alumno</label>
                    <input type="text" class="form-control" id="studentName" name="studentName" required>
                </div>
                <button type="submit" class="btn btn-primary">Asignar Alumno</button>
            </form>
            
            </div>
        </div>
    </div>
</div>

<!-- Script para establecer la clase seleccionada -->
<script>
    function setClassInfo(className) {
        document.getElementById('classTitle').innerText = className;
        document.getElementById('className').value = className;
    }
</script>

@endsection


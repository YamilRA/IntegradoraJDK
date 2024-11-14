@extends('layouts.Molde')
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

@endsection

@extends('layouts.Molde')

@section('title', 'Examenes')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- Card Principal -->
            <div class="col-12 col-md-10 col-lg-8 my-4">
                <div class="card shadow-lg border-light">
                    <div class="card-header text-white" style="border-radius: 10px 10px 0 0; background-color: #2e3a59;">
                        <h2 class="text-center">Examenes</h2>
                    </div>
                    <div class="card-body p-4">
                        <!-- Tabla de Exámenes con clase .table-responsive -->
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered">
                                <thead class="table-dark">
                                <tr>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Duracion</th>
                                    <th scope="col">Hora de Inicio</th>
                                    <th scope="col">Hora de Fin</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Alumnos</th>
                                    <th scope="col">Agregar alumnos</th>
                                    <th scope="col">Generar hoja de examen</th>
                                </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                <tr>
                                    <th scope="row">2024-12-20</th>
                                    <td>Examen Diciembre 2024</td>
                                    <td>Examen de promocion de grados Cintas blancas y amarillas</td>
                                    <td>1 hora</td>
                                    <td>10:00 AM</td>
                                    <td>11:00 AM</td>
                                    <td><span class="badge bg-success">Pendiente</span></td>
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#modal-2">Alumnos del examen</a></td>
                                    <td><a href="#" data-bs-toggle="modal" data-bs-target="#modal-1">Agregar alumnos</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- Modal para Agregar alumnos -->
                        <div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="modal-1Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal-1Label">Examen</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Clase 1
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">Matricula</th>
                                                                <th scope="col">Nombre</th>
                                                                <th scope="col">Cinta</th>
                                                                <th scope="col">Seleccionar</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody class="table-group-divider">
                                                            <tr>
                                                                <th scope="row">Alejandro1</th>
                                                                <td>Alejandro Ortiz Talamantes</td>
                                                                <td>Negra 1 Dan</td>
                                                                <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #b20505; color: white;">Guardar Cambios</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="modal-2" tabindex="-1" aria-labelledby="modal-1Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modal-1Label">Examen</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th scope="col">Matricula</th>
                                                                <th scope="col">Nombre</th>
                                                                <th scope="col">Cinta</th>
                                                                <th scope="col">Cinta a pasar</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody class="table-group-divider">
                                                            <tr>
                                                                <th scope="row">Alejandro1</th>
                                                                <td>Alejandro Ortiz Talamantes</td>
                                                                <td>Negra 1 Dan</td>
                                                                <td>Negra 2 Dan</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" data-bs-dismiss="modal" style="background-color: #b20505; color: white;">Salir</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="/crear/examen" class="btn btn-danger w-100 py-3 mt-4" style="border-radius: 50px; font-size: 16px;">
                            <i class="fas fa-plus-circle"></i> Crear Examen
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Añadir iconos de FontAwesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection

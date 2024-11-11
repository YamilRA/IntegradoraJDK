<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabs en Pantalla Completa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos adicionales para pantalla completa */
        html, body {
            height: 100%;
            margin: 0;
        }
        .full-height {
            height: 100vh; /* Ocupa toda la altura de la ventana */
        }
        .tab-content {
            height: calc(100% - 50px); /* Ajuste para evitar superposición con las pestañas */
            overflow-y: auto; /* Agrega scroll si el contenido es muy extenso */
        }
    </style>
</head>
<body>

<div class="container-fluid full-height d-flex flex-column mb-3 mt-3">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Progreso</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Grupo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Avisos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Finanzas</a>
        </li>
    </ul>

    <!-- Tab content -->
    <div class="tab-content flex-grow-1">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="p-3">
                <h5>Progreso</h5>
                <p>
                    @extends('layouts/MoldeAl')
                    @section('contents')
                    @endsection

                </p>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="p-3">
                <h5>Grupo</h5>
                <p>Este es el contenido de la pestaña "Perfil".</p>
            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="p-3">
                <h5>Avisos</h5>
                <p>Este es el contenido de la pestaña "Contacto".</p>
            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="p-3">
                <h5>Finanzas</h5>
                <p>Este es el contenido de la pestaña "Contacto".</p>
            </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



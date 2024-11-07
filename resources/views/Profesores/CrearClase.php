<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jidokwan Julietas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos Generales */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            display: flex;
            flex-direction: column;
        }

        /* Estilos de Navbar y Footer */
        footer, .navbar {
            background-color: #072146;
            padding: 1rem 0;
        }
        .container-fluid {
            background-color: #072146;
        }
        .img-logoNav {
            width: 90px;
            height: 90px;
            margin-left: 30px;
        }
        .navbar-toggler {
            background-color: white;
        }
        
        /* Estilos de Fondo */
        .background-div {
            flex: 1;
            width: 100%;
            height: 100%;
            background-image: url('images/FondoUser.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .inner-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 0.5rem;
            border-radius: 10px;
            width: 30vw;
            height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 20px;
        }

        /* Estilos de Footer */
        .footer-logo {
            width: 60px;
            height: 60px;
        }
        .footer-link, .offcanvas-title, .offcanvas-body .nav-link, .offcanvas-body .dropdown-item {
            color: white;
        }
        .imgFace {
            width: 28px;
            height: 28px;
            margin-right: 5px;
        }
        .offcanvas {
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/JDKJulietasLogoBlanco.png" alt="Logo" class="img-logoNav">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="color: white"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

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
                    <label for="numEstudiantes" class="form-label">Número de Estudiantes:</label>
                    <input type="number" id="numEstudiantes" class="form-control" max="30" placeholder="Máximo 30" value="1">
                </div>

                <div class="mb-3">
                    <label for="diasClase" class="form-label">Días de la clase:</label>
                    <input type="date" id="diasClase" class="form-control" placeholder="Ingresar los días de la clase">
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

    <!-- Footer -->
    <footer class="text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 d-flex flex-column align-items-center justify-content-center footer-link">
                    <p>8717976623</p>
                    <p><a href="https://maps.app.goo.gl/DCgQmxAuw8RjsNTo6" class="footer-link">Querétaro 120, La Merced, 27296 Torreón, Coah.</a></p>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-center">
                    <img src="images/JDKJulietasLogoBlanco.png" alt="Footer Logo" class="footer-logo">
                </div>
                <div class="col-4 d-flex align-items-center justify-content-center footer-contact">
                    <p>
                        <img src="images/facebookIcon.png" alt="Facebook Icon" class="imgFace"> 
                        <a href="https://www.facebook.com/JidoKwanGymJulietas" class="footer-link">Jido Kwan Gym Julietas</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


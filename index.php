<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Libreria AHC</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">   

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar INICIO -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0"><i class="bi bi-book"></i> AHC</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="libros.php" class="nav-item nav-link">Libros</a>
                <a href="autores.php" class="nav-item nav-link">Autores</a>
                <a href="contacto.php" class="nav-item nav-link">Contacto</a>
            </div>
        </div>
    </nav>
    <!-- Navbar FIN -->

    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="shadow fs-4 text-white">Bienvenido(a)</p>
                                    <h1 class="text-shadow display-1 text-white mb-5">No dejes para mañana lo que puedas leer hoy.</h1>
                                    <a href="./libros.php" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Ver libros</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

       <!-- Cards Start -->
       <div class="container py-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Tips</p>
            <h1 class="mb-5">¿Cómo sacar provecho de mi lectura?</h1>
        </div>
        <div class="card-group py-5">
            <div class="card">
            <img src="./img/light.jpg" width="200" height="350" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Iluminación</h5>
                    <p class="card-text">Las luces más apropiadas para la lectura y el estudio serían las más blancas o frías. </p>
                </div>
            </div>
            <div class="card">
            <img src="./img/couch.webp" width="200" height="350" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Comodidad</h5>
                    <p class="card-text">Estar en un lugar confortable es escencial para sentirte relajado(a) y permanecer el tiempo que quieras leyendo.</p>
                </div>
            </div>
            <div class="card">
                <img src="./img/silence.jpg" width="200" height="350" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Silencio</h5>
                    <p class="card-text">Es bueno que te encuentres en un lugar tranquilo o bien puedes intentar poner música instrumental de fondo para concentrarte.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Cards End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 pb-5">
                <div class="col-lg-12 col-md-12 text-center">
                    <h5 class="text-white mb-4">"Creo que algo muy mágico puede suceder cuando se lee un buen libro."</h5>
                    <p class="mb-1">- JK Rowling.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Inicio -->
    <div class="container-fluid bg-secondary text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                   <a href="#">María Amelia Henríquez Cross</a>, 2022-1052
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright Fin -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
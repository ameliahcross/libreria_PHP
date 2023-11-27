<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Librería AHC</title>
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
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="libros.php" class="nav-item nav-link active">Libros</a>
                <a href="autores.php" class="nav-item nav-link">Autores</a>
                <a href="contacto.php" class="nav-item nav-link">Contacto</a>
            </div>
        </div>
    </nav>
    <!-- Navbar FIN -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="text-shadow display-3 text-white mb-4 animated slideInDown">Libros</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Libros Start -->
    <div class="container-xxl py-5">
        <div class="row">
            <div class="col-12 text-left justify-content-center">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="mb-5">Nuestros Títulos</h1>
            </div>
                <table class="table pt-0">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">Título</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "conexion.php";
                            $sql = $conexion -> query("select * from titulos order by titulo");
                            // Obtiene todos los registros resultantes de la consulta como objetos y los almacena en la variable $fila 
                            $fila = $sql -> fetchAll(PDO::FETCH_OBJ);

                            foreach ($fila as $row) {
                        ?>
                                <tr>
                                    <th>
                                        <?php echo $row -> titulo?>
                                    </th>
                                </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Libros End -->

    <!-- Cards Start -->
    <div class="container py-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Nuestros libros</p>
            <h1 class="mb-5">Los más buscados</h1>
        </div>
        <div class="card-group py-5">
            <div class="card">
                <img src="./img/cocina.jpg" width="200" height="450" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cocina o Barbarie</h5>
                    <p class="card-text">Entusiasta e inconformista, Maria Nicolau nos abre las puertas a una cocina rica, sostenible, apasionada y, sobre todo, coherente.</p>
                </div>
            </div>
            <div class="card">
                <img src="./img/fund-prog.jpg" width="200" height="450" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fundamentos de programación para videojuegos</h5>
                    <p class="card-text">Este libro aborda de forma clara y didáctica la programación de videojuegos, tanto desde un punto de vista teórico, introduciendo y asentando los conceptos fundamentales, como desde el práctico, con la aplicación de estos conceptos aun motor de videojuegos ampliamente utilizado, Unity 3D.</p>
                </div>
            </div>
            <div class="card">
                <img src="./img/tus-zonas.jpg" width="200" height="450" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Tus Zonas Erroneas</h5>
                    <p class="card-text">Estás delante del libro de autoayuda más leído del mundo. Millones de personas y décadas de vigencia corroboran su eficacia. Saboréalo y concédete la posibilidad de conocerte mejor y ser más feliz.</p>
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
                    <h5 class="text-white mb-4">"El libro para leer no es el que piensa por ti, sino el que te hace pensar."</h5>
                    <p class="mb-1">- Harper Lee.</p>
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
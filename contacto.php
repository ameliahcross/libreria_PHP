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
                <a href="libros.php" class="nav-item nav-link">Libros</a>
                <a href="autores.php" class="nav-item nav-link">Autores</a>
                <a href="contacto.php" class="nav-item nav-link active">Contacto</a>
            </div>
        </div>
    </nav>
    <!-- Navbar FIN -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header-contacto py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="text-shadow display-3 text-white mb-4 animated slideInDown">Contacto</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5 mb-3">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Contáctenos</p>
                <h1 class="mb-5">Envíenos su solicitud</h1>
            </div>
            <div class="row g-5">

                <!-- Alerta de envio exitoso -->
                <div id="alerta-exito" class="container oculto slideInUp aniamated">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <div>  <i class="bi bi-check-circle-fill me-2"></i> ¡Hemos recibido su solicitud!</div>             
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>

                <!-- Alerta de error de envio-->
                <div id="alerta-fallo" class="container oculto slideInUp aniamated">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <div>  <i class="bi bi-exclamation-triangle-fill me-2"></i> Hubo un error al enviar su solicitud. Intente de nuevo más tarde.</div>             
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>

                <!-- Formulario -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <form action="proceso.php" method="post" onsubmit="return validarFormulario();">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="nombre" type="text" class="form-control" id="nombre">
                                    <label for="name">Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="email" type="email" class="form-control" id="email" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input name="asunto" type="text" class="form-control" id="asunto">
                                    <label for="subject">Asunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="mensaje" class="form-control" id="mensaje" style="height: 250px"></textarea>
                                    <label for="message">Mensaje</label>
                                </div>
                            </div>
                            <span id="obligatorio" class="oculto"> * Todos los campos son obligatorios</span>
                            <div class="col-12">
                                <button id="btn-submit" class="btn btn-secondary rounded-pill py-3 px-5" type="submit">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- Fin Formulario -->
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h3 class="mb-4">Detalles de Contacto</h3>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-map-marker-alt text-body"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Librería AHC</h6>
                            <span>Autopista Las Américas, Km. 27, PCSD, La Caleta, Boca Chica 11606.</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-phone-alt text-body"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Llámenos</h6>
                            <span>849-000-0000</span>
                        </div>
                    </div>
                    <div class="d-flex border-bottom-0 pb-3 mb-3">
                        <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                            <i class="fa fa-envelope text-body"></i>
                        </div>
                        <div class="ms-3">
                            <h6>Envíenos un email</h6>
                            <span>20221052@itla.edu.do</span>
                        </div>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60555.410224604384!2d-69.73273614179686!3d18.451329300000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf7ff3f1653e37%3A0xc80c36909a523777!2sInstituto%20Tecnol%C3%B3gico%20de%20Las%20Am%C3%A9ricas%20(ITLA)!5e0!3m2!1ses-419!2sdo!4v1700874788405!5m2!1ses-419!2sdo" width="500" height="450" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 pb-5">
                <div class="col-lg-12 col-md-12 text-center">
                    <h5 class="text-white mb-4">"Las personas libres jamás podrán concebir lo que los libros significan para quienes vivimos encerrados"</h5>
                    <p class="mb-1">- Ana Frank.</p>
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


    <!-- Modal de Validacion formulario-->
    <div id="modalValidacion" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">!Aviso!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Debe llenar todos los campos de este formulario antes de enviarnos el correo.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Envío exitoso -->
    <div id="modalConfirmacion" class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>!Su solicitud ha sido enviada exitosamente!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>


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

    <!-- Mi JavaScript -->
    <script src="js/contacto.js"></script>

</body>

</html>
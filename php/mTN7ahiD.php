<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WADU</title>
    <!-- css de cada apartado -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style_biblioteca.css">
    <link rel="stylesheet" href="../assets/css/style_propuesta.css">
    <link rel="stylesheet" href="../assets/css/style_trabaja.css">
    <link rel="stylesheet" href="../assets/css/style_empresa.css">

    <!-- icono de la página -->
    <link rel="icon" href="../assets/img/logo.png" type="image/png">
    <!-- CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <!-- <script src="../assets/js/toggle.js"></script> -->

    <!-- PLAN DE PRECIOS -->
    <link href='https://fonts.googleapis.com/css?family=Homemade+Apple' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sahitya:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../assets/css/css_precios/component.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/css_precios/demo.css" />
</head>

<body>

    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../assets/img/logo.png" alt="" width="50" height="45">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark"
                aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse show" id="navbarDark">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                    <li class="nav-item">
                        <a class="text-muted">Registro usuarios (Acceso solo Administradores)</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="interno">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="signup-form">
                        <form action="register_user_be.php" method="POST" class="mt-5 border p-4 bg-light shadow">
                            <h3 class="mb-5 text-secondary">Crear una cuenta</h3>
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label>Nombre completo<span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Escriba el nombre completo">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label>Nickname<span class="text-danger">*</span></label>
                                    <input type="text" name="nickname" class="form-control"
                                        placeholder="Escriba el nickname">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label>Correo electrónico<span class="text-danger">*</span></label>
                                    <input type="text" name="email" class="form-control"
                                        placeholder="Escriba el correo electrónico">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label>Contraseña<span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Escriba la contraseña">
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary my-button float-end">Registrarse</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- FOOTER -->
    <footer class="fixed-bottom">
        <div class="container">
            <p>
                &copy; 2023-2024 Cuatrovientos (WADU) &middot;
                <a href="#"><i class="bi bi-instagram my-link"></i></a> &middot;
                <a href="#"><i class="bi bi-youtube my-link"></i></a> &middot;
                <a href="#"><i class="bi bi-github my-link"></i></a>
            </p>
        </div>
    </footer>

    <!-- Botón para volver arriba -->
    <button id="scrollToTopBtn" class="btn btn-primary btn-floating btn-lg">
        <i class="fas fa-arrow-up">TOP</i>
    </button>

    <!-- JavaScript para el botón de volver arriba -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <!--<script src="../assets/js/script.js"></script>  Va antes el jQuery que esto de script src-->
</body>

</html>
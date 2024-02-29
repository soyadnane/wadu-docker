<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header('./index.php');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WADU</title>
    <!-- css de cada apartado -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style_biblioteca.css">
    <link rel="stylesheet" href="./assets/css/style_propuesta.css">
    <link rel="stylesheet" href="./assets/css/style_trabaja.css">
    <link rel="stylesheet" href="./assets/css/style_empresa.css">

    <!-- icono de la página -->
    <link rel="icon" href="./assets/img/logo.png" type="image/png">
    <!-- CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="./assets/js/toggle.js"></script>

    <!-- PLAN DE PRECIOS -->
    <link href='https://fonts.googleapis.com/css?family=Homemade+Apple' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sahitya:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./assets/css/css_precios/component.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/css_precios/demo.css" />
</head>

<body>

    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./assets/img/logo.png" alt="" width="50" height="45">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse show" id="navbarDark">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#index">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#biblioteca">Biblioteca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#propuesta">Propuestas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#trabaja">Empleo</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">La empresa</a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link dropdown-item" href="#equipo">El equipo</a></li>
                            <li><a class="nav-link dropdown-item" href="#origen">Origen</a></li>
                            <li><a class="nav-link dropdown-item" href="#mvv">Misión-Visión-Valores</a></li>
                            <li><a class="nav-link dropdown-item" href="#organigrama">Organigrama</a></li>
                            <li><a class="nav-link dropdown-item" href="#clientes">Clientes</a></li>
                            <li><a class="nav-link dropdown-item" href="#contacto">Contac3to</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#login">Portal Interno</a>
                    </li>
                </ul>
                <a class="nav-link nav-link-lenguage active" href="./index.php"><img src="./assets/img/espana.png" alt="español" width="20px"></a>
                <a class="nav-link nav-link-lenguage active" href="./en/index.php"><img src="./assets/img/reino-unido.png" alt="ingles" width="20px"></a>
                <a class="nav-link nav-link-lenguage active" href="./ar/index.php"><img src="./assets/img/emiratos-arabes-unidos.png" alt="arabe" width="20px"></a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div id="index">
        <!-- Carousel de la primera página únicamente. -->
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src='./assets/img/imagen1.jpg' class="d-block h-100 w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 style="color: white !important;">WADU</h1>
                            <p>Descubre el futuro de la educación en WADU: el conocimiento en tus manos.</p>
                            <p><a class="btn btn-lg btn-primary my-button sign-link" href="#login">Sign up</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src='./assets/img/imagen2.jpg' class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 style="color: white !important;">WADU</h1>
                            <p>Un mundo sin sed de conocimiento sería un mundo sin progreso ni esperanza. </p>
                            <p><a class="btn btn-lg btn-primary my-button sign-link" href="#login">Sign up</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src='./assets/img/imagen3.jpg' class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 style="color: white !important;">WADU</h1>
                            <p>El conocimiento es el faro que ilumina el vasto universo de
                                posibilidades que nos rodea.</p>
                            <p><a class="btn btn-lg btn-primary my-button sign-link" href="#login">Sign up</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Contenido de la primera página algunas noticias y cosas relevantes. -->
        <div class="container">
            <div class="card">
                <div class="card-header my-card-header">
                    ¡Novedades!
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nuevo curso añadido</h5>
                    <p class="card-text">
                        El nuevo curso de Ciberseguridad ya está disponible. Pulsa para ver más detalles y comienzalo
                        ahora
                    </p>
                    <a href="#biblioteca" class="btn btn-primary my-button biblioteca-link">Ver ahora</a>
                </div>
                <div class="card-footer my-card-footer text-muted">
                    1 day ago
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header my-card-header">
                    ¡Novedades!
                </div>
                <div class="card-body">
                    <h5 class="card-title">Nuevas ofertas para los más rapidos!!</h5>
                    <p class="card-text">En esta época de rebajas, te ofrecemos ofertas exclusivas durante las
                        siguientes 24 horas. Pulsa para ver el plan de precios</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal" data-bs-target="#exampleModalRebajado">
                        Ver ahora
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalRebajado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <section class="pricing-section bg-1">
                                        <h2 class="pricing-section__title">REBAJAS!!!</h2>
                                        <div class="pricing pricing--sonam">
                                            <div class="pricing__item">
                                                <h3 class="pricing__title">Simple</h3>
                                                <div class="pricing__price">
                                                    <span class="rebajado-anterior">14.99 €</span>
                                                    <span class="rebajado-posterior">8.99 €</span>
                                                </div>
                                                <p class="pricing__sentence">Un solo curso disponible</p>
                                                <ul class="pricing__feature-list">
                                                    <li class="pricing__feature">IA adaptable a tus necesidades</li>
                                                    <li class="pricing__feature">Plan de seguimiento personalizado</li>
                                                    <li class="pricing__feature">Accesible durante 3 meses</li>
                                                </ul>
                                                <button class="pricing__action">Elegir plan</button>
                                            </div>
                                            <div class="pricing__item">
                                                <h3 class="pricing__title">Estandar</h3>
                                                <div class="pricing__price">
                                                    <span class="rebajado-anterior">119.99 €</span>
                                                    <span class="rebajado-posterior">71.99 €</span>
                                                </div>
                                                <p class="pricing__sentence">Todos los cursos disponibles</p>
                                                <ul class="pricing__feature-list">
                                                    <li class="pricing__feature">IA adaptable a tus necesidades</li>
                                                    <li class="pricing__feature">Sin plan de seguimiento personalizado
                                                    </li>
                                                    <li class="pricing__feature">Accesible durante 1 año</li>
                                                </ul>
                                                <button class="pricing__action">Elegir plan</button>
                                            </div>
                                            <div class="pricing__item">
                                                <h3 class="pricing__title">Premium</h3>
                                                <div class="pricing__price">
                                                    <span class="rebajado-anterior">199.99 €</span>
                                                    <span class="rebajado-posterior">119.99 €</span>
                                                </div>
                                                <p class="pricing__sentence">Todos los cursos disponibles</p>
                                                <ul class="pricing__feature-list">
                                                    <li class="pricing__feature">IA adaptable a tus necesidades</li>
                                                    <li class="pricing__feature">Plan de seguimiento personalizado</li>
                                                    <li class="pricing__feature">Accesible durante 1 año</li>
                                                    <li class="pricing__feature">Acceso a ofertas exclusivas</li>
                                                </ul>
                                                <button class="pricing__action">Elegir plan</button>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer my-card-footer text-muted">
                    4 min ago
                </div>
            </div>
        </div>

        <br><br><br>
    </div>

    <div id="biblioteca" class="mb-5">
        <div class="container m-3 mx-auto">
            <div class="row">
                <div class="col-md-7">
                    <div class="section-title">
                        <h2>Cursos disponibles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="card h-100 mh-100" style="height: 15rem;">
                        <div class="row g-0">
                            <div class="col-5 col-sm-4">
                                <img src="./assets/img/php.png" class="img-fluid w-100 h-100" alt="php">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">PHP Avanzado</h4>
                                    <h6 class="card-title">Adnane E.B</h6>
                                    <p class="card-text">
                                        ¡Descubre el poder de PHP en nuestro curso exclusivo! Aprende a crear sitios web
                                        dinámicos con facilidad. Conviértete en un experto en desarrollo web utilizando
                                        PHP para formularios, bases de datos y mucho más. ¡Inscríbete y domina el arte
                                        de la programación web interactiva con PHP!
                                    </p>
                                    <p class="card-text"><small class="text-muted">2h y 30m</small></p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ver ahora
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PLAN DE PRECIOS</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Un solo curso disponible
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 3
                                                                        meses</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Estandar</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Sin plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                    <li class="pricing__feature">Acceso a ofertas
                                                                        exclusivas</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="card h-100 mh-100" style="height: 15rem;">
                        <div class="row g-0">
                            <div class="col-5 col-sm-4">
                                <img src="./assets/img/python.png" class="img-fluid w-100 h-100" alt="python">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">Python</h4>
                                    <h6 class="card-title">Martín Gonzalez</h6>
                                    <p class="card-text">
                                        ¡Explora el potencial de Python en nuestro curso especializado! Aprende desde lo
                                        básico hasta técnicas avanzadas de programación. Domina la creación de
                                        aplicaciones y soluciones con Python de manera efectiva.
                                        ¡Inscríbete y domina el lenguaje de programación más usado a nivel mundial!
                                    </p>
                                    <p class="card-text"><small class="text-muted">2h y 45m</small></p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ver ahora
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PLAN DE PRECIOS</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Un solo curso disponible
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 3
                                                                        meses</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Estandar</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Sin plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                    <li class="pricing__feature">Acceso a ofertas
                                                                        exclusivas</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-6 col-sm-12">
                    <div class="card h-100 mh-100" style="height: 15rem;">
                        <div class="row g-0">
                            <div class="col-5 col-sm-4">
                                <img src="./assets/img/sql.png" class="img-fluid w-100 h-100" alt="SQL">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">SQL</h4>
                                    <h6 class="card-title">Hafsa Aghmir</h6>
                                    <p class="card-text">
                                        Sumérgete en la gestión de bases de datos con nuestro curso de SQL. Aprende a
                                        manipular datos, consultas y diseños de bases de datos para desarrollar sistemas
                                        eficientes. ¡Entra ahora y aprende a gestionar bases de datos!
                                    </p>
                                    <p class="card-text"><small class="text-muted">3h y 15m</small></p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ver ahora
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PLAN DE PRECIOS</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Un solo curso disponible
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 3
                                                                        meses</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Estandar</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Sin plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                    <li class="pricing__feature">Acceso a ofertas
                                                                        exclusivas</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="card h-100 mh-100" style="height: 15rem;">
                        <div class="row g-0">
                            <div class="col-5 col-sm-4">
                                <img src="./assets/img/javascript.png" class="img-fluid w-100 h-100" alt="JavaScript">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">JavaScript</h4>
                                    <h6 class="card-title">María Lopez</h6>
                                    <p class="card-text">
                                        Conviértete en un maestro del desarrollo web interactivo. Aprende a utilizar
                                        JavaScript para crear experiencias dinámicas y modernas en nuestro curso
                                        especializado.
                                    </p>
                                    <p class="card-text"><small class="text-muted">1h y 15m</small></p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ver ahora
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PLAN DE PRECIOS</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Un solo curso disponible
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 3
                                                                        meses</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Estandar</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Sin plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                    <li class="pricing__feature">Acceso a ofertas
                                                                        exclusivas</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-6 col-sm-12">
                    <div class="card h-100 mh-100" style="height: 15rem;">
                        <div class="row g-0">
                            <div class="col-5 col-sm-4">
                                <img src="./assets/img/so.png" class="img-fluid w-100" alt="Linux y Windows">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">Linux y Windows</h4>
                                    <h6 class="card-title">David Carmona</h6>
                                    <p class="card-text">
                                        Domina ambos sistemas operativos con nuestro curso. Adquiere habilidades en la
                                        administración de sistemas, comandos y configuración para maximizar tu
                                        productividad.
                                    </p>
                                    <p class="card-text"><small class="text-muted">5h y 33m</small></p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ver ahora
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PLAN DE PRECIOS</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Un solo curso disponible
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 3
                                                                        meses</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Estandar</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Sin plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                    <li class="pricing__feature">Acceso a ofertas
                                                                        exclusivas</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="card h-100 mh-100" style="height: 15rem;">
                        <div class="row g-0">
                            <div class="col-5 col-sm-4">
                                <img src="./assets/img/ciberseguridad.png" class="img-fluid w-100" alt="Ciberseguridad">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">Ciberseguridad</h4>
                                    <h6 class="card-title">Cristian Fernandez</h6>
                                    <p class="card-text">
                                        Protege tus datos y aprende a prevenir amenazas en nuestro curso de
                                        ciberseguridad. Adquiere habilidades esenciales para garantizar la seguridad de
                                        la información.
                                    </p>
                                    <p class="card-text"><small class="text-muted">4h y 30m</small></p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ver ahora
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PLAN DE PRECIOS</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Un solo curso disponible
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 3
                                                                        meses</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Estandar</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Sin plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                    <li class="pricing__feature">Acceso a ofertas
                                                                        exclusivas</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-6 col-sm-12">
                    <div class="card h-100 mh-100" style="height: 15rem;">
                        <div class="row g-0">
                            <div class="col-5 col-sm-4">
                                <img src="./assets/img/office.png" class="img-fluid w-100" alt="Microsoft Office">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">Microsoft Office</h4>
                                    <h6 class="card-title">Iñigo Ancín</h6>
                                    <p class="card-text">
                                        Mejora tu productividad con nuestras lecciones de Microsoft Office. Aprende a
                                        utilizar Word, Excel, PowerPoint y más de manera eficiente para optimizar tu
                                        trabajo.
                                    </p>
                                    <p class="card-text"><small class="text-muted">6h y 45m</small></p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ver ahora
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PLAN DE PRECIOS</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Un solo curso disponible
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 3
                                                                        meses</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Estandar</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Sin plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                    <li class="pricing__feature">Acceso a ofertas
                                                                        exclusivas</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="card h-100 mh-100" style="height: 15rem;">
                        <div class="row g-0">
                            <div class="col-5 col-sm-4">
                                <img src="./assets/img/virtualizacion.png" class="img-fluid w-100" alt="Virtualización">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">Virtualización</h4>
                                    <h6 class="card-title">Adnane E.B.</h6>
                                    <p class="card-text">
                                        Descubre la virtualización en nuestro curso especializado. Aprende a utilizar
                                        herramientas y técnicas para crear y gestionar entornos virtuales de manera
                                        eficaz.
                                    </p>
                                    <p class="card-text"><small class="text-muted">2h y 35m</small></p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ver ahora
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PLAN DE PRECIOS</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Un solo curso disponible
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 3
                                                                        meses</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Estandar</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Sin plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                    <li class="pricing__feature">Acceso a ofertas
                                                                        exclusivas</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-6 col-sm-12">
                    <div class="card h-100 mh-100" style="height: 15rem;">
                        <div class="row g-0">
                            <div class="col-5 col-sm-4">
                                <img src="./assets/img/redes.png" class="img-fluid w-100" alt="Redes">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">Redes</h4>
                                    <h6 class="card-title">Hafsa Aghmir</h6>
                                    <p class="card-text">
                                        Explora los fundamentos esenciales de las redes en nuestro curso. Aprende a
                                        configurar, mantener y asegurar redes, comprendiendo conceptos clave como
                                        enrutamiento, seguridad y protocolos para construir infraestructuras sólidas y
                                        seguras.
                                    </p>
                                    <p class="card-text"><small class="text-muted">7h 55m</small></p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        Ver ahora
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PLAN DE PRECIOS</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Un solo curso disponible
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 3
                                                                        meses</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Estandar</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Sin plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">Todos los cursos
                                                                    disponibles</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">IA adaptable a tus
                                                                        necesidades</li>
                                                                    <li class="pricing__feature">Plan de seguimiento
                                                                        personalizado</li>
                                                                    <li class="pricing__feature">Accesible durante 1 año
                                                                    </li>
                                                                    <li class="pricing__feature">Acceso a ofertas
                                                                        exclusivas</li>
                                                                </ul>
                                                                <button class="pricing__action">Elegir plan</button>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="propuesta">
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <h2>Propuestas de cursos</h2>
                        <p class="mb-5">
                            Si quiere realizar otro curso del que no dispongamos, porfavor, rellene este formulario.
                            Tenemos en cuenta todas sus propuestas.
                        </p>
                    </div>
                </div>

                <form action="" method="post" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre">
                            </div>
                            <div class="form-group mb-1">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Descripción"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="#" class="btn btn-primary my-button mt-3">Send</a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <!-- TRABAJA CON NOSOTROS -->
    <div id="trabaja">
        <section id="book-a-table" class="book-a-table">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <h2>¿Quieres trabajar con nosotros?</h2>
                        <p class="mb-5">
                            Aquí puedes mandarnos tus datos.
                        </p>
                    </div>
                </div>
                <form class="row g-3 needs-validation" novalidate="" style="display: flex; flex-direction: column;">
                    <div class="col-md-12 position-relative" style="margin-bottom: 15px;">
                        <label for="validationTooltip01" class="form-label">Mandanos tu carta de presentación</label>
                        <input type="file" class="form-control" id="validationTooltip01" required="" name="cartapresentacion">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12 position-relative" style="margin-bottom: 15px;">
                        <label for="validationTooltip02" class="form-label">Mandanos tu CV</label>
                        <input type="file" class="form-control" id="validationTooltip02" required="" name="cartapresentacion">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="#" class="btn btn-primary my-button">Send</a>
                    </div>
                </form>
            </div>
        </section>
    </div>

    <!-- LA EMPRESA -->
    <div id="empresa">
        <div class="container">
            <!-- EL EQUIPO -->
            <section id="equipo" class="mb-5">
                <div class="container m-3 mx-auto">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="section-title">
                                <h2>El equipo</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="card h-100 mh-100" style="height: 15rem;">
                                <div class="row g-0">
                                    <div class="col-5 col-sm-4">
                                        <img src="./assets/img/adnane.jpg" class="img-fluid w-100 h-100" alt="php">
                                    </div>
                                    <div class="col-7 col-sm-8">
                                        <div class="card-body">
                                            <h4 class="card-title">Adnane El Boutaybi</h4>
                                            <h6 class="card-title">Ingeniero Informático</h6>
                                            <p class="card-text">
                                                Adnane El Boutaybi (13 de noviembre de 1983, Casablanca, Marruecos) se
                                                graduó en
                                                Ingenieria Informática por la Universidad de Murcia especializándose
                                                en el ámbito de Telecomunicaciones. Ha trabajado en múltiples empresas
                                                dedicadas
                                                a la infraestructura de red de otras empresas y como profesor en varios
                                                centros
                                                integrados finalizando en Pamplona, concretamente en Cuatrovientos CI.
                                                En 2023
                                                funda WADU® junto a otros 3 genios de la informática y las
                                                telecomunicaciones.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="card h-100 mh-100" style="height: 15rem;">
                                <div class="row g-0">
                                    <div class="col-5 col-sm-4">
                                        <img src="./assets/img/inigo.jpg" class="img-fluid w-100 h-100" alt="python">
                                    </div>
                                    <div class="col-7 col-sm-8">
                                        <div class="card-body">
                                            <h4 class="card-title">Íñigo Ancín</h4>
                                            <h6 class="card-title">Ingeniero Informático</h6>
                                            <p class="card-text">
                                                Íñigo Ancín (14 de diciembre de 1990, Pamplona, España) se graduó en
                                                Ingeniería
                                                Informática por la Universidad de Massachusetts especializándose en el
                                                ámbito
                                                de la Ciberseguridad. Ha trabajado para varias instituciones como el FBI
                                                o la
                                                CIA y empresas como Microsoft o Sony. En 2020 volvió a Pamplona para
                                                trabajar en
                                                el CPD del Gobierno de Navarra y en 2023 se juntó con otros 2 genios de
                                                la
                                                Informática y las Telecomunicaciones para fundar WADU®.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6 col-sm-12">
                            <div class="card h-100 mh-100" style="height: 15rem;">
                                <div class="row g-0">
                                    <div class="col-5 col-sm-4">
                                        <img src="./assets/img/hafsa.jpg" class="img-fluid w-100 h-100" alt="SQL">
                                    </div>
                                    <div class="col-7 col-sm-8">
                                        <div class="card-body">
                                            <h4 class="card-title">Hafsa Aghmir</h4>
                                            <h6 class="card-title">DevOps</h6>
                                            <p class="card-text">
                                                Hafsa Aghmir (14 de julio de 1987, Larache, Marruecos) se graduó en
                                                Ingenieria
                                                Informática por la Universidad de Oxford especializándose en la
                                                Orquestación
                                                de Contenedores con Kubernetes y Gestión de Sistemas. Ha trabajado en
                                                distintos
                                                proyectos para la Unión Europea y el Gobierno de España. En 2021 fue a
                                                Pamplona
                                                a trabajar al CPD del Gobierno de Navarra donde conoció al genio Íñigo
                                                Ancín y
                                                en 2022 empezó como profesora en Cuatrovientos CI donde conoció a Adnane
                                                El
                                                Boutaybi. En 2023 acaba fundando WADU® junto a Íñigo, Adnane y otro
                                                génio de la
                                                Informática y las Telecomunicaciones.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <div class="card h-100 mh-100" style="height: 15rem;">
                                <div class="row g-0">
                                    <div class="col-5 col-sm-4">
                                        <img src="./assets/img/david.jpg" class="img-fluid w-100 h-100" alt="JavaScript">
                                    </div>
                                    <div class="col-7 col-sm-8">
                                        <div class="card-body">
                                            <h4 class="card-title">David Carmona</h4>
                                            <h6 class="card-title">Ingeniero Electrónico</h6>
                                            <p class="card-text">
                                                David Carmona (3 de septiembre de 1993, Pamplona, España) se graduó en
                                                Ingeniería Electrónica por la Universidad de Murcia. En 2019 volvió a
                                                Pamplona para trabajar como
                                                repartidor de paquetes y en 2021 estuvo trabajando como limpiador en la
                                                Estación de Tren de Pamplona.
                                                En sus descansos frecuentaba un bar cercano donde conoció a Adnane y a
                                                los genios de la
                                                Informática y las Telecomunicaciones Íñigo y Hafsa. Finalmente, en 2023
                                                acaban fundando WADU®.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ORIGEN -->
            <section id="origen">
                <section id="book-a-table" class="book-a-table">
                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            <div class="col-md-8 offset-md-2 text-center">
                                <h2>¿Qué es WADU?</h2>
                                <p class="">
                                    WADU tiene su origen en el primer encuentro de los cuatro fundadores de la empresa
                                    en un bar cercano a la estación de tren de Pamplona. Surgió a partir de un debate
                                    sobre la educación actual y la preocupación por su futuro. Los cuatro coincidieron
                                    en que el sistema educativo está muy anticuado y que las cosas ya no son como antes
                                </p>
                                <p>
                                    Después de ese primer encuentro, hubo más reuniones hasta que finalmente, en 2023,
                                    fundaron WADU. Se trata de una plataforma virtual donde las personas interesadas en
                                    el mundo de la informática pueden aprender y desarrollar todo su conocimiento de
                                    manera cómoda y adaptable.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
            <!-- MISIÓN VISIÓN Y VALORES -->
            <section id="mvv">
                <div class="row p-4">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card h-100">
                            <div class="card-header my-card-header lead">
                                MISIÓN
                            </div>
                            <div class="card-body mx-auto">
                                <p class="card-text">
                                    Formación personalizada respaldada por inteligencia artificial en un emocionante
                                    mundo virtual de aprendizaje entre iguales. Tu éxito es nuestro compromiso
                                </p>

                            </div>
                            <div class="card-footer my-card-footer"><i class="bi bi-flag-fill"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card h-100">
                            <div class="card-header my-card-header lead">
                                VISIÓN
                            </div>
                            <div class="card-body mx-auto">
                                <p class="card-text">Crear una plataforma educativa tecnológica sin fronteras</p>

                            </div>
                            <div class="card-footer my-card-footer"><i class="bi bi-eye"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card h-100">
                            <div class="card-header my-card-header lead">
                                VALORES
                            </div>
                            <div class="card-body mx-auto">
                                <p class="card-text">Integridad, Innovación y Excelencia</p>
                            </div>
                            <div class="card-footer my-card-footer"><i class="bi bi-gem"></i></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ORGANIRAMA -->
            <section id="organigrama">
                <section id="book-a-table" class="book-a-table">
                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            <div class="col-md-8 offset-md-2 text-center">
                                <h2>Organigrama</h2>
                                <img src="./assets/img/organigrama.png" alt="organigrama">
                            </div>
                        </div>
                    </div>
                </section>
            </section>

            <!-- CLIENTES -->
            <section id="clientes">
                <section id="book-a-table" class="book-a-table">
                    <div class="container" data-aos="fade-up">
                        <div class="row">
                            <div class="col-md-8 offset-md-2 text-center">
                                <h2>Clientes principales</h2>
                                <table class="table table-striped table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Creditos ODS</th>
                                            <th scope="col">Localización</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>MARIA ANA SANZ</td>
                                            <td>99</td>
                                            <td>España</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>CISTEC TECHNOLOGY SLL</td>
                                            <td>97</td>
                                            <td>EEUU</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>TESICNOR</td>
                                            <td>78</td>
                                            <td>Reino Unido</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>NUBAPP APPICATIONS SL</td>
                                            <td>89</td>
                                            <td>Francia</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>HIBERUS TECNOLOGÍA</td>
                                            <td>69</td>
                                            <td>Marruecos</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>COMPUTADORES NAVARRA SA</td>
                                            <td>100</td>
                                            <td>EEUU</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>NASERTIC</td>
                                            <td>85</td>
                                            <td>España</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </section>

            <!-- CONTACTO -->
            <section id="contacto" class="m-5">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h2>Contacto</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 mb-3">
                        <div class="card h-100 mh-100" style="height: 15rem;">
                            <div class="row g-0">
                                <div class="col">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2926.2996920655382!2d-1.6624290238666468!3d42.824282871153535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5092855cefdac7%3A0xab7c62765f5209e2!2sCuatrovientos%20Centro%20Integrado!5e0!3m2!1ses!2ses!4v1695923032083!5m2!1ses!2ses" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h3 class="card-title">España</h3>
                                        <p class="card-text">Teléfono: +34 948 12 41 29</p>
                                        <p class="card-text">Horario de atención: 9:00-14:00</p>
                                        <!-- Button trigger modal -->
                                        <a href="" class="my-link" data-bs-toggle="modal" data-bs-target="#exampleModalContacto">
                                            info@wadu.es
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Envianos un
                                                            correo</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="formContacto" action="mailto:info@wadu.es" method="post" enctype="text/plain">
                                                            <div class="form-group">
                                                                <label for="name">Nombre completo</label>
                                                                <input id="name" name="name" placeholder="Tu nombre" type="text" required="required" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="user">Nombre de usuario</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="bi bi-person-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input id="user" name="user" placeholder="Tu usuario" type="text" aria-describedby="userHelpBlock" required="required" class="form-control">
                                                                </div>
                                                                <span id="userHelpBlock" class="form-text text-muted">Escriba su nombre de
                                                                    usuario para identificarle más rápido</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="correo">Correo electrónico</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">@</div>
                                                                    </div>
                                                                    <input id="correo" name="correo" placeholder="Tu correo" type="text" aria-describedby="correoHelpBlock" required="required" class="form-control">
                                                                </div>
                                                                <span id="correoHelpBlock" class="form-text text-muted">Escriba su correo
                                                                    electrónico para que podamos ponernos en contacto
                                                                    con usted</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">Asunto</label>
                                                                <textarea id="subject" name="subject" cols="40" rows="5" aria-describedby="subjectHelpBlock" required="required" class="form-control"></textarea>
                                                                <span id="subjectHelpBlock" class="form-text text-muted">Escriba el asunto que
                                                                    quiera tratar con nosotros lo más detallado
                                                                    posible</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
                                                            </div>
                                                        </form>


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Acaba aqui -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-3">
                        <div class="card h-100 mh-100" style="height: 15rem;">
                            <div class="row g-0">
                                <div class="col">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d417347.5763392235!2d-6.533505854117622!3d35.19331650000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0bced790dd657f%3A0xa330c3875fb21324!2z2YXYudmH2K8g2KfZhNiq2YPZhtmI2YTZiNis2YrYpyDZhNmE2LXZitivINin2YTYqNit2LHZig!5e0!3m2!1ses!2ses!4v1704825466969!5m2!1ses!2ses" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h3 class="card-title">Marruecos</h3>
                                        <p class="card-text">Teléfono: +212 5395-01569</p>
                                        <p class="card-text">Horario de atención: 8:30-12:00</p>
                                        <!-- Button trigger modal -->
                                        <a href="" class="my-link" data-bs-toggle="modal" data-bs-target="#exampleModalContacto">
                                            info@wadu.ma
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Envianos un
                                                            correo</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="formContacto" action="mailto:info@wadu.ma" method="post" enctype="text/plain">
                                                            <div class="form-group">
                                                                <label for="name">Nombre completo</label>
                                                                <input id="name" name="name" placeholder="Tu nombre" type="text" required="required" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="user">Nombre de usuario</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="bi bi-person-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input id="user" name="user" placeholder="Tu usuario" type="text" aria-describedby="userHelpBlock" required="required" class="form-control">
                                                                </div>
                                                                <span id="userHelpBlock" class="form-text text-muted">Escriba su nombre de
                                                                    usuario para identificarle más rápido</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="correo">Correo electrónico</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">@</div>
                                                                    </div>
                                                                    <input id="correo" name="correo" placeholder="Tu correo" type="text" aria-describedby="correoHelpBlock" required="required" class="form-control">
                                                                </div>
                                                                <span id="correoHelpBlock" class="form-text text-muted">Escriba su correo
                                                                    electrónico para que podamos ponernos en contacto
                                                                    con usted</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">Asunto</label>
                                                                <textarea id="subject" name="subject" cols="40" rows="5" aria-describedby="subjectHelpBlock" required="required" class="form-control"></textarea>
                                                                <span id="subjectHelpBlock" class="form-text text-muted">Escriba el asunto que
                                                                    quiera tratar con nosotros lo más detallado
                                                                    posible</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Acaba aqui -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 mb-3">
                        <div class="card h-100 mh-100" style="height: 15rem;">
                            <div class="row g-0">
                                <div class="col">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8115747.763854377!2d-80.15954617046148!3d6.675707039337279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e68156d593b824f%3A0xcf79615cf53f5a2e!2sEscuela%20de%20Ingenier%C3%ADa%20de%20Sistemas%20e%20Informatica!5e0!3m2!1ses!2ses!4v1704825946951!5m2!1ses!2ses" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h3 class="card-title">Colombia</h3>
                                        <p class="card-text">Teléfono: +57 76344000 ext. 2342</p>
                                        <p class="card-text"> Horario de atención: 6:00-20:00</p>
                                        <!-- Button trigger modal -->
                                        <a href="" class="my-link" data-bs-toggle="modal" data-bs-target="#exampleModalContacto">
                                            info@wadu.co
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Envianos un
                                                            correo</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="formContacto" action="mailto:info@wadu.co" method="post" enctype="text/plain">
                                                            <div class="form-group">
                                                                <label for="name">Nombre completo</label>
                                                                <input id="name" name="name" placeholder="Tu nombre" type="text" required="required" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="user">Nombre de usuario</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="bi bi-person-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input id="user" name="user" placeholder="Tu usuario" type="text" aria-describedby="userHelpBlock" required="required" class="form-control">
                                                                </div>
                                                                <span id="userHelpBlock" class="form-text text-muted">Escriba su nombre de
                                                                    usuario para identificarle más rápido</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="correo">Correo electrónico</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">@</div>
                                                                    </div>
                                                                    <input id="correo" name="correo" placeholder="Tu correo" type="text" aria-describedby="correoHelpBlock" required="required" class="form-control">
                                                                </div>
                                                                <span id="correoHelpBlock" class="form-text text-muted">Escriba su correo
                                                                    electrónico para que podamos ponernos en contacto
                                                                    con usted</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">Asunto</label>
                                                                <textarea id="subject" name="subject" cols="40" rows="5" aria-describedby="subjectHelpBlock" required="required" class="form-control"></textarea>
                                                                <span id="subjectHelpBlock" class="form-text text-muted">Escriba el asunto que
                                                                    quiera tratar con nosotros lo más detallado
                                                                    posible</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Acaba aqui -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-3">
                        <div class="card h-100 mh-100" style="height: 15rem;">
                            <div class="row g-0">
                                <div class="col">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9878.816239081012!2d-1.2703029259527454!3d51.756734899934486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876c6a9ef8c485b%3A0xd2ff1883a001afed!2sUniversidad%20de%20Oxford!5e0!3m2!1ses!2ses!4v1704826235954!5m2!1ses!2ses" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h3 class="card-title">Reino Unido</h3>
                                        <p class="card-text">Teléfono: +44 1865 270000</p>
                                        <p class="card-text">Horario de atención: 10:00-17:00</p>
                                        <!-- Button trigger modal -->
                                        <a href="" class="my-link" data-bs-toggle="modal" data-bs-target="#exampleModalContacto">
                                            info@wadu.uk
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Envianos un
                                                            correo</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="formContacto" action="mailto:info@wadu.uk" method="post" enctype="text/plain">
                                                            <div class="form-group">
                                                                <label for="name">Nombre completo</label>
                                                                <input id="name" name="name" placeholder="Tu nombre" type="text" required="required" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="user">Nombre de usuario</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="bi bi-person-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input id="user" name="user" placeholder="Tu usuario" type="text" aria-describedby="userHelpBlock" required="required" class="form-control">
                                                                </div>
                                                                <span id="userHelpBlock" class="form-text text-muted">Escriba su nombre de
                                                                    usuario para identificarle más rápido</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="correo">Correo electrónico</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">@</div>
                                                                    </div>
                                                                    <input id="correo" name="correo" placeholder="Tu correo" type="text" aria-describedby="correoHelpBlock" required="required" class="form-control">
                                                                </div>
                                                                <span id="correoHelpBlock" class="form-text text-muted">Escriba su correo
                                                                    electrónico para que podamos ponernos en contacto
                                                                    con usted</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">Asunto</label>
                                                                <textarea id="subject" name="subject" cols="40" rows="5" aria-describedby="subjectHelpBlock" required="required" class="form-control"></textarea>
                                                                <span id="subjectHelpBlock" class="form-text text-muted">Escriba el asunto que
                                                                    quiera tratar con nosotros lo más detallado
                                                                    posible</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Acaba aqui -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


    <div id="login">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="mb-3">
                        <h3>Iniciar sesión</h3>
                    </div>
                    <form action="php/login_user_be.php" method="POST" class="shadow p-4">
                        <div class="mb-3">
                            <label for="username">Correo electrónico</label>
                            <input type="text" class="form-control" name="email_login" id="username" placeholder="Email">
                        </div>

                        <div class="mb-3">
                            <label for="Password">Contraseña</label>
                            <input type="password" class="form-control" name="password_login" id="Password" placeholder="Contraseña">
                        </div>

                        <?php
                        // Verifica si hay un mensaje de error
                        if (isset($_SESSION['error_message'])) {
                            echo '<p style="color: red;">' . $_SESSION['error_message'] . '</p>';

                            // Limpia el mensaje de error después de mostrarlo
                            unset($_SESSION['error_message']);
                        }
                        ?>

                        <!-- <a href="#" class="float-end text-decoration-none my-link">Cambiar Contraseña</a> -->

                        <div class="mb-3">
                            <button class="btn btn-primary my-button">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="./assets/js/script.js"></script> <!-- Va antes el jQuery que esto de script src-->
</body>

</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WADU</title>
    <!-- css de cada apartado -->
    <link rel="stylesheet" href="./../assets/css/style.css">
    <link rel="stylesheet" href="./../assets/css/style_biblioteca.css">
    <link rel="stylesheet" href="./../assets/css/style_propuesta.css">
    <link rel="stylesheet" href="./../assets/css/style_trabaja.css">
    <link rel="stylesheet" href="./../assets/css/style_empresa.css">

    <!-- icono de la página -->
    <link rel="icon" href="./../assets/img/logo.png" type="image/png">
    <!-- CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="./../assets/js/toggle.js"></script>

    <!-- PLAN DE PRECIOS -->
    <link href='https://fonts.googleapis.com/css?family=Homemade+Apple' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Sahitya:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="./../assets/css/css_precios/component.css" />
    <link rel="stylesheet" type="text/css" href="./../assets/css/css_precios/demo.css" />
</head>

<body>

    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./../assets/img/logo.png" alt="" width="50" height="45">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark"
                aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse show" id="navbarDark">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#biblioteca">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#propuesta">Proposals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#trabaja">Job</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" role="button"
                            aria-expanded="false">The company</a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link dropdown-item" href="#equipo">The team</a></li>
                            <li><a class="nav-link dropdown-item" href="#origen">History</a></li>
                            <li><a class="nav-link dropdown-item" href="#mvv">Mission-Vision-Values</a></li>
                            <li><a class="nav-link dropdown-item" href="#organigrama">Organigramme</a></li>
                            <li><a class="nav-link dropdown-item" href="#clientes">Customers</a></li>
                            <li><a class="nav-link dropdown-item" href="#contacto">Contact</a></li>
                        </ul>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#interno">Internal Portal</a>
                    </li>
                </ul>
                <a class="nav-link nav-link-lenguage active" href="./../index.php"><img
                        src="./../assets/img/espana.png" alt="español" width="20px"></a>
                <a class="nav-link nav-link-lenguage active" href="./../en/index.php"><img
                        src="./../assets/img/reino-unido.png" alt="ingles" width="20px"></a>
                <a class="nav-link nav-link-lenguage active" href="./../ar/index.php"><img
                        src="./../assets/img/emiratos-arabes-unidos.png" alt="arabe" width="20px"></a>
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
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                    class=""></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                    class=""></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src='./../assets/img/imagen1.jpg' class="d-block h-100 w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 style="color: white !important;">WADU</h1>
                            <p>Discover the future of education at WADU: knowledge in your hands.</p>
                            <p><a class="btn btn-lg btn-primary my-button sign-link" href="#login">Sign up</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src='./../assets/img/imagen2.jpg' class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 style="color: white !important;">WADU</h1>
                            <p>A world without a thirst for knowledge would be a world without progress or hope.</p>
                            <p><a class="btn btn-lg btn-primary my-button sign-link" href="#login">Sign up</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src='./../assets/img/imagen3.jpg' class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 style="color: white !important;">WADU</h1>
                            <p>Knowledge is the beacon that illuminates the vast universe of possibilities that
                                surrounds us.</p>
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
                    <h5 class="card-title">New course added</h5>
                    <p class="card-text">
                        The new Cybersecurity course is now available. Click for more details and start now!
                    </p>
                    <a href="#biblioteca" class="btn btn-primary my-button biblioteca-link">View now</a>
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
                    <h5 class="card-title">New offers for the fastest!</h5>
                    <p class="card-text">In this sales period, we offer you exclusive offers for the next 24 hours.
                        for the next 24 hours. Click to see the price plan</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                        data-bs-target="#exampleModalRebajado">
                        View now
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalRebajado" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <section class="pricing-section bg-1">
                                        <h2 class="pricing-section__title">SALES!!!</h2>
                                        <div class="pricing pricing--sonam">
                                            <div class="pricing__item">
                                                <h3 class="pricing__title">Simple</h3>
                                                <div class="pricing__price">
                                                    <span class="rebajado-anterior">14.99 €</span>
                                                    <span class="rebajado-posterior">8.99 €</span>
                                                </div>
                                                <p class="pricing__sentence">Only one course available</p>
                                                <ul class="pricing__feature-list">
                                                    <li class="pricing__feature">AI adaptable to your needs</li>
                                                    <li class="pricing__feature">Personalised follow-up plan</li>
                                                    <li class="pricing__feature">Available for 3 months</li>
                                                </ul>
                                                <button class="pricing__action">Choose plan</button>
                                            </div>
                                            <div class="pricing__item">
                                                <h3 class="pricing__title">Standard</h3>
                                                <div class="pricing__price">
                                                    <span class="rebajado-anterior">119.99 €</span>
                                                    <span class="rebajado-posterior">71.99 €</span>
                                                </div>
                                                <p class="pricing__sentence">All available courses</p>
                                                <ul class="pricing__feature-list">
                                                    <li class="pricing__feature">AI adaptable to your needs</li>
                                                    <li class="pricing__feature">No personalised follow-up plan</li>
                                                    <li class="pricing__feature">Available for 1 year</li>
                                                </ul>
                                                <button class="pricing__action">Choose plan</button>
                                            </div>
                                            <div class="pricing__item">
                                                <h3 class="pricing__title">Premium</h3>
                                                <div class="pricing__price">
                                                    <span class="rebajado-anterior">199.99 €</span>
                                                    <span class="rebajado-posterior">119.99 €</span>
                                                </div>
                                                <p class="pricing__sentence">All available courses</p>
                                                <ul class="pricing__feature-list">
                                                    <li class="pricing__feature">AI adaptable to your needs</li>
                                                    <li class="pricing__feature">Personalised follow-up plan</li>
                                                    <li class="pricing__feature">Available for 1 year</li>
                                                    <li class="pricing__feature">Access to exclusive offers</li>
                                                </ul>
                                                <button class="pricing__action">Choose plan</button>
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
                                <img src="./../assets/img/php.png" class="img-fluid w-100 h-100" alt="php">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">PHP Avanzado</h4>
                                    <h6 class="card-title">Adnane E.B</h6>
                                    <p class="card-text">
                                        Discover the power of PHP in our exclusive course! Learn how to create dynamic
                                        websites with ease. Become an expert in web development using PHP for forms,
                                        databases and more - sign up and master the art of interactive web programming
                                        with PHP!
                                    </p>
                                    <p class="card-text"><small class="text-muted">2h y 30m</small></p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View now
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PRICING PLAN</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Only one course available
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 3 months
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Standard</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">No personalised
                                                                        follow-up plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                    <li class="pricing__feature">Access to exclusive
                                                                        offers</li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- acaba aqui -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12">
                    <div class="card h-100 mh-100" style="height: 15rem;">
                        <div class="row g-0">
                            <div class="col-5 col-sm-4">
                                <img src="./../assets/img/python.png" class="img-fluid w-100 h-100" alt="python">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">Python</h4>
                                    <h6 class="card-title">Martín Gonzalez</h6>
                                    <p class="card-text">
                                        Explore the potential of Python in our specialised course! Learn from the basics
                                        to advanced programming techniques. Master how to effectively create
                                        applications and solutions with Python - sign up and master the world's most
                                        widely used programming language!
                                    </p>
                                    <p class="card-text"><small class="text-muted">2h y 45m</small></p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View now
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PRICING PLAN</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Only one course available
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 3 months
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Standard</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">No personalised
                                                                        follow-up plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                    <li class="pricing__feature">Access to exclusive
                                                                        offers</li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
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
                                <img src="./../assets/img/sql.png" class="img-fluid w-100 h-100" alt="SQL">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">SQL</h4>
                                    <h6 class="card-title">Hafsa Aghmir</h6>
                                    <p class="card-text">
                                        Dive into database management with our SQL course. Learn how to
                                        manipulate data, queries and database designs to develop efficient systems.
                                        Enter now and learn how to manage databases!
                                    </p>
                                    <p class="card-text"><small class="text-muted">3h y 15m</small></p>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View now
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PRICING PLAN</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Only one course available
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 3 months
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Standard</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">No personalised
                                                                        follow-up plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                    <li class="pricing__feature">Access to exclusive
                                                                        offers</li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
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
                                <img src="./../assets/img/javascript.png" class="img-fluid w-100 h-100"
                                    alt="JavaScript">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">JavaScript</h4>
                                    <h6 class="card-title">María Lopez</h6>
                                    <p class="card-text">
                                        Become a master of interactive web development. Learn how to use
                                        JavaScript to create dynamic, modern experiences in our specialised course.
                                        course.
                                    </p>
                                    <p class="card-text"><small class="text-muted">1h y 15m</small></p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View now
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PRICING PLAN</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Only one course available
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 3 months
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Standard</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">No personalised
                                                                        follow-up plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                    <li class="pricing__feature">Access to exclusive
                                                                        offers</li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
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
                                <img src="./../assets/img/so.png" class="img-fluid w-100" alt="Linux y Windows">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">Linux y Windows</h4>
                                    <h6 class="card-title">David Carmona</h6>
                                    <p class="card-text">
                                        Master both operating systems with our course. Acquire skills in
                                        system administration, commands and configuration to maximise your productivity.
                                    </p>
                                    <p class="card-text"><small class="text-muted">5h y 33m</small></p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View now
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PRICING PLAN</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Only one course available
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 3 months
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Standard</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">No personalised
                                                                        follow-up plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                    <li class="pricing__feature">Access to exclusive
                                                                        offers</li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
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
                                <img src="./../assets/img/ciberseguridad.png" class="img-fluid w-100"
                                    alt="Ciberseguridad">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">Ciberseguridad</h4>
                                    <h6 class="card-title">Cristian Fernandez</h6>
                                    <p class="card-text">
                                        Protect your data and learn how to prevent threats in our cybersecurity course.
                                        cybersecurity course. Acquire essential skills to ensure information security.
                                    </p>
                                    <p class="card-text"><small class="text-muted">4h y 30m</small></p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View now
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PRICING PLAN</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Only one course available
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 3 months
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Standard</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">No personalised
                                                                        follow-up plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                    <li class="pricing__feature">Access to exclusive
                                                                        offers</li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
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
                                <img src="./../assets/img/office.png" class="img-fluid w-100" alt="Microsoft Office">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">Microsoft Office</h4>
                                    <h6 class="card-title">Iñigo Ancín</h6>
                                    <p class="card-text">
                                        Improve your productivity with our Microsoft Office lessons. Learn how to
                                        use Word, Excel, PowerPoint and more efficiently to optimise your work.
                                    </p>
                                    <p class="card-text"><small class="text-muted">6h y 45m</small></p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View now
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PRICING PLAN</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Only one course available
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 3 months
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Standard</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">No personalised
                                                                        follow-up plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                    <li class="pricing__feature">Access to exclusive
                                                                        offers</li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
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
                                <img src="./../assets/img/virtualizacion.png" class="img-fluid w-100"
                                    alt="Virtualización">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">Virtualización</h4>
                                    <h6 class="card-title">Adnane E.B.</h6>
                                    <p class="card-text">
                                        Discover virtualisation in our specialised course. Learn how to use
                                        tools and techniques to create and manage virtual environments effectively.
                                    </p>
                                    <p class="card-text"><small class="text-muted">2h y 35m</small></p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View now
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PRICING PLAN</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Only one course available
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 3 months
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Standard</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">No personalised
                                                                        follow-up plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                    <li class="pricing__feature">Access to exclusive
                                                                        offers</li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
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
                                <img src="./../assets/img/redes.png" class="img-fluid w-100" alt="Redes">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">Redes</h4>
                                    <h6 class="card-title">Hafsa Aghmir</h6>
                                    <p class="card-text">
                                        Explore the essential fundamentals of networking in our course. Learn how to
                                        configure, maintain, and secure networks, understanding key concepts such as
                                        routing, security and protocols to build robust and secure infrastructures.
                                    </p>
                                    <p class="card-text"><small class="text-muted">7h 55m</small></p>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        View now
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">PRICING PLAN</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Simple</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">Only one course available
                                                                </p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 3 months
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Standard</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">No personalised
                                                                        follow-up plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">Premium</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">All available courses</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">AI adaptable to your
                                                                        needs</li>
                                                                    <li class="pricing__feature">Personalised follow-up
                                                                        plan</li>
                                                                    <li class="pricing__feature">Available for 1 year
                                                                    </li>
                                                                    <li class="pricing__feature">Access to exclusive
                                                                        offers</li>
                                                                </ul>
                                                                <button class="pricing__action">Choose plan</button>
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
                        <h2>Proposals for courses</h2>
                        <p class="mb-5">
                            If you would like to take another course that we do not have, please fill in this form.
                            We will consider all your proposals.
                        </p>
                    </div>
                </div>

                <form action="" method="post" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="form-group mb-1">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="E-mail address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Description"></textarea>
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
                        <h2>Would you like to work with us?</h2>
                        <p class="mb-5">
                            Here you can send us your details.
                        </p>
                    </div>
                </div>
                <form class="row g-3 needs-validation" novalidate="" style="display: flex; flex-direction: column;">
                    <div class="col-md-12 position-relative" style="margin-bottom: 15px;">
                        <label for="validationTooltip01" class="form-label">Send us your cover letter</label>
                        <input type="file" class="form-control" id="validationTooltip01" required=""
                            name="cartapresentacion">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12 position-relative" style="margin-bottom: 15px;">
                        <label for="validationTooltip02" class="form-label">Send us your CV</label>
                        <input type="file" class="form-control" id="validationTooltip02" required=""
                            name="cartapresentacion">
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
                                <h2>The team</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="card h-100 mh-100" style="height: 15rem;">
                                <div class="row g-0">
                                    <div class="col-5 col-sm-4">
                                        <img src="./../assets/img/adnane.jpg" class="img-fluid w-100 h-100" alt="php">
                                    </div>
                                    <div class="col-7 col-sm-8">
                                        <div class="card-body">
                                            <h4 class="card-title">Adnane El Boutaybi</h4>
                                            <h6 class="card-title">IT Engineer</h6>
                                            <p class="card-text">
                                                Adnane El Boutaybi (13 November 1983, Casablanca, Morocco) graduated in
                                                Computer Engineering from the University of Murcia, specialising in the
                                                field of Telecommunications. He has worked in several companies
                                                dedicated to the network infrastructure of other companies and as a
                                                teacher in several integrated centres ending in Pamplona, specifically
                                                in Cuatrovientos CI. In 2023 founded WADU® together with 3 other
                                                computer and telecommunications geniuses. telecommunications.
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
                                        <img src="./../assets/img/inigo.jpg" class="img-fluid w-100 h-100" alt="python">
                                    </div>
                                    <div class="col-7 col-sm-8">
                                        <div class="card-body">
                                            <h4 class="card-title">Íñigo Ancín</h4>
                                            <h6 class="card-title">IT Engineer</h6>
                                            <p class="card-text">
                                                Íñigo Ancín (14 December 1990, Pamplona, Spain) graduated in Computer
                                                Engineering from the University of Massachusetts, specialising in the
                                                field of Cybersecurity. He has worked for several institutions such as
                                                the FBI or the CIA and companies like Microsoft or Sony. In 2020 he
                                                returned to Pamplona to work in the CPD of the Government of Navarra and
                                                in 2023 he joined 2 other IT and Telecommunications geniuses to found
                                                WADU®.
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
                                        <img src="./../assets/img/hafsa.jpg" class="img-fluid w-100 h-100" alt="SQL">
                                    </div>
                                    <div class="col-7 col-sm-8">
                                        <div class="card-body">
                                            <h4 class="card-title">Hafsa Aghmir</h4>
                                            <h6 class="card-title">DevOps</h6>
                                            <p class="card-text">
                                                Hafsa Aghmir (14 July 1987, Larache, Morocco) graduated in Computer
                                                Engineering from Oxford University specialising in Container
                                                Orchestration with Kubernetes and Systems Management. He has worked on
                                                several projects for the European Union and the Spanish Government. In
                                                2021 she went to Pamplona to work at the CPD of the Government of
                                                Navarra where she met the genius Íñigo Ancín and in 2022 she started as
                                                a teacher at Cuatrovientos CI where she met Adnane El Boutaybi. In 2023
                                                she ended up founding WADU® together with Íñigo, Adnane and another IT
                                                and Telecommunications genius.
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
                                        <img src="./../assets/img/david.jpg" class="img-fluid w-100 h-100"
                                            alt="JavaScript">
                                    </div>
                                    <div class="col-7 col-sm-8">
                                        <div class="card-body">
                                            <h4 class="card-title">David Carmona</h4>
                                            <h6 class="card-title">Electronic Engineer</h6>
                                            <p class="card-text">
                                                David Carmon Electronic Engineering at the University of Murcia. In 2019
                                                he returned to Pamplona to work as a and in 2021 he was working as a
                                                cleaner at the Pamplona Train Station. Pamplona Train Station. During
                                                his breaks, he frequented a nearby bar where he met Adnane and the
                                                geniuses of and telecommunications geniuses Íñigo and Hafsa. Finally, in
                                                2023 they ended up founding WADU®.
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
                                <h2>What is WADU?</h2>
                                <p class="">
                                    WADU has its origins in the first meeting of the four founders of the company in a
                                    bar near the Pamplona train station. It arose from a debate on current education and
                                    concern for its future. The four agreed that the education system is very
                                    old-fashioned and that things are no longer the same as they used to be.
                                </p>
                                <p>
                                    After that first meeting, there were more meetings until finally, in 2023, they
                                    founded WADU. It is a virtual platform where people interested in the world of IT
                                    can learn and develop all their knowledge in a comfortable and adaptable way, thanks
                                    to the implementation of an AI developed by us.
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
                                MISION
                            </div>
                            <div class="card-body mx-auto">
                                <p class="card-text">
                                    Personalised training supported by artificial intelligence in an exciting virtual
                                    world of peer-to-peer learning. Your success is our commitment
                                </p>

                            </div>
                            <div class="card-footer my-card-footer"><i class="bi bi-flag-fill"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card h-100">
                            <div class="card-header my-card-header lead">
                                VISION
                            </div>
                            <div class="card-body mx-auto">
                                <p class="card-text">Creating an educational technology platform without borders</p>

                            </div>
                            <div class="card-footer my-card-footer"><i class="bi bi-eye"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card h-100">
                            <div class="card-header my-card-header lead">
                                VALUES
                            </div>
                            <div class="card-body mx-auto">
                                <p class="card-text">Integrity, Innovation & Excellence</p>
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
                                <img src="./../assets/img/organigrama.png" alt="organigrama">
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
                                <h2>Main customers</h2>
                                <table class="table table-striped table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Name</th>
                                            <th scope="col">ODS credits</th>
                                            <th scope="col">Location</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>MARIA ANA SANZ</td>
                                            <td>99</td>
                                            <td>Spain</td>
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
                                            <td>UK</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>NUBAPP APPICATIONS SL</td>
                                            <td>89</td>
                                            <td>France</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>HIBERUS TECNOLOGÍA</td>
                                            <td>69</td>
                                            <td>Morocco</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>COMPUTADORES NAVARRA SA</td>
                                            <td>100</td>
                                            <td>Spain</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>NASERTIC</td>
                                            <td>85</td>
                                            <td>Spain</td>
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
                        <h2>Contact</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 mb-3">
                        <div class="card h-100 mh-100" style="height: 15rem;">
                            <div class="row g-0">
                                <div class="col">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2926.2996920655382!2d-1.6624290238666468!3d42.824282871153535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5092855cefdac7%3A0xab7c62765f5209e2!2sCuatrovientos%20Centro%20Integrado!5e0!3m2!1ses!2ses!4v1695923032083!5m2!1ses!2ses"
                                        width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h3 class="card-title">Spain</h3>
                                        <p class="card-text">Telephone: +34 948 12 41 29</p>
                                        <p class="card-text">Opening hours: 9:00-14:00</p>
                                        <!-- Button trigger modal -->
                                        <a href="" class="my-link" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalContacto">
                                            info@wadu.es
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalContacto" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Send us an
                                                            e-mail</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="formContacto" action="mailto:info@wadu.es"
                                                            method="post" enctype="text/plain">
                                                            <div class="form-group">
                                                                <label for="name">Full name</label>
                                                                <input id="name" name="name" placeholder="Your name"
                                                                    type="text" required="required"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="user">Username</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="bi bi-person-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input id="user" name="user"
                                                                        placeholder="Your username" type="text"
                                                                        aria-describedby="userHelpBlock"
                                                                        required="required" class="form-control">
                                                                </div>
                                                                <span id="userHelpBlock"
                                                                    class="form-text text-muted">Enter your Username for
                                                                    quicker identification</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="correo">E-mail address</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">@</div>
                                                                    </div>
                                                                    <input id="correo" name="correo"
                                                                        placeholder="Your e-mail address" type="text"
                                                                        aria-describedby="correoHelpBlock"
                                                                        required="required" class="form-control">
                                                                </div>
                                                                <span id="correoHelpBlock"
                                                                    class="form-text text-muted">Enter your e-mail
                                                                    address so that we can contact you.</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">Subject</label>
                                                                <textarea id="subject" name="subject" cols="40" rows="5"
                                                                    aria-describedby="subjectHelpBlock"
                                                                    required="required" class="form-control"></textarea>
                                                                <span id="subjectHelpBlock"
                                                                    class="form-text text-muted">Please write the
                                                                    subject you want to discuss with us in as much
                                                                    detail as possible.</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <button name="submit" type="submit"
                                                                    class="btn btn-primary">Send</button>
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
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d417347.5763392235!2d-6.533505854117622!3d35.19331650000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0bced790dd657f%3A0xa330c3875fb21324!2z2YXYudmH2K8g2KfZhNiq2YPZhtmI2YTZiNis2YrYpyDZhNmE2LXZitivINin2YTYqNit2LHZig!5e0!3m2!1ses!2ses!4v1704825466969!5m2!1ses!2ses"
                                        width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h3 class="card-title">Morocco</h3>
                                        <p class="card-text">Telephone: +212 5395-01569</p>
                                        <p class="card-text">Opening hours: 8:30-12:00</p>
                                        <!-- Button trigger modal -->
                                        <a href="" class="my-link" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalContacto">
                                            info@wadu.ma
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalContacto" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Send us an
                                                            e-mail</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="formContacto" action="mailto:info@wadu.ma"
                                                            method="post" enctype="text/plain">
                                                            <div class="form-group">
                                                                <label for="name">Full name</label>
                                                                <input id="name" name="name" placeholder="Your name"
                                                                    type="text" required="required"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="user">Username</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="bi bi-person-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input id="user" name="user"
                                                                        placeholder="Your username" type="text"
                                                                        aria-describedby="userHelpBlock"
                                                                        required="required" class="form-control">
                                                                </div>
                                                                <span id="userHelpBlock"
                                                                    class="form-text text-muted">Enter your Username for
                                                                    quicker identification</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="correo">E-mail address</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">@</div>
                                                                    </div>
                                                                    <input id="correo" name="correo"
                                                                        placeholder="Your e-mail address" type="text"
                                                                        aria-describedby="correoHelpBlock"
                                                                        required="required" class="form-control">
                                                                </div>
                                                                <span id="correoHelpBlock"
                                                                    class="form-text text-muted">Enter your e-mail
                                                                    address so that we can contact you.</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">Subject</label>
                                                                <textarea id="subject" name="subject" cols="40" rows="5"
                                                                    aria-describedby="subjectHelpBlock"
                                                                    required="required" class="form-control"></textarea>
                                                                <span id="subjectHelpBlock"
                                                                    class="form-text text-muted">Please write the
                                                                    subject you want to discuss with us in as much
                                                                    detail as possible.</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <button name="submit" type="submit"
                                                                    class="btn btn-primary">Send</button>
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
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8115747.763854377!2d-80.15954617046148!3d6.675707039337279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e68156d593b824f%3A0xcf79615cf53f5a2e!2sEscuela%20de%20Ingenier%C3%ADa%20de%20Sistemas%20e%20Informatica!5e0!3m2!1ses!2ses!4v1704825946951!5m2!1ses!2ses"
                                        width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h3 class="card-title">Colombia</h3>
                                        <p class="card-text">Telephone: +57 76344000 ext. 2342</p>
                                        <p class="card-text"> Opening hours: 6:00-20:00</p>
                                        <!-- Button trigger modal -->
                                        <a href="" class="my-link" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalContacto">
                                            info@wadu.co
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalContacto" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Send us an
                                                            e-mail</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="formContacto" action="mailto:info@wadu.co"
                                                            method="post" enctype="text/plain">
                                                            <div class="form-group">
                                                                <label for="name">Full name</label>
                                                                <input id="name" name="name" placeholder="Your name"
                                                                    type="text" required="required"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="user">Username</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="bi bi-person-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input id="user" name="user"
                                                                        placeholder="Your username" type="text"
                                                                        aria-describedby="userHelpBlock"
                                                                        required="required" class="form-control">
                                                                </div>
                                                                <span id="userHelpBlock"
                                                                    class="form-text text-muted">Enter your Username for
                                                                    quicker identification</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="correo">E-mail address</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">@</div>
                                                                    </div>
                                                                    <input id="correo" name="correo"
                                                                        placeholder="Your e-mail address" type="text"
                                                                        aria-describedby="correoHelpBlock"
                                                                        required="required" class="form-control">
                                                                </div>
                                                                <span id="correoHelpBlock"
                                                                    class="form-text text-muted">Enter your e-mail
                                                                    address so that we can contact you.</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">Subject</label>
                                                                <textarea id="subject" name="subject" cols="40" rows="5"
                                                                    aria-describedby="subjectHelpBlock"
                                                                    required="required" class="form-control"></textarea>
                                                                <span id="subjectHelpBlock"
                                                                    class="form-text text-muted">Please write the
                                                                    subject you want to discuss with us in as much
                                                                    detail as possible.</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <button name="submit" type="submit"
                                                                    class="btn btn-primary">Send</button>
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
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9878.816239081012!2d-1.2703029259527454!3d51.756734899934486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876c6a9ef8c485b%3A0xd2ff1883a001afed!2sUniversidad%20de%20Oxford!5e0!3m2!1ses!2ses!4v1704826235954!5m2!1ses!2ses"
                                        width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h3 class="card-title">United Kingdom</h3>
                                        <p class="card-text">Telephone: +44 1865 270000</p>
                                        <p class="card-text">Opening hours: 10:00-17:00</p>
                                        <!-- Button trigger modal -->
                                        <a href="" class="my-link" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalContacto">
                                            info@wadu.uk
                                        </a>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalContacto" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Send us an
                                                            e-mail</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="formContacto" action="mailto:info@wadu.uk"
                                                            method="post" enctype="text/plain">
                                                            <div class="form-group">
                                                                <label for="name">Full name</label>
                                                                <input id="name" name="name" placeholder="Your name"
                                                                    type="text" required="required"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="user">Username</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="bi bi-person-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input id="user" name="user"
                                                                        placeholder="Your username" type="text"
                                                                        aria-describedby="userHelpBlock"
                                                                        required="required" class="form-control">
                                                                </div>
                                                                <span id="userHelpBlock"
                                                                    class="form-text text-muted">Enter your Username for
                                                                    quicker identification</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="correo">E-mail address</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">@</div>
                                                                    </div>
                                                                    <input id="correo" name="correo"
                                                                        placeholder="Your e-mail address" type="text"
                                                                        aria-describedby="correoHelpBlock"
                                                                        required="required" class="form-control">
                                                                </div>
                                                                <span id="correoHelpBlock"
                                                                    class="form-text text-muted">Enter your e-mail
                                                                    address so that we can contact you.</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">Subject</label>
                                                                <textarea id="subject" name="subject" cols="40" rows="5"
                                                                    aria-describedby="subjectHelpBlock"
                                                                    required="required" class="form-control"></textarea>
                                                                <span id="subjectHelpBlock"
                                                                    class="form-text text-muted">Please write the
                                                                    subject you want to discuss with us in as much
                                                                    detail as possible.</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <button name="submit" type="submit"
                                                                    class="btn btn-primary">Send</button>
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
                        <h3>Login Form</h3>
                    </div>
                    <form accept="" class="shadow p-4">
                        <div class="mb-3">
                            <label for="username">Email/Username</label>
                            <input type="email" class="form-control" name="username" id="username"
                                placeholder="Username">
                        </div>

                        <div class="mb-3">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" name="password" id="Password"
                                placeholder="Password">
                        </div>

                        <label class="mb-3">
                            <input type="checkbox" name="RememberMe"> Remember Me
                        </label>

                        <a href="#" class="my-link text-decoration-none">Reset Password</a>

                        <div class="mb-3">
                            <a href="#" class="btn btn-primary my-button">Send</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="interno">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="signup-form">
                        <form action="" class="mt-5 border p-4 bg-light shadow">
                            <h3 class="mb-5 text-secondary">Create Your Account</h3>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label>First Name<span class="text-danger">*</span></label>
                                    <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label>Last Name<span class="text-danger">*</span></label>
                                    <input type="text" name="Lname" class="form-control" placeholder="Enter Last Name">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label>Email<span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label>Password<span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Enter Password">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label>Confirm Password<span class="text-danger">*</span></label>
                                    <input type="password" name="confirmpassword" class="form-control"
                                        placeholder="Confirm Password">
                                </div>
                                <div class="col-md-12">
                                    <a href="#" class="btn btn-primary my-button float-end">Signup Now</a>
                                </div>
                            </div>
                        </form>
                        <p class="text-center mt-3 text-secondary">If you have account, Please <a href="#login"
                                class="register-link my-link">Login
                                Now</a></p>
                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="./../assets/js/script.js"></script> <!-- Va antes el jQuery que esto de script src-->
</body>

</html>
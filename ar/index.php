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
    <script src="../assets/js/toggle.js"></script>

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
                        <a class="nav-link active" href="#index">الصفحة الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#biblioteca">المكتبة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#propuesta">الاقتراحات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#trabaja">التوظيف</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" role="button"
                            aria-expanded="false">الشركة</a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link dropdown-item" href="#equipo">الفريق</a></li>
                            <li><a class="nav-link dropdown-item" href="#origen">الأصل</a></li>
                            <li><a class="nav-link dropdown-item" href="#mvv">الرؤية والرسالة والقيم</a></li>
                            <li><a class="nav-link dropdown-item" href="#organigrama">الهيكل التنظيمي</a></li>
                            <li><a class="nav-link dropdown-item" href="#clientes">العملاء</a></li>
                            <li><a class="nav-link dropdown-item" href="#contacto">الاتصال</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#login">تسجيل الدخول</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#interno">البوابة الداخلية</a>
                    </li>

                </ul>
                <a style="margin-right: 1rem;" class="nav-link active" href="./../index.php"><img
                        src="../assets/img/espana.png" alt="" width="20px"></a>
                <a style="margin-right: 1rem;" class="nav-link active" href="./../en/index.php"><img
                        src="../assets/img/reino-unido.png" alt="" width="20px"></a>
                <a style="margin-right: 1rem;" class="nav-link active" href="./../ar/index.php"><img
                        src="../assets/img/emiratos-arabes-unidos.png" alt="" width="20px"></a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">بحث</button>
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
                    <img src='../assets/img/imagen1.jpg' class="d-block h-100 w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 style="color: white !important;">واضو</h1>
                            <p>اكتشف مستقبل التعليم في واضو: المعرفة في يديك.</p>
                            <p><a class="btn btn-lg btn-primary my-button sign-link" href="#login">التسجيل</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src='../assets/img/imagen2.jpg' class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 style="color: white !important;">واضو</h1>
                            <p>عالم بدون عطش للمعرفة سيكون عالمًا بدون تقدم أو أمل.</p>
                            <p><a class="btn btn-lg btn-primary my-button sign-link" href="#login">التسجيل</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src='../assets/img/imagen3.jpg' class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 style="color: white !important;">واضو</h1>
                            <p>المعرفة هي الشعلة التي تضيء الكون الواسع من الفرص المحيطة بنا.</p>
                            <p><a class="btn btn-lg btn-primary my-button sign-link" href="#login">التسجيل</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">السابق</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">التالي</span>
            </button>
        </div>

        <!-- Contenido de la primera página algunas noticias y cosas relevantes. -->
        <div class="container">
            <div class="card">
                <div class="card-header my-card-header">
                    أخبار جديدة!
                </div>
                <div class="card-body">
                    <h5 class="card-title">تمت إضافة دورة جديدة</h5>
                    <p class="card-text">
                        الدورة الجديدة في أمان المعلومات متاحة الآن. انقر لرؤية المزيد من التفاصيل وابدأ الآن
                    </p>
                    <a href="#biblioteca" class="btn btn-primary my-button biblioteca-link">شاهد الآن</a>
                </div>
                <div class="card-footer my-card-footer text-muted">
                    منذ يوم واحد
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header my-card-header">
                    أخبار جديدة!
                </div>
                <div class="card-body">
                    <h5 class="card-title">عروض جديدة للأسرع!!</h5>
                    <p class="card-text">في هذا الوقت من التخفيضات، نقدم لك عروضًا حصرية لمدة 24 ساعة. انقر لرؤية خطة
                        الأسعار</p>
                    <!-- زر الزر لتشغيل النموذج -->
                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                        data-bs-target="#exampleModalRebajado">
                        شاهد الآن
                    </button>

                    <!-- نموذج -->
                    <div class="modal fade" id="exampleModalRebajado" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <section class="pricing-section bg-1">
                                        <h2 class="pricing-section__title">تخفيضات!!!</h2>
                                        <div class="pricing pricing--sonam">
                                            <div class="pricing__item">
                                                <h3 class="pricing__title">بسيط</h3>
                                                <div class="pricing__price">
                                                    <span class="rebajado-anterior">14.99 €</span>
                                                    <span class="rebajado-posterior">8.99 €</span>
                                                </div>
                                                <p class="pricing__sentence">دورة واحدة متاحة</p>
                                                <ul class="pricing__feature-list">
                                                    <li class="pricing__feature">ذكاء اصطناعي يتكيف مع احتياجاتك</li>
                                                    <li class="pricing__feature">خطة متابعة مخصصة</li>
                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة 3 أشهر</li>
                                                </ul>
                                                <button class="pricing__action">اختيار الخطة</button>
                                            </div>
                                            <div class="pricing__item">
                                                <h3 class="pricing__title">معيار</h3>
                                                <div class="pricing__price">
                                                    <span class="rebajado-anterior">119.99 €</span>
                                                    <span class="rebajado-posterior">71.99 €</span>
                                                </div>
                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                <ul class="pricing__feature-list">
                                                    <li class="pricing__feature">ذكاء اصطناعي يتكيف مع احتياجاتك</li>
                                                    <li class="pricing__feature">بدون خطة متابعة مخصصة</li>
                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة عام واحد</li>
                                                </ul>
                                                <button class="pricing__action">اختيار الخطة</button>
                                            </div>
                                            <div class="pricing__item">
                                                <h3 class="pricing__title">بريميوم</h3>
                                                <div class="pricing__price">
                                                    <span class="rebajado-anterior">199.99 €</span>
                                                    <span class="rebajado-posterior">119.99 €</span>
                                                </div>
                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                <ul class="pricing__feature-list">
                                                    <li class="pricing__feature">ذكاء اصطناعي يتكيف مع احتياجاتك</li>
                                                    <li class="pricing__feature">خطة متابعة مخصصة</li>
                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة عام واحد</li>
                                                    <li class="pricing__feature">وصول إلى عروض حصرية</li>
                                                </ul>
                                                <button class="pricing__action">اختيار الخطة</button>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer my-card-footer text-muted">
                    منذ 4 دقائق
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
                        <h2>الدورات المتاحة</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="card h-100 mh-100" style="height: 15rem;">
                        <div class="row g-0">
                            <div class="col-5 col-sm-4">
                                <img src="../assets/img/php.png" class="img-fluid w-100 h-100" alt="php">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">PHP متقدم</h4>
                                    <h6 class="card-title">أدنان إ.ب</h6>
                                    <p class="card-text">
                                        اكتشف قوة PHP في دورتنا الحصرية! تعلم كيفية إنشاء مواقع ويب ديناميكية بسهولة.
                                        كن خبيرًا في تطوير الويب باستخدام PHP للنماذج وقواعد البيانات وأكثر من ذلك.
                                        سجل الآن وابرع في فن البرمجة الويب التفاعلية باستخدام PHP!
                                    </p>
                                    <p class="card-text"><small class="text-muted">2 ساعة و 30 دقيقة</small></p>
                                    <!-- زر الزر لتشغيل النموذج -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        شاهد الآن
                                    </button>

                                    <!-- نموذج -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">خطة الأسعار</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بسيط</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">دورة واحدة متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        3 أشهر</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">معيار</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">بدون خطة متابعة شخصية
                                                                    </li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بريميوم</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                    <li class="pricing__feature">وصول إلى عروض حصرية
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
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
                                <img src="../assets/img/python.png" class="img-fluid w-100 h-100" alt="python">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">بايثون</h4>
                                    <h6 class="card-title">مارتين غونزاليس</h6>
                                    <p class="card-text">
                                        استكشف إمكانيات Python في دورتنا المتخصصة! تعلم من الأساسيات إلى تقنيات البرمجة
                                        المتقدمة.
                                        اتقن إنشاء تطبيقات وحلول فعالة باستخدام Python.
                                        سجل الآن وابرع في لغة البرمجة الأكثر استخدامًا على مستوى العالم!
                                    </p>
                                    <p class="card-text"><small class="text-muted">2 ساعة و 45 دقيقة</small></p>
                                    <!-- زر الزر لتشغيل النموذج -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        شاهد الآن
                                    </button>

                                    <!-- نموذج -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">خطة الأسعار</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بسيط</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">دورة واحدة متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        3 أشهر</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">معيار</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">بدون خطة متابعة شخصية
                                                                    </li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بريميوم</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                    <li class="pricing__feature">وصول إلى عروض حصرية
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
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
                                <img src="../assets/img/sql.png" class="img-fluid w-100 h-100" alt="SQL">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">SQL</h4>
                                    <h6 class="card-title">حفصة أغمير</h6>
                                    <p class="card-text">
                                        استمتع بتعلم إدارة قواعد البيانات من خلال دورتنا في SQL. تعلم كيفية التلاعب
                                        بالبيانات، والاستعلامات،
                                        وتصميمات قواعد البيانات لتطوير أنظمة فعالة. انضم الآن وتعلم كيفية إدارة قواعد
                                        البيانات!
                                    </p>
                                    <p class="card-text"><small class="text-muted">3 ساعات و 15 دقيقة</small></p>
                                    <!-- زر الزر لتشغيل النموذج -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        شاهد الآن
                                    </button>

                                    <!-- نموذج -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">خطة الأسعار</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بسيط</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">دورة واحدة متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        3 أشهر</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">معيار</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">بدون خطة متابعة شخصية
                                                                    </li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بريميوم</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                    <li class="pricing__feature">وصول إلى عروض حصرية
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
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
                                <img src="../assets/img/javascript.png" class="img-fluid w-100 h-100" alt="JavaScript">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">JavaScript</h4>
                                    <h6 class="card-title">ماريا لوبيز</h6>
                                    <p class="card-text">
                                        كن سيدًا في تطوير الويب التفاعلي. تعلم استخدام JavaScript لإنشاء تجارب ديناميكية
                                        وحديثة في دورتنا
                                        المتخصصة.
                                    </p>
                                    <p class="card-text"><small class="text-muted">1 ساعة و 15 دقيقة</small></p>

                                    <!-- زر تشغيل النموذج -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        شاهد الآن
                                    </button>

                                    <!-- نموذج -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">خطة الأسعار</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بسيط</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">دورة واحدة متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        3 أشهر</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">معيار</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">بدون خطة متابعة شخصية
                                                                    </li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بريميوم</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                    <li class="pricing__feature">وصول إلى عروض حصرية
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
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
                                <img src="../assets/img/so.png" class="img-fluid w-100" alt="Linux y Windows">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">لينكس وويندوز</h4>
                                    <h6 class="card-title">ديفيد كارمونا</h6>
                                    <p class="card-text">
                                        اتقن كل من نظامي التشغيل مع دورتنا. اكتسب مهارات في إدارة الأنظمة، والأوامر،
                                        والتكوين لتعظيم إنتاجيتك.
                                    </p>
                                    <p class="card-text"><small class="text-muted">5 ساعات و 33 دقيقة</small></p>

                                    <!-- زر تشغيل النموذج -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        شاهد الآن
                                    </button>

                                    <!-- نموذج -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">خطة الأسعار</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بسيط</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">دورة واحدة متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        3 أشهر</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">معيار</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">بدون خطة متابعة شخصية
                                                                    </li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بريميوم</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                    <li class="pricing__feature">وصول إلى عروض حصرية
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
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
                                <img src="../assets/img/ciberseguridad.png" class="img-fluid w-100" alt="Ciberseguridad">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">أمان المعلومات</h4>
                                    <h6 class="card-title">كريستيان فرنانديز</h6>
                                    <p class="card-text">
                                        حمِّي بياناتك وتعلَّم كيفية التصدي للتهديدات في دورتنا في مجال الأمان الرقمي.
                                        اكتسب المهارات الأساسية لضمان
                                        أمان المعلومات.
                                    </p>
                                    <p class="card-text"><small class="text-muted">4 ساعات و 30 دقيقة</small></p>

                                    <!-- زر تشغيل النموذج -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        شاهد الآن
                                    </button>

                                    <!-- نموذج -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">خطة الأسعار</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بسيط</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">دورة واحدة متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        3 أشهر</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">معيار</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">بدون خطة متابعة شخصية
                                                                    </li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بريميوم</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                    <li class="pricing__feature">وصول إلى عروض حصرية
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
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
                                <img src="../assets/img/office.png" class="img-fluid w-100" alt="Microsoft Office">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">Microsoft Office</h4>
                                    <h6 class="card-title">إينيغو أنسين</h6>
                                    <p class="card-text">
                                        قم بتحسين إنتاجيتك مع دروسنا حول Microsoft Office. تعلم كيفية استخدام Word
                                        وExcel وPowerPoint وغيرها
                                        بكفاءة لتحسين عملك.
                                    </p>
                                    <p class="card-text"><small class="text-muted">6 ساعات و 45 دقيقة</small></p>

                                    <!-- زر تشغيل النموذج -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        شاهد الآن
                                    </button>

                                    <!-- نموذج -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">خطة الأسعار</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بسيط</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">دورة واحدة متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        3 أشهر</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">معيار</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">بدون خطة متابعة شخصية
                                                                    </li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بريميوم</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                    <li class="pricing__feature">وصول إلى عروض حصرية
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
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
                                <img src="../assets/img/virtualizacion.png" class="img-fluid w-100" alt="Virtualización">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">التجاوز</h4>
                                    <h6 class="card-title">عدنان إ. ب.</h6>
                                    <p class="card-text">
                                        اكتشف التجاوز في دورتنا المتخصصة. تعلم كيفية استخدام الأدوات والتقنيات لإنشاء
                                        وإدارة بيئات افتراضية بفعالية.
                                    </p>
                                    <p class="card-text"><small class="text-muted">2 ساعة و 35 دقيقة</small></p>

                                    <!-- زر تشغيل النموذج -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        شاهد الآن
                                    </button>

                                    <!-- نموذج -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">خطة الأسعار</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بسيط</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">دورة واحدة متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        3 أشهر</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">معيار</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">بدون خطة متابعة شخصية
                                                                    </li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بريميوم</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                    <li class="pricing__feature">وصول إلى عروض حصرية
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
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
                                <img src="../assets/img/redes.png" class="img-fluid w-100" alt="Redes">
                            </div>
                            <div class="col-7 col-sm-8">
                                <div class="card-body">
                                    <h4 class="card-title">الشبكات</h4>
                                    <h6 class="card-title">حفصة أغمير</h6>
                                    <p class="card-text">
                                        استكشف الأساسيات الأساسية للشبكات في دورتنا. تعلم كيفية إعداد وصيانة وتأمين
                                        الشبكات، وفهم مفاهيم رئيسية
                                        مثل التوجيه والأمان والبروتوكولات لبناء بنية تحتية قوية وآمنة.
                                    </p>
                                    <p class="card-text"><small class="text-muted">7 ساعات و 55 دقيقة</small></p>

                                    <!-- زر تشغيل النموذج -->
                                    <button type="button" class="btn btn-primary my-button" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        شاهد الآن
                                    </button>

                                    <!-- نموذج -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <section class="pricing-section bg-1">
                                                        <h2 class="pricing-section__title">خطة الأسعار</h2>
                                                        <div class="pricing pricing--sonam">
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بسيط</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>14.99</div>
                                                                <p class="pricing__sentence">دورة واحدة متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        3 أشهر</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">معيار</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>119.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">بدون خطة متابعة شخصية
                                                                    </li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
                                                            </div>
                                                            <div class="pricing__item">
                                                                <h3 class="pricing__title">بريميوم</h3>
                                                                <div class="pricing__price"><span
                                                                        class="pricing__currency">$</span>199.99</div>
                                                                <p class="pricing__sentence">جميع الدورات متاحة</p>
                                                                <ul class="pricing__feature-list">
                                                                    <li class="pricing__feature">ذكاء اصطناعي قابل
                                                                        للتكيف مع احتياجاتك</li>
                                                                    <li class="pricing__feature">خطة متابعة شخصية</li>
                                                                    <li class="pricing__feature">يمكن الوصول إليها لمدة
                                                                        عام واحد</li>
                                                                    <li class="pricing__feature">وصول إلى عروض حصرية
                                                                    </li>
                                                                </ul>
                                                                <button class="pricing__action">اختيار الخطة</button>
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
                        <h2>اقتراحات الدورات</h2>
                        <p class="mb-5">
                            إذا كنت ترغب في القيام بدورة أخرى ليست لدينا حاليًا، يرجى ملء هذا النموذج.
                            نأخذ جميع اقتراحاتكم بعين الاعتبار.
                        </p>
                    </div>
                </div>

                <form action="" method="post" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-1">
                                <input type="text" name="name" class="form-control" id="name" placeholder="الاسم">
                            </div>
                            <div class="form-group mb-1">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="البريد الإلكتروني">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="الوصف"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="#" class="btn btn-primary my-button mt-3">إرسال</a>
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
                        <h2>هل ترغب في العمل معنا؟</h2>
                        <p class="mb-5">
                            هنا يمكنك إرسال بياناتك.
                        </p>
                    </div>
                </div>
                <form class="row g-3 needs-validation" novalidate="" style="display: flex; flex-direction: column;">
                    <div class="col-md-12 position-relative" style="margin-bottom: 15px;">
                        <label for="validationTooltip01" class="form-label">أرسل لنا رسالة تقديم نفسك</label>
                        <input type="file" class="form-control" id="validationTooltip01" required=""
                            name="cartapresentacion">
                        <div class="valid-tooltip">
                            تبدو جيدة!
                        </div>
                    </div>
                    <div class="col-md-12 position-relative" style="margin-bottom: 15px;">
                        <label for="validationTooltip02" class="form-label">أرسل لنا سيرتك الذاتية</label>
                        <input type="file" class="form-control" id="validationTooltip02" required=""
                            name="cartapresentacion">
                        <div class="valid-tooltip">
                            تبدو جيدة!
                        </div>
                    </div>
                    <div class="mb-3">
                        <a href="#" class="btn btn-primary my-button">إرسال</a>
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
                                <h2>الفريق</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="card h-100 mh-100" style="height: 15rem;">
                                <div class="row g-0">
                                    <div class="col-5 col-sm-4">
                                        <img src="../assets/img/adnane.jpg" class="img-fluid w-100 h-100" alt="php">
                                    </div>
                                    <div class="col-7 col-sm-8">
                                        <div class="card-body">
                                            <h4 class="card-title">عدنان البوطيبي</h4>
                                            <h6 class="card-title">مهندس معلوماتي</h6>
                                            <p class="card-text">
                                                عدنان البوطيبي (13 نوفمبر 1983، الدار البيضاء، المغرب) تخرج في هندسة
                                                المعلومات من جامعة مرسية متخصصًا في مجال الاتصالات. عمل في العديد من
                                                الشركات المختصة في بنية شبكة الاتصالات للشركات الأخرى وكأستاذ في العديد
                                                من المراكز المتكاملة وانتهى في بامبلونا ، تحديدًا في Cuatrovientos CI.
                                                في عام 2023 ، أسس WADU® مع 3 أذكياء آخرين في مجالي المعلوماتية
                                                والاتصالات.
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
                                        <img src="../assets/img/inigo.jpg" class="img-fluid w-100 h-100" alt="python">
                                    </div>
                                    <div class="col-7 col-sm-8">
                                        <div class="card-body">
                                            <h4 class="card-title">إينيغو أنسين</h4>
                                            <h6 class="card-title">مهندس معلوماتي</h6>
                                            <p class="card-text">
                                                إينيغو أنسين (14 ديسمبر 1990، بامبلونا، إسبانيا) تخرج في هندسة المعلومات
                                                من جامعة ماساتشوستس متخصصًا في مجال الأمان السيبراني. عمل لصالح عدة
                                                مؤسسات مثل مكتب التحقيقات الفدرالي (FBI) أو وكالة المخابرات المركزية
                                                (CIA) وشركات مثل مايكروسوفت أو سوني. في عام 2020 عاد إلى بامبلونا للعمل
                                                في مركز المعالجة الآلية لحكومة نافارا ، وفي عام 2023 انضم إلى آخرين
                                                اثنين من أذكياء المعلوماتية والاتصالات لتأسيس WADU®.
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
                                        <img src="../assets/img/hafsa.jpg" class="img-fluid w-100 h-100" alt="SQL">
                                    </div>
                                    <div class="col-7 col-sm-8">
                                        <div class="card-body">
                                            <h4 class="card-title">حفصة أغمير</h4>
                                            <h6 class="card-title">DevOps</h6>
                                            <p class="card-text">
                                                حفصة أغمير (14 يوليو 1987، العرائش، المغرب) تخرجت في هندسة المعلومات من جامعة أكسفورد متخصصة في إدارة حاويات Kubernetes وإدارة الأنظمة. عملت في مشاريع مختلفة للاتحاد الأوروبي وحكومة إسبانيا. في عام 2021 انتقلت إلى بامبلونا للعمل في مركز معالجة البيانات لحكومة نافارا حيث التقت بالعبقري إينيغو أنسين وبدأت كأستاذة في Cuatrovientos CI حيث التقت بعدنان البوطيبي. في عام 2023 انضمت إلى آخرين لتأسيس WADU® مع إينيغو وعدنان وعبقري آخر في مجالي المعلوماتية والاتصالات.
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
                                        <img src="../assets/img/david.jpg" class="img-fluid w-100 h-100" alt="JavaScript">
                                    </div>
                                    <div class="col-7 col-sm-8">
                                        <div class="card-body">
                                            <h4 class="card-title">ديفيد كارمونا</h4>
                                            <h6 class="card-title">مهندس إلكتروني</h6>
                                            <p class="card-text">
                                                ديفيد كارمونا (3 سبتمبر 1993، بامبلونا، إسبانيا) تخرج في هندسة الكترونيات من جامعة مرسية. في عام 2019 عاد إلى بامبلونا للعمل كساعي بريد وفي عام 2021 عمل كنظاف في محطة قطار بامبلونا. كان يتردد في استراحة قريبة حيث التقى بعدنان وعباقرة المعلوماتية والاتصالات إينيغو وحفصة. في نهاية المطاف ، في عام 2023 قاموا بتأسيس WADU®.
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
                                <h2>ما هو WADU؟</h2>
                                <p class="">
                                    يعود أصل WADU إلى أول لقاء لأربعة مؤسسين للشركة في حانة قريبة من محطة قطار بامبلونا. نشأت عندما كان هناك نقاش حول التعليم الحالي والقلق بشأن مستقبله. توافق الأربعة على أن نظام التعليم قديم للغاية وأن الأمور ليست كما كانت في السابق.
                                </p>
                                <p>
                                    بعد هذا اللقاء الأول، تمت مزيد من الاجتماعات حتى أسسوا WADU أخيرًا في عام 2023. إنها منصة افتراضية حيث يمكن للأشخاص المهتمين بعالم علوم الحاسوب أن يتعلموا ويطوروا معرفتهم بطريقة مريحة وقابلة للتكيف.
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
                                الرسالة
                            </div>
                            <div class="card-body mx-auto">
                                <p class="card-text">
                                    تقديم تدريب شخصي مدعوم بالذكاء الاصطناعي في عالم افتراضي مثير للتعلم المتبادل. نجاحك هو التزامنا.
                                </p>
                            </div>
                            <div class="card-footer my-card-footer"><i class="bi bi-flag-fill"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card h-100">
                            <div class="card-header my-card-header lead">
                                الرؤية
                            </div>
                            <div class="card-body mx-auto">
                                <p class="card-text">خلق منصة تعليمية تكنولوجية بدون حدود</p>
                            </div>
                            <div class="card-footer my-card-footer"><i class="bi bi-eye"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="card h-100">
                            <div class="card-header my-card-header lead">
                                القيم
                            </div>
                            <div class="card-body mx-auto">
                                <p class="card-text">النزاهة، الابتكار والتميز</p>
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
                                <h2>الهيكل التنظيمي</h2>
                                <img src="../assets/img/organigrama.png" alt="organigrama">
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
                                <h2>العملاء الرئيسيين</h2>
                                <table class="table table-striped table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">الاسم</th>
                                            <th scope="col">رصيد الأهداف الإنمائية المستدامة (ODS)</th>
                                            <th scope="col">الموقع</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>MARIA ANA SANZ</td>
                                            <td>99</td>
                                            <td>إسبانيا</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>CISTEC TECHNOLOGY SLL</td>
                                            <td>97</td>
                                            <td>الولايات المتحدة</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>TESICNOR</td>
                                            <td>78</td>
                                            <td>إسبانيا</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>NUBAPP APPICATIONS SL</td>
                                            <td>89</td>
                                            <td>المغرب</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>HIBERUS TECNOLOGÍA</td>
                                            <td>69</td>
                                            <td>المغرب</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>COMPUTADORES NAVARRA SA</td>
                                            <td>100</td>
                                            <td>الولايات المتحدة</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>NASERTIC</td>
                                            <td>85</td>
                                            <td>إسبانيا</td>
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
                        <h2>اتصل بنا</h2>
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
                                        <h3 class="card-title">إسبانيا</h3>
                                        <p class="card-text">الهاتف: +34 948 12 41 29</p>
                                        <p class="card-text">ساعات العمل: 9:00-14:00</p>
                                        <!-- زر تشغيل النموذج -->
                                        <a href="" class="my-link" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalContacto">
                                            info@wadu.es
                                        </a>
                                    
                                        <!-- نموذج -->
                                        <div class="modal fade" id="exampleModalContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">أرسل لنا بريدًا</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="formContacto" action="mailto:info@wadu.es" method="post" enctype="text/plain">
                                                            <div class="form-group">
                                                                <label for="name">الاسم الكامل</label>
                                                                <input id="name" name="name" placeholder="اسمك" type="text" required="required" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="user">اسم المستخدم</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="bi bi-person-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input id="user" name="user" placeholder="اسم المستخدم" type="text" aria-describedby="userHelpBlock"
                                                                        required="required" class="form-control">
                                                                </div>
                                                                <span id="userHelpBlock" class="form-text text-muted">اكتب اسم المستخدم الخاص بك لتحديد هويتك بشكل أسرع</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="correo">البريد الإلكتروني</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">@</div>
                                                                    </div>
                                                                    <input id="correo" name="correo" placeholder="بريدك الإلكتروني" type="text"
                                                                        aria-describedby="correoHelpBlock" required="required" class="form-control">
                                                                </div>
                                                                <span id="correoHelpBlock" class="form-text text-muted">اكتب عنوان بريدك الإلكتروني حتى نتمكن من الاتصال
                                                                    بك</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">الموضوع</label>
                                                                <textarea id="subject" name="subject" cols="40" rows="5" aria-describedby="subjectHelpBlock"
                                                                    required="required" class="form-control"></textarea>
                                                                <span id="subjectHelpBlock" class="form-text text-muted">اكتب الموضوع الذي ترغب في مناقشته معنا بأكبر
                                                                    قدر من التفصيل</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <button name="submit" type="submit" class="btn btn-primary">إرسال</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ينتهي هنا -->
                                    </div>
                                    

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-3">
                        <div class="card h-100 mh-100" style="height: 15rem;">
                            <div class="row g-0">
                                <div class="col">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d417347.5763392235!2d-6.533505854117622!3d35.19331650000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0bced790dd657f%3A0xa330c3875fb21324!2z2YXYudmH2K8g2KfZhNiq2YPZhtmI2YTZiNis2YrYpyDZhNmE2LXZitivINin2YTYqNit2LHZig!5e0!3m2!1ses!2ses!4v1704825466969!5m2!1ses!2ses"
                                        width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <h3 class="card-title">المغرب</h3>
                                        <p class="card-text">الهاتف: +212 5395-01569</p>
                                        <p class="card-text">ساعات العمل: 8:30-12:00</p>
                                        <!-- زر تشغيل النموذج -->
                                        <a href="" class="my-link" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalContacto">
                                            info@wadu.ma
                                        </a>
                    
                                        <!-- نموذج -->
                                        <div class="modal fade" id="exampleModalContacto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">أرسل لنا بريدًا</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="formContacto" action="mailto:info@wadu.ma" method="post" enctype="text/plain">
                                                            <div class="form-group">
                                                                <label for="name">الاسم الكامل</label>
                                                                <input id="name" name="name" placeholder="اسمك" type="text" required="required" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="user">اسم المستخدم</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="bi bi-person-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input id="user" name="user" placeholder="اسم المستخدم" type="text" aria-describedby="userHelpBlock"
                                                                        required="required" class="form-control">
                                                                </div>
                                                                <span id="userHelpBlock" class="form-text text-muted">اكتب اسم المستخدم الخاص بك لتحديد هويتك بشكل أسرع</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="correo">البريد الإلكتروني</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">@</div>
                                                                    </div>
                                                                    <input id="correo" name="correo" placeholder="بريدك الإلكتروني" type="text"
                                                                        aria-describedby="correoHelpBlock" required="required" class="form-control">
                                                                </div>
                                                                <span id="correoHelpBlock" class="form-text text-muted">اكتب عنوان بريدك الإلكتروني حتى نتمكن من الاتصال
                                                                    بك</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">الموضوع</label>
                                                                <textarea id="subject" name="subject" cols="40" rows="5" aria-describedby="subjectHelpBlock"
                                                                    required="required" class="form-control"></textarea>
                                                                <span id="subjectHelpBlock" class="form-text text-muted">اكتب الموضوع الذي ترغب في مناقشته معنا بأكبر
                                                                    قدر من التفصيل</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <button name="submit" type="submit" class="btn btn-primary">إرسال</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- ينتهي هنا -->
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
                                        <h3 class="card-title">كولومبيا</h3>
                                        <p class="card-text">الهاتف: +57 76344000 تحويلة 2342</p>
                                        <p class="card-text">ساعات العمل: 6:00 صباحًا - 8:00 مساءً</p>
                                        <!-- زر لفتح نافذة البريد الإلكتروني -->
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
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Envianos un
                                                            correo</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="formContacto" action="mailto:info@wadu.co" method="post" enctype="text/plain">
                                                            <div class="form-group">
                                                                <label for="name">الاسم الكامل</label>
                                                                <input id="name" name="name" placeholder="اسمك" type="text" required="required" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="user">اسم المستخدم</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="bi bi-person-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input id="user" name="user" placeholder="اسم المستخدم" type="text" aria-describedby="userHelpBlock"
                                                                        required="required" class="form-control">
                                                                </div>
                                                                <span id="userHelpBlock" class="form-text text-muted">اكتب اسم المستخدم للتعرف عليك بشكل أسرع</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="correo">البريد الإلكتروني</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">@</div>
                                                                    </div>
                                                                    <input id="correo" name="correo" placeholder="بريدك الإلكتروني" type="text" aria-describedby="correoHelpBlock"
                                                                        required="required" class="form-control">
                                                                </div>
                                                                <span id="correoHelpBlock" class="form-text text-muted">اكتب بريدك الإلكتروني حتى نتمكن من الاتصال بك</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">الموضوع</label>
                                                                <textarea id="subject" name="subject" cols="40" rows="5" aria-describedby="subjectHelpBlock"
                                                                    required="required" class="form-control"></textarea>
                                                                <span id="subjectHelpBlock" class="form-text text-muted">اكتب الموضوع الذي ترغب في مناقشته معنا بأقصى تفاصيله
                                                                    الممكنة</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <button name="submit" type="submit" class="btn btn-primary">إرسال</button>
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
                                        <h3 class="card-title">المملكة المتحدة</h3>
                                        <p class="card-text">رقم الهاتف: +44 1865 270000</p>
                                        <p class="card-text">مواعيد العمل: 10:00-17:00</p>
                                        <!-- Button trigger modal -->
                                        <a href="" class="my-link" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalContacto">
                                            info@wadu.uk
                                        </a>
                                    
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalContacto" tabindex="-1" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">أرسل لنا بريدًا</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form name="formContacto" action="mailto:info@wadu.uk" method="post" enctype="text/plain">
                                                            <div class="form-group">
                                                                <label for="name">الاسم الكامل</label>
                                                                <input id="name" name="name" placeholder="اسمك" type="text" required="required"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="user">اسم المستخدم</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="bi bi-person-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <input id="user" name="user" placeholder="اسم المستخدم" type="text"
                                                                        aria-describedby="userHelpBlock" required="required" class="form-control">
                                                                </div>
                                                                <span id="userHelpBlock" class="form-text text-muted">اكتب اسم المستخدم للتعرف عليك بشكل
                                                                    أسرع</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="correo">البريد الإلكتروني</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">@</div>
                                                                    </div>
                                                                    <input id="correo" name="correo" placeholder="بريدك الإلكتروني" type="text"
                                                                        aria-describedby="correoHelpBlock" required="required" class="form-control">
                                                                </div>
                                                                <span id="correoHelpBlock" class="form-text text-muted">اكتب بريدك الإلكتروني حتى نتمكن من
                                                                    الاتصال بك</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="subject">الموضوع</label>
                                                                <textarea id="subject" name="subject" cols="40" rows="5"
                                                                    aria-describedby="subjectHelpBlock" required="required" class="form-control"></textarea>
                                                                <span id="subjectHelpBlock" class="form-text text-muted">اكتب الموضوع الذي ترغب في مناقشته
                                                                    معنا بأقصى تفاصيله الممكنة</span>
                                                            </div>
                                                            <div class="form-group">
                                                                <button name="submit" type="submit" class="btn btn-primary">إرسال</button>
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
                        <h3>نموذج تسجيل الدخول</h3>
                    </div>
                    <form accept="" class="shadow p-4">
                        <div class="mb-3">
                            <label for="username">البريد الإلكتروني / اسم المستخدم</label>
                            <input type="email" class="form-control" name="username" id="username"
                                placeholder="اسم المستخدم">
                        </div>
    
                        <div class="mb-3">
                            <label for="Password">كلمة المرور</label>
                            <input type="password" class="form-control" name="password" id="Password"
                                placeholder="كلمة المرور">
                        </div>
    
                        <label class="mb-3">
                            <input type="checkbox" name="RememberMe"> تذكرني
                        </label>
    
                        <a href="#" class="my-link text-decoration-none">إعادة تعيين كلمة المرور</a>
    
                        <div class="mb-3">
                            <a href="#" class="btn btn-primary my-button">إرسال</a>
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
                            <h3 class="mb-5 text-secondary">أنشئ حسابك</h3>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label>الاسم الأول<span class="text-danger">*</span></label>
                                    <input type="text" name="fname" class="form-control" placeholder="أدخل الاسم الأول">
                                </div>
    
                                <div class="mb-3 col-md-6">
                                    <label>اسم العائلة<span class="text-danger">*</span></label>
                                    <input type="text" name="Lname" class="form-control" placeholder="أدخل اسم العائلة">
                                </div>
    
                                <div class="mb-3 col-md-12">
                                    <label>البريد الإلكتروني<span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" placeholder="أدخل البريد الإلكتروني">
                                </div>
    
                                <div class="mb-3 col-md-12">
                                    <label>كلمة المرور<span class="text-danger">*</span></label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="أدخل كلمة المرور">
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label>تأكيد كلمة المرور<span class="text-danger">*</span></label>
                                    <input type="password" name="confirmpassword" class="form-control"
                                        placeholder="تأكيد كلمة المرور">
                                </div>
                                <div class="col-md-12">
                                    <a href="#" class="btn btn-primary my-button float-end">سجّل الآن</a>
                                </div>
                            </div>
                        </form>
                        <p class="text-center mt-3 text-secondary">إذا كنت تملك حسابًا، يرجى <a href="#login"
                                class="register-link my-link">تسجيل
                                الدخول
                                الآن</a></p>
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
    <script src="../assets/js/script.js"></script> <!-- Va antes el jQuery que esto de script src-->
</body>

</html>
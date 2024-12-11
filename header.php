<?php include "z_db.php";?>
<!doctype html>
<html class="no-js" lang="es">
    
<?php
    $rt=mysqli_query($con,"SELECT * FROM sitecontact where id=1");
    $tr = mysqli_fetch_array($rt);
    $phone1 = "$tr[phone1]";
    $phone2 = "$tr[phone2]";
    $email1 = "$tr[email1]";
    $email2 = "$tr[email2]";
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Descripción SEO Meta -->
    <meta name="description" content="">
    <meta name="author" content="EAPIIS">
    <!-- Título  -->
    <title>Men's Store</title>

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon/favicon.ico">

    <!-- ***** Todos los archivos CSS ***** -->
    <!-- Estilo css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- CSS Responsivo -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <!--====== Área de Precarga Inicio ======-->
    <div id="preloader">
        <!-- Precargador Digimax -->
        <div id="digimax-preloader" class="digimax-preloader">
            <!-- Animación de Precarga -->
            <div class="preloader-animation">
                <!-- Spinner -->
                <div class="spinner"></div>
                <!-- Cargador -->
                <div class="loader">
                    <span data-text-preloader="S" class="animated-letters">S</span>
                    <span data-text-preloader="T" class="animated-letters">T</span>
                    <span data-text-preloader="O" class="animated-letters">O</span>
                    <span data-text-preloader="R" class="animated-letters">R</span>
                    <span data-text-preloader="E" class="animated-letters">E</span>
                </div>
                <p class="fw-5 text-center text-uppercase">Cargando</p>
            </div>
            <!-- Animación de Cargador -->
            <div class="loader-animation">
                <div class="row h-100">
                    <!-- Cargador Individual -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Cargador Individual -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Cargador Individual -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                    <!-- Cargador Individual -->
                    <div class="col-3 single-loader p-0">
                        <div class="loader-bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Área de Precarga Fin ======-->

    <!--====== Área de Desplazamiento al Inicio ======-->
    <div id="scrollUp" title="Desplazarse al Inicio">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Área de Desplazamiento al Inicio Fin ======-->

    <div class="main overflow-hidden">
        <!-- ***** Encabezado Inicio ***** -->
        <header id="header">
            <!-- Barra de Navegación -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">
                    <a class="navbar-brand" href="home">
                        <img class="navbar-brand-regular" src="dashboard/assets/images/mens-store.png" alt="logo-marca">
                        <img class="navbar-brand-sticky" src="dashboard/assets/images/mens-store-dark.png" alt="logo-marca pegajoso">
                    </a>
                    <div class="ml-auto"></div>
                    <!-- Barra de Navegación -->
                    <ul class="navbar-nav items">
                        <li class="nav-item">
                            <a class="nav-link" href="home">Inicio </a>

                        </li>
                        <li class="nav-item">
                            <a href="services.php" class="nav-link">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a href="portfolio.php" class="nav-link">Portafolio</a>
                        </li>
                    </ul>

                    <!-- Conmutador de la Barra de Navegación -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="fas fa-bars toggle-icon m-0"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Botón de Acción de la Barra de Navegación -->
                    <ul class="navbar-nav action">
                        <li class="nav-item ml-3">
                            <a href="contact.php" class="btn ml-lg-auto btn-bordered-white"><i class="fas fa-paper-plane contact-icon mr-md-2"></i>Contáctenos</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ***** Encabezado Fin ***** -->

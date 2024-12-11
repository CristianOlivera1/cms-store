<?php
include "z_db.php";

session_start();
// Verificar si la sesión de usuario no está establecida, entonces redirigir a la página de inicio de sesión
if (!isset($_SESSION['username'])) {
    print "
        <script language='javascript'>
            window.location = 'login.php';
        </script>
    ";
} else {
    $username = $_SESSION['username'];
}
?>
<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">

<head>
    <meta charset="utf-8" />
    <title>Tablero | Mens' Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Panel de administración de Men's Style" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- Favicon de la aplicación -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- CSS de jsvectormap -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
    <!-- CSS del deslizador Swiper -->
    <link href="assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
    <!-- Configuración de diseño JS -->
    <script src="assets/js/layout.js"></script>
    <!-- CSS de Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- CSS de Iconos -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- CSS de la aplicación -->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- Comienzo de la página -->
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="dropdown d-md-none topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-search fs-22"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Buscar ..." aria-label="Nombre de usuario del destinatario">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen">
                                <i class='bx bx-fullscreen fs-22'></i>
                            </button>
                        </div>
                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>
                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"><?php print $username;?></span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- elemento -->
                                <h6 class="dropdown-header">¡Bienvenido <?php print $username;?>!</h6>
                                <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Cerrar sesión</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</body>
</html>

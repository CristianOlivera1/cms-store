<?php
include "../z_db.php";
$username=$_SESSION['username'];
?>
<div class="app-menu navbar-menu">
  <!-- LOGO -->
  <div class="navbar-brand-box">

    <a href="index.html" class="logo logo-dark">
      <span class="logo-sm">
        <img src="assets/images/mens-store.png" alt="" height="22">
      </span>
      <span class="logo-lg">
        <img src="assets/images/mens-store.png" alt="" height="30">
      </span>
    </a>
    <!-- Light Logo-->
    <a href="index.html" class="logo logo-light">
      <span class="logo-sm">
        <img src="assets/images/mens-store.png" alt="" height="22">
      </span>
      <span class="logo-lg">
        <img src="assets/images/mens-store.png" alt="" height="30">
      </span>
    </a>
    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
      <i class="ri-record-circle-line"></i>
    </button>
  </div>
<div id="scrollbar">
    <div class="container-fluid">

      <div id="two-column-menu">
      </div>
      <ul class="navbar-nav" id="navbar-nav">
        <li class="menu-title"><span data-key="t-menu">Menú</span></li>

        <li class="nav-item">
                <a href="dashboard" class="nav-link" data-key="t-analytics">  <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards"> Tablero </span></a>
              </li>

              <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-checkbox-multiple-line"></i> <span data-key="t-landing">Gestionar Categorias</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarLanding" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="add-service.php" class="nav-link" data-key="t-one-page"> Añadir Categorias </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="services.php" class="nav-link" data-key="t-nft-landing"> Lista de categorias </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarPot" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-rhythm-fill"></i> <span data-key="t-landing">Gestionar productos</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarPot" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="add-portfolio.php" class="nav-link" data-key="t-one-page"> Añadir Nuevo </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="portfolio.php" class="nav-link" data-key="t-nft-landing"> Lista de Portafolio </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarSl" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-image-fill"></i> <span data-key="t-landing">Gestionar slider</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarSl" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="add-slider.php" class="nav-link" data-key="t-one-page"> Añadir Nuevo </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="sliderlist.php" class="nav-link" data-key="t-nft-landing"> Lista de Sliders </a>
                                    </li>
                                
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarT" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-message-line"></i> <span data-key="t-landing">Gestionar ofertas</span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarT" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="add-testimony.php" class="nav-link" data-key="t-one-page">Nuevo Testimonio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="testimonylist.php" class="nav-link" data-key="t-nft-landing"> Todos los Testimonios </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarK" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarLanding">
                                <i class="ri-tools-fill"></i> <span data-key="t-landing"> Configuración del Sitio </span>
                            </a>
                            <div class="menu-dropdown collapse" id="sidebarK" style="">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="updatecontact.php" class="nav-link" data-key="t-nft-landing"> Actualizar Contacto </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="static-home.php" class="nav-link" data-key="t-nft-landing"> Actualizar titulo y descripcion portada</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
      </ul>
    </div>
    <!-- Sidebar -->
  </div>

  <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>

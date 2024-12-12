<?php
include "header.php";
$username=$_SESSION['username'];
?>
<?php include "sidebar.php";?>

<!-- ============================================================== -->
<!-- Iniciar contenido derecho aquí -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- iniciar título de la página -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Tablero</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tableros</a></li>
                                <li class="breadcrumb-item active">Tablero</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- fin título de la página -->

            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <h4 class="fs-16 mb-1">Hola, <?php print $username;?>!</h4>
                                        <p class="text-muted mb-0">Bienvenido de nuevo a tu tablero.</p>
                                    </div>
                                    <div class="mt-3 mt-lg-0">
                                        <form action="javascript:void(0);">

                                        </form>
                                    </div>
                                </div><!-- fin encabezado de la tarjeta -->
                            </div>
                            <!--fin col-->
                        </div>
                        <!--fin fila-->

                        <div class="row h-100">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                                            <i class="ri-git-merge-fill"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                    <?php
$result = mysqli_query($con,"SELECT count(*) FROM service");
$row = mysqli_fetch_row($result);
$numrows = $row[0];

?>
                                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total de Categorias</p>
                                                        <h4 class=" mb-0"><span class="counter-value" data-target="<?php print $numrows; ?>"></span></h4>
                                                    </div>

                                                </div>
                                            </div><!-- fin cuerpo de la tarjeta -->
                                        </div><!-- fin tarjeta -->
                                    </div><!-- fin col -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                                            <i class="ri-server-line"></i>
                                                        </span>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                    <?php
$result = mysqli_query($con,"SELECT count(*) FROM products");
$rowx = mysqli_fetch_row($result);
$nux = $rowx[0];

?>
                                                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total de productos</p>
                                                        <h4 class=" mb-0"><span class="counter-value" data-target="<?php print $nux; ?>"></span></h4>
                                                    </div>

                                                </div>
                                            </div><!-- fin cuerpo de la tarjeta -->
                                        </div><!-- fin tarjeta -->
                                    </div><!-- fin col -->
                                  
                                </div>
                    </div> <!-- fin .h-100-->
                </div> <!-- fin col -->
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- Fin del contenido de la página -->
    <?php include"footer.php";?>

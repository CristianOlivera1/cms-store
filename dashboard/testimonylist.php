<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

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
                        <h4 class="mb-sm-0">Testimonio</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Todos</a></li>
                                <li class="breadcrumb-item active">Testimonio</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fin título de la página -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Lista de Testimonios</h5>
                        </div>
                        <div class="card-body">
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <th data-ordering="false">Foto del Cliente</th>
                                        <th data-ordering="false">Nombre del Cliente</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $q = "SELECT * FROM testimony ORDER BY id DESC";
                                    $r123 = mysqli_query($con, $q);

                                    while ($ro = mysqli_fetch_array($r123)) {
                                        $id = $ro['id'];
                                        $name = $ro['name'];
                                        $ufile = $ro['ufile'];

                                        echo "<tr>
                                                <td>
                                                    <img src='uploads/testimony/$ufile' alt='img' style='max-height:50px;'>
                                                </td>
                                                <td>$name</td>
                                                <td>
                                                    <div class='dropdown d-inline-block'>
                                                        <button class='btn btn-soft-secondary btn-sm dropdown' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                                            <i class='ri-more-fill align-middle'></i>
                                                        </button>
                                                        <ul class='dropdown-menu dropdown-menu-end'>
                                                            <li>
                                                                <a href='deletetest.php?id=$id' class='dropdown-item remove-item-btn'>
                                                                    <i class='ri-delete-bin-fill align-bottom me-2 text-muted'></i> Eliminar
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><!-- fin col -->
            </div><!-- fin fila -->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- Fin del contenido de la página -->

    <?php include "footer.php"; ?>
</div>

<?php include "header.php"; ?>
<?php include "sidebar.php"; ?>

<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <!-- iniciar título de la página -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">PRODUCTOS</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Todos</a></li>
                                <li class="breadcrumb-item active">Producto</li>
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
                            <h5 class="card-title mb-0">Lista de productos</h5>
                        </div>
                        <div class="card-body">
                            <form method="GET" action="" id="filterForm">
                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <input type="text" name="search" class="form-control" placeholder="Buscar por nombre de producto" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>" oninput="document.getElementById('filterForm').submit();">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="category" class="form-select" onchange="document.getElementById('filterForm').submit();">
                                            <option value="">Todas las categorías</option>
                                            <?php
                                            $categories = mysqli_query($con, "SELECT id, service_title FROM service");
                                            while ($category = mysqli_fetch_assoc($categories)) {
                                                $selected = isset($_GET['category']) && $_GET['category'] == $category['id'] ? 'selected' : '';
                                                echo "<option value='{$category['id']}' $selected>{$category['service_title']}</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </form>
                            <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <th data-ordering="false">Foto</th>
                                        <th data-ordering="false">Nombre</th>
                                        <th data-ordering="false">Precio</th>
                                        <th data-ordering="false">Tamaño</th>
                                        <th data-ordering="false">Categoria</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $search = isset($_GET['search']) ? mysqli_real_escape_string($con, $_GET['search']) : '';
                                    $category = isset($_GET['category']) ? mysqli_real_escape_string($con, $_GET['category']) : '';

                                    $q = "SELECT p.*, c.service_title as category_name FROM products p JOIN service c ON p.id_category = c.id WHERE 1=1";

                                    if ($search) {
                                        $q .= " AND p.name LIKE '%$search%'";
                                    }

                                    if ($category) {
                                        $q .= " AND p.id_category = '$category'";
                                    }

                                    $q .= " ORDER BY p.id DESC";
                                    $r123 = mysqli_query($con, $q);

                                    while ($ro = mysqli_fetch_array($r123)) {
                                        $id = $ro['id'];
                                        $name = $ro['name'];
                                        $price = $ro['price'];
                                        $size = $ro['size'];
                                        $category_name = $ro['category_name'];
                                        $ufile = $ro['ufile'];

                                        echo "<tr>
                                                <td>
                                                    <img src='uploads/product/$ufile' alt='img' style='max-height:50px;'>
                                                </td>
                                                <td>$name</td>
                                                <td>$price</td>
                                                <td>$size</td>
                                                <td>$category_name</td>
                                                <td>
                                                    <div class='dropdown d-inline-block'>
                                                        <button class='btn btn-soft-secondary btn-sm dropdown' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
                                                            <i class='ri-more-fill align-middle'></i>
                                                        </button>
                                                        <ul class='dropdown-menu dropdown-menu-end'>
                                                             <li><a href='editproduct.php?id=$id' class='dropdown-item edit-item-btn'><i class='ri-pencil-fill align-bottom me-2 text-muted'></i> Editar</a></li>
                                                            <li>
                                                                <a href='javascript:void(0);' class='dropdown-item remove-item-btn' onclick='confirmDelete($id)'>
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
    
<!-- Modal de confirmación -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirmar eliminación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar este producto?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Eliminar</button>
            </div>
        </div>
    </div>
</div>
    <!-- Fin del contenido de la página -->
    <script src="assets/js/script.js"></script>
    <?php include "footer.php"; ?>
</div>




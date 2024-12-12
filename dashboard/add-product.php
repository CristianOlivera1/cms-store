<?php include "header.php";?>
<?php include "sidebar.php";?>

<div class="main-content">
 <div class="page-content">
       <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Agregar producto</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Producto</a></li>
                                        <li class="breadcrumb-item active">Agregar</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">

                        <!--end col-->
                        <div class="col-xxl-9">
                            <div class="card mt-xxl-n5">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="false">
                                                <i class="fas fa-home"></i> Agregar producto
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <?php
           $status = "OK"; //initial status
$msg="";
           if(ISSET($_POST['save'])){
$category_id = mysqli_real_escape_string($con,$_POST['category_id']);
$product_name = mysqli_real_escape_string($con,$_POST['product_name']);
$product_desc = mysqli_real_escape_string($con,$_POST['product_desc']);
$product_price = mysqli_real_escape_string($con,$_POST['product_price']);
$product_size = mysqli_real_escape_string($con,$_POST['product_size']);
$product_brand = mysqli_real_escape_string($con,$_POST['product_brand']);

 if ( strlen($product_name) < 5 ){
$msg=$msg."El nombre del producto debe tener mas de 5 caracteres .<BR>";
$status= "NOTOK";}
 if ( strlen($product_desc) < 10 ){
$msg=$msg."La descripcion debe tener mas de 10 caracteres.<BR>";
$status= "NOTOK";}

if ( !is_numeric($product_price) ){
  $msg=$msg."El precio no es un numero.<BR>";
  $status= "NOTOK";}

$uploads_dir = 'uploads/product';

        $tmp_name = $_FILES["ufile"]["tmp_name"];
        $name = basename($_FILES["ufile"]["name"]);
        $random_digit=rand(0000,9999);
        $new_file_name=$random_digit.$name;

        move_uploaded_file($tmp_name, "$uploads_dir/$new_file_name");

if($status=="OK")
{
$qb=mysqli_query($con,"INSERT INTO products (id_category, name, description, price, ufile, size, brand) VALUES ('$category_id', '$product_name', '$product_desc', '$product_price', '$new_file_name', '$product_size', '$product_brand')");


        if($qb){
            	$errormsg= "
<div class='alert alert-success alert-dismissible alert-outline fade show'>
                 El producto ha sido agregado exitosamente.
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>
 "; //printing error if found in validation

        }
    }

        elseif ($status!=="OK") {
            $errormsg= "
<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                     ".$msg." <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> </div>"; //printing error if found in validation


    }
    else{
            $errormsg= "
      <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                Hay algún problema técnico. Vuelva a intentarlo más tarde o solicite ayuda al administrador.
                 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                 </div>"; //error de impresión si se encuentra en la validación

        }
           }
           ?>

                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                        <?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
                        {
                        print $errormsg;
                        }
   ?>
              <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                        
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="categorySelect" class="form-label">Categoría</label>
                                <select class="form-select" id="categorySelect" name="category_id">
                                    <option selected>Seleccione categoria</option>
                                    <?php
                                    $result = mysqli_query($con, "SELECT id, service_title FROM service order by id desc");
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='".$row['id']."'>".$row['service_title']."</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="productName" class="form-label">Nombre del Producto</label>
                                <input type="text" class="form-control" id="productName" name="product_name" placeholder="Ingrese nombre del producto">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="productDesc" class="form-label">Descripción</label>
                                <textarea class="form-control" id="productDesc" name="product_desc" rows="2"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="productPrice" class="form-label">Precio</label>
                                <input type="number" class="form-control" id="productPrice" name="product_price" placeholder="Ingrese el precio del producto">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="productSize" class="form-label">Tamaño</label>
                                <input type="text" class="form-control" id="productSize" name="product_size" placeholder="Ingrese el tamaño del producto">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="productBrand" class="form-label">Marca</label>
                                <input type="text" class="form-control" id="productBrand" name="product_brand" placeholder="Ingrese la marca del producto">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="productPhoto" class="form-label">Foto</label>
                                <input type="file" class="form-control" id="productPhoto" name="ufile" >
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-lg-12">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="submit" name="save" class="btn btn-primary">Agregar producto</button>

                            </div>
                        </div>
                        <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </form>
                                    </div>
                                    <!--end tab-pane-->

                                    <!--end tab-pane-->

                                    <!--end tab-pane-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end col-->
                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include"footer.php";?>
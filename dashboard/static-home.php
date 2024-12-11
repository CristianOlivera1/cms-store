<?php include "header.php";?>
<?php include "sidebar.php";?>

<!-- ============================================================== -->
<!-- Inicia el contenido derecho aquí -->
<!-- ============================================================== -->
<div class="main-content">
 <div class="page-content">
    <div class="container-fluid">

              <!-- inicio del título de la página -->
              <div class="row">
               <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Titulo y descripción de la portada</h4>

                    <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                         <li class="breadcrumb-item"><a href="javascript: void(0);">Configuración</a></li>
                         <li class="breadcrumb-item active">Tutulo y descripción</li>
                     </ol>
                    </div>

                </div>
               </div>
              </div>
              <!-- fin del título de la página -->


              <div class="row">

               <!--fin col-->
               <div class="col-xxl-9">
                <div class="card mt-xxl-n5">
                    <div class="card-header">
                     <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                         <li class="nav-item">
                          <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab" aria-selected="false">
                              <i class="fas fa-home"></i> Actualizar textos de la portada
                          </a>
                         </li>
                     </ul>
                    </div>
<?php
$status = "OK"; //estado inicial
$msg="";
        if(ISSET($_POST['save'])){
$stitle = mysqli_real_escape_string($con,$_POST['stitle']);
$stext = mysqli_real_escape_string($con,$_POST['stext']);

 if ( strlen($stitle) < 5 ){
$msg=$msg."El campo del título no puede estar vacío.<BR>";
$status= "NOTOK";}
 if ( strlen($stext) < 20 ){
$msg=$msg."El campo del texto del slider debe contener caracteres.<BR>";
$status= "NOTOK";}


 /*
$uploads_dir = 'uploads';

     $tmp_name = $_FILES["ufile"]["tmp_name"];
     // basename() puede prevenir ataques de recorrido del sistema de archivos;
     // puede ser apropiada una validación/saneamiento adicional del nombre del archivo
     $name = basename($_FILES["ufile"]["name"]);
     $random_digit=rand(0000,9999);
     $new_file_name=$random_digit.$name;

     move_uploaded_file($tmp_name, "$uploads_dir/$new_file_name");*/

if($status=="OK")
{
$qb=mysqli_query($con,"update static set stitle='$stitle', stext='$stext' where id=1");

        if($qb){
            $errormsg= "
<div class='alert alert-success alert-dismissible alert-outline fade show'>
          Información del slider actualizada exitosamente.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
 "; //imprimiendo error si se encuentra en la validación

        }
    }

     elseif ($status!=="OK") {
         $errormsg= "
<div class='alert alert-danger alert-dismissible alert-outline fade show'>
            ".$msg." <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> </div>"; //imprimiendo error si se encuentra en la validación
    }
    else{
            $errormsg= "
      <div class='alert alert-danger alert-dismissible alert-outline fade show'>
           Hay un problema técnico. Por favor, inténtelo de nuevo más tarde o pida ayuda al administrador.
           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
           </div>"; //imprimiendo error si se encuentra en la validación
        }
        }
        ?>
                    <div class="card-body p-4">
                     <div class="tab-content">
                         <div class="tab-pane active" id="personalDetails" role="tabpanel">
 <?php
 $query="SELECT * FROM static where id=1 ";

 $result = mysqli_query($con,$query);
$i=0;
while($row = mysqli_fetch_array($result))
{
    $stitle="$row[stitle]";
    $stext="$row[stext]";
}
  ?>
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
                                    <label for="firstnameInput" class="form-label"> Título</label>
                                    <input type="text" class="form-control" id="firstnameInput" name="stitle"  value="<?php print $stitle ?>">
                                </div>
                               </div>

                               <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="firstnameInput" class="form-label"> Descripción</label>
                                    <input type="text" class="form-control" id="firstnameInput" name="stext"  value="<?php print $stext ?>">
                                </div>
                               </div>

                               <!--fin col-->
                               <div class="col-lg-12">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="submit" name="save" class="btn btn-primary">Actualizar</button>

                                </div>
                               </div>
                               <!--fin col-->
                              </div>
                              <!--fin row-->
                          </form>
                         </div>
                         <!--fin tab-pane-->

                         <!--fin tab-pane-->

                         <!--fin tab-pane-->
                     </div>
                    </div>
                </div>
               </div>
               <!--fin col-->
              </div>
          </div>
          <!-- container-fluid -->
         </div>
         <!-- Fin del contenido de la página -->

         <?php include"footer.php";?>

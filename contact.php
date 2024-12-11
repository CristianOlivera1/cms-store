<?php include "header.php";?>
    <!-- ***** Área de Miga de Pan Inicio ***** -->
    <section class="section breadcrumb-area overlay-dark d-flex align-items-center">
        <div class="container">
        <div class="row">
            <div class="col-12">
            <!-- Contenido de Miga de Pan -->
            <div class="breadcrumb-content text-center">
                <h2 class="text-white text-uppercase mb-3">Contáctanos</h2>
                <ol class="breadcrumb d-flex justify-content-center">
                <li class="breadcrumb-item"><a class="text-uppercase text-white" href="index.html">Inicio</a></li>
                <li class="breadcrumb-item"><a class="text-uppercase text-white" href="#">Páginas</a></li>
                <li class="breadcrumb-item text-white active">Contacto</li>
                </ol>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- ***** Área de Miga de Pan Fin ***** -->


    <!--====== Área de Contacto Inicio ======-->
    <section id="contact" class="contact-area ptb_100">
        <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-lg-5">
            <!-- Encabezado de Sección -->
            <div class="section-heading text-center mb-3">
                <h2>Contáctanos</h2>
                <p class="d-none d-sm-block mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem magnam sint voluptas aut sit pariatur perferendis maxime ea, mollitia id architecto nostrum ut, nobis nihil, eligendi possimus vitae quo. Ullam.</p>
            </div>
            <!-- Contáctanos -->
            <div class="contact-us">
                <ul>
                <!-- Información de Contacto -->
                <li class="contact-info color-1 bg-hover active hover-bottom text-center p-5 m-3">
                    <span><i class="fas fa-mobile-alt fa-3x"></i></span>
                    <a class="d-block my-2" href="tel:<?php print $phone1 ?>">
                    <h3><?php print $phone1 ?></h3>
                    </a>

                </li>
                <!-- Información de Contacto -->
                <li class="contact-info color-3 bg-hover active hover-bottom text-center p-5 m-3">
                    <span><i class="fas fa-envelope-open-text fa-3x"></i></span>
                    <a class="d-none d-sm-block my-2" href="mailto:<?php print $email1 ?>">
                    <h3><?php print $email1 ?></h3>
                    </a>
                    <a class="d-block d-sm-none my-2" href="mailto:<?php print $email1 ?>">
                    <h3><?php print $email1 ?></h3>
                    </a>

                </li>
                </ul>
            </div>
            </div>
            <div class="col-12 col-lg-6 pt-4 pt-lg-0">
            <!-- Caja de Contacto -->
            <div class="contact-box text-center">
                <!-- Formulario de Contacto -->
                <?php
       $status = "OK"; //estado inicial
$msg="";
$errormsg="";
       if(ISSET($_POST['save'])){
$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$phone = mysqli_real_escape_string($con,$_POST['phone']);
$message = mysqli_real_escape_string($con,$_POST['message']);

 if ( strlen($name) < 5 ){
$msg=$msg."El nombre debe tener más de 5 caracteres.<BR>";
$status= "NOTOK";}
 if ( strlen($email) < 9 ){
$msg=$msg."El correo electrónico debe tener más de 10 caracteres.<BR>";
$status= "NOTOK";}
if ( strlen($message) < 10 ){
    $msg=$msg."El mensaje debe tener más de 10 caracteres.<BR>";
    $status= "NOTOK";}

if ( strlen($phone) < 8 ){
  $msg=$msg."El teléfono debe tener más de 8 caracteres.<BR>";
  $status= "NOTOK";}

  if($status=="OK")
  {

$recipient="221181@unamba";

$formcontent="NOMBRE:$name \n CORREO: $email  \n TELÉFONO: $phone  \n MENSAJE: $message";

$mailheader = "From: noreply@vogue.com \r\n";
ini_set("SMTP", "smtp.yourserver.com");
ini_set("smtp_port", "25");
$mailheader = "From: noreply@vogue.com \r\n";
$result= mail($recipient, $subject, $formcontent);

      if($result){
          $errormsg= "
  <div class='alert alert-success alert-dismissible alert-outline fade show'>
           Consulta enviada con éxito. Nos pondremos en contacto contigo lo antes posible.
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
           Hay un problema técnico. Por favor, inténtalo de nuevo más tarde o pide ayuda al administrador.
           <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
           </div>"; //imprimiendo error si se encuentra en la validación


      }
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
                    <div class="col-12">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Nombre" required="required">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Correo" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Teléfono" required="required">
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control" name="message" placeholder="Mensaje" required="required"></textarea>
                    </div>
                    </div>
                    <div class="col-12">
                    <button type="submit" class="btn btn-bordered active btn-block mt-3" name="save"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Enviar Mensaje</button>
                    </div>
                </div>
                </form>
                <p class="form-message"></p>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!--====== Área de Contacto Fin ======-->


    <!--====== Área de Mapa Inicio ======-->
    <section class="section map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15510.640811999261!2d-72.88364635872676!3d-13.617553300000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x916d031110cca7df%3A0x76b548e9c776d989!2sUniversidad%20Nacional%20Micaela%20Bastidas%20de%20Apur%C3%ADmac!5e0!3m2!1ses-419!2spe!4v1733850660336!5m2!1ses-419!2spe" width="100" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </section>
    <!--====== Área de Mapa Fin ======-->
    <?php include "footer.php";?>

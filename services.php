 <?php include "header.php";?>
        <section class="section breadcrumb-area overlay-dark d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Breamcrumb Content -->
                        <div class="breadcrumb-content text-center">
                            <h2 class="text-white text-uppercase mb-3">Lo que ofrecemos</h2>
                            <ol class="breadcrumb d-flex justify-content-center">
                                <li class="breadcrumb-item"><a class="text-uppercase text-white" href="index.html">Inicio</a></li>

                                <li class="breadcrumb-item text-white active">Nuestros productos</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Breadcrumb Area End ***** -->

         <!-- ***** Service Area star ***** -->
         <section id="service" class="section service-area ptb_150">
            <!-- Shape Top -->
            <div class="shape shape-top">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
                    <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h1>Productos</h1>
                            <p class="d-none d-sm-block mt-4">Ofrecemos una amplia gama de productos de ropa de alta calidad, diseñados para satisfacer las necesidades y gustos de nuestros clientes.</p>
                        </div>
                    </div>
                </div>
                <div class="row">

                <?php
				   $qs="SELECT * FROM  service ORDER BY id DESC";


 $r1 = mysqli_query($con,$qs);

while($rod = mysqli_fetch_array($r1))
{
	$id="$rod[id]";
	$serviceg="$rod[service_title]";
	$service_desc="$rod[service_desc]";

print "
<div class='col-12 col-md-6 col-lg-4'>
    <!-- Single Service -->
    <div class='single-service p-4' style='border: solid 1px #788282;'>
        <h3 class='my-3'><?php echo $serviceg; ?></h3>
       <p style='word-wrap: break-word; overflow-wrap: break-word; white-space: normal;'>$service_desc</p>
        <a class='service-btn mt-3' href='servicedetail.php?id=$id''>Ver modelos</a>
    </div>
</div>

";
}
?>
                   </div>
            </div>
            <!-- Shape Bottom -->
            <div class="shape shape-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
                    <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
                </svg>
            </div>
        </section>
        <!-- ***** Service Area End ***** -->

        <!-- ***** Review Area Start ***** -->
        <section id="review" class="section review-area bg-overlay ptb_100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-7">
                        <!-- Section Heading -->

                        <div class="section-heading text-center">
                            <h2 class="text-white">Portafolios</h2>
                            <p class="text-white d-none d-sm-block mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eaque at excepturi accusamus illo, adipisci, laudantium expedita saepe ad quo nobis maiores pariatur! Sit pariatur repellendus minima reiciendis ullam molestiae?</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Client Reviews -->
                    <div class="client-reviews owl-carousel">
                        <!-- Single Review -->
                        <?php
				   $q="SELECT * FROM  testimony ORDER BY id DESC LIMIT 6";


 $r123 = mysqli_query($con,$q);

while($ro = mysqli_fetch_array($r123))
{

	$name="$ro[name]";
	$position="$ro[position]";
    $message="$ro[message]";
    $ufile="$ro[ufile]";

print "

<div class='single-review p-5'>
<!-- Review Content -->
<div class='review-content'>
    <!-- Review Text -->
    <div class='review-text'>
        <p>$message</p>
    </div>
    <!-- Quotation Icon -->

</div>
<!-- Reviewer -->
<div class='reviewer media mt-3'>
    <!-- Reviewer Thumb -->
    <div class='reviewer-thumb'>
        <img class='avatar-lg radius-100' src='dashboard/uploads/testimony/$ufile' alt='img'>
    </div>
    <!-- Reviewer Media -->
    <div class='reviewer-meta media-body align-self-center ml-4'>
        <h5 class='reviewer-name color-primary mb-2'>$name</h5>
        <h6 class='text-secondary fw-6'>$position</h6>
    </div>
</div>
</div>
";
}
?>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Área de Reseñas Fin ***** -->

            <!--====== Área de Contacto Inicio ======-->
            <section id="contact" class="contact-area ptb_100">
                <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-lg-5">
                    <!-- Encabezado de Sección -->
                    <div class="section-heading text-center mb-3">
                        <h2>Contáctanos</h2>
                        <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat nam, quia sit iste ea a voluptate. Perferendis reiciendis, ipsa fugiat culpa inventore ducimus. Sit necessitatibus amet cupiditate nihil ea suscipit.</p>
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

        $recipient="awolu_faith@live.com";

        $formcontent="NOMBRE:$name \n CORREO ELECTRÓNICO: $email  \n TELÉFONO: $phone  \n MENSAJE: $message";

        $subject = "Nueva Consulta desde el Sitio Web de Vogue";
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
                   Algún problema técnico. Por favor, inténtalo de nuevo más tarde o pide ayuda al administrador.
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
                                <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" required="required">
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
                            <button type="submit" class="btn btn-bordered active btn-block mt-3" name="save"><span class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Enviar mensaje</button>
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

            <!--====== Área de Llamado a la Acción Inicio ======-->
            <section class="section cta-area bg-overlay ptb_100">
                <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                    <!-- Encabezado de Sección -->
                    <div class="section-heading text-center m-0">
                        <h2 class="text-white">Otro más</h2>
                        <p class="text-white d-none d-sm-block mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate expedita, quos accusamus ratione unde suscipit at ut porro consectetur dolor, modi tenetur quas nam obcaecati. Architecto maiores consequatur minus eligendi.</p>
                        <a href="contact" class="btn btn-bordered-white mt-4">Contáctanos</a>
                    </div>
                    </div>
                </div>
                </div>
            </section>
            <!--====== Área de Llamado a la Acción Fin ======-->

              <?php include "footer.php"; ?>

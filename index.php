<?php include "header.php"; ?>
    <!-- ***** Área de Bienvenida Inicio ***** -->
    <section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
        <div class="container">
        <div class="row align-items-center">
            <!-- Introducción de Bienvenida Inicio -->
            <div class="col-12 col-md-7">
            <?php
    $rr=mysqli_query($con,"SELECT * FROM static");
$r = mysqli_fetch_row($rr);
$stitle = $r[1];
$stext=$r[2];
?>
            <div class="welcome-intro">
                <h1 class="text-white"><?php print $stitle?></h1>
                <p class="text-white my-4"><?php print $stext?></p>
                <!-- Botones -->
                <div class="button-group">
                <a href="services.php" class="btn btn-bordered-white">Ver productos</a>
                <a href="#" class="btn btn-bordered-white d-none d-sm-inline-block">Contáctanos</a>
                </div>
            </div>
            </div>
            <div class="col-12 col-md-5">
            <!-- Imagen de Bienvenida -->
            <div class="welcome-thumb-wrapper mt-5 mt-md-0">
                <span class="welcome-thumb-1">
                <img class="welcome-animation d-block ml-auto" src="assets/img/welcome/banner-portada-index.svg" alt="">
                </span>

            </div>
            </div>
        </div>
        </div>
        <!-- Forma Inferior -->
        <div class="shape shape-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
    c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
    c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
        </div>
    </section>
    <!-- ***** Área de Bienvenida Fin ***** -->
<?php
$result = mysqli_query($con,"SELECT count(*) FROM service");
$row = mysqli_fetch_row($result);
$numrows = $row[0];

?>
       <!-- ***** Área de Servicios Inicio ***** -->
       <section id="service" class="section service-area bg-grey ptb_150">
        <!-- Forma Superior -->
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
            <!-- Encabezado de Sección -->
            <div class="section-heading text-center">
                <h1>Categorias</h1>
                <p class="text-black-50 mt-1" style="font-style: italic;">Total (<?= $numrows ?>)</p>
                <p class="d-none d-sm-block mt-4 single-service">Explora y descubre una amplia variedad de estilos y tendencias. Desde ropa casual hasta atuendos formales, tenemos algo para cada ocasión. ¡Encuentra tu estilo perfecto con nosotros!</p>
            </div>
            </div>
        </div>
        <div class="row">
        <?php
                   $qs="SELECT * FROM  service ORDER BY id DESC LIMIT 6";
 $r1 = mysqli_query($con,$qs);

while($rod = mysqli_fetch_array($r1))
{
    $id="$rod[id]";
    $serviceg="$rod[service_title]";
    $service_desc="$rod[service_desc]";
    $img="$rod[ufile]";

print "
<div class='col-12 col-md-6 col-lg-4 res-margin mb-20px'>
<!-- Servicio Individual -->
<div class='single-service color-1 bg-hover bg-white hover-bottom text-center' style='padding:5px 15px 15px'>
    <h3 class='my-3'>$serviceg</h3>
    <p>$service_desc</p>
    <img src='dashboard/uploads/services/$img' alt='img' class='category-img'>
    <a class='service-btn mt-3' href='products.php?id=$id'>Ver modelos</a>
</div>
</div>
";
}
?>
           </div>
        </div>
        <!-- Forma Inferior -->
        <div class="shape shape-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
    c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
    c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
        </div>
    </section>
    <!-- ***** Área de Servicios Fin ***** -->

    <!-- ***** Área de Portafolio Inicio ***** -->
    <section id="portfolio" class="portfolio-area overflow-hidden ptb_100">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
            <!-- Encabezado de Sección -->
            <div class="section-heading text-center">
                <h2>Trabajos</h2>
                <p class="d-none d-sm-block mt-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat nulla sapiente commodi in recusandae dolorum provident beatae ipsum id laborum dolore, asperiores consequuntur veniam molestiae repellat expedita doloribus quas dignissimos.</p>
            </div>
            </div>
        </div>
 <!-- Elementos del Portafolio -->
        <div class="row items portfolio-items">

        <?php
                   $q="SELECT * FROM  portfolio ORDER BY id DESC LIMIT 6";


 $r123 = mysqli_query($con,$q);

while($ro = mysqli_fetch_array($r123))
{

    $id="$ro[id]";
    $port_title="$ro[port_title]";
    $port_desc="$ro[port_desc]";
    $ufile="$ro[ufile]";

print "
<div class='col-12 col-sm-6 col-lg-4 portfolio-item' data-groups='['marketing','development']'>
<!-- Estudios de Caso Individuales -->
<div class='single-case-studies'>
    <!-- Imagen de Estudios de Caso -->
    <a href='portdetail.php?id=$id'>
    <img src='dashboard/uploads/portfolio/$ufile' alt=''>
    </a>
    <!-- Superposición de Estudios de Caso -->
    <a href='portdetail.php?id=$id' class='case-studies-overlay'>
    <!-- Texto de Superposición -->
    <span class='overlay-text text-center p-3'>
        <h3 class='text-white mb-3'>$port_title</h3>
        <p class='text-white'>$port_desc.</p>
    </span>
    </a>
</div>
</div>
";
}
?>

        </div>
        <div class="row justify-content-center">
            <a href="portfolio" class="btn btn-bordered mt-4">Ver Más</a>
        </div>
        </div>
    </section>
    <!-- ***** Área de Portafolio Fin ***** -->

    <!-- ***** Área de Plan de Precios Inicio ***** -->

    <!-- ***** Área de Plan de Precios Fin ***** -->

    <!-- ***** Área de Reseñas Inicio ***** -->
    <section id="review" class="section review-area bg-overlay ptb_100">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7">
            <!-- Encabezado de Sección -->


            <div class="section-heading text-center">
                <h2 class="text-white">Portafolio</h2>
                <p class="text-white d-none d-sm-block mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex error vel laborum optio nulla provident atque iure beatae et dolore! Nostrum, commodi accusamus. Dicta incidunt maiores quisquam, est nam voluptatem.</p>
            </div>
            </div>
        </div>
        <div class="row">
            <!-- Reseñas de Clientes -->
            <div class="client-reviews owl-carousel">
            <!-- Reseña Individual -->



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
<!-- Contenido de la Reseña -->
<div class='review-content'>
    <!-- Texto de la Reseña -->
    <div class='review-text'>
    <p>$message</p>
    </div>
    <!-- Icono de Cita -->

</div>
<!-- Reseñador -->
<div class='reviewer media mt-3'>
    <!-- Imagen del Reseñador -->
    <div class='reviewer-thumb'>
    <img class='avatar-lg radius-100' src='dashboard/uploads/testimony/$ufile' alt='img'>
    </div>
    <!-- Media del Reseñador -->
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

        <!-- ***** Área de Contacto Inicio ***** -->
        <section id="contacto" class="contact-area ptb_100">
            <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-lg-5">
                <!-- Encabezado de Sección -->
                <div class="section-heading text-center mb-3">
                    <h2>Contáctanos</h2>
                    <p class="d-none d-sm-block mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, assumenda alias deserunt voluptas laudantium beatae corrupti magni aspernatur, pariatur aliquid delectus ducimus placeat odit dolorum quaerat unde impedit omnis iste.</p>
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
                    $msg = "";
                    if (isset($_POST['save'])) {
                        $name = mysqli_real_escape_string($con, $_POST['name']);
                        $email = mysqli_real_escape_string($con, $_POST['email']);
                        $phone = mysqli_real_escape_string($con, $_POST['phone']);
                        $message = mysqli_real_escape_string($con, $_POST['message']);

                        if (strlen($name) < 5) {
                        $msg .= "El nombre debe tener más de 5 caracteres.<br>";
                        $status = "NOTOK";
                        }
                        if (strlen($email) < 9) {
                        $msg .= "El correo electrónico debe tener más de 10 caracteres.<br>";
                        $status = "NOTOK";
                        }
                        if (strlen($message) < 10) {
                        $msg .= "El mensaje debe tener más de 10 caracteres.<br>";
                        $status = "NOTOK";
                        }
                        if (strlen($phone) < 8) {
                        $msg .= "El teléfono debe tener más de 8 caracteres.<br>";
                        $status = "NOTOK";
                        }

                        if ($status == "OK") {
                        $recipient = "awolu_faith@live.com";
                        $formcontent = "NOMBRE: $name \n CORREO: $email \n TELÉFONO: $phone \n MENSAJE: $message";
                        $subject = "Nueva Consulta desde el Sitio Web Vogue";
                        $mailheader = "From: noreply@vogue.com \r\n";
                        $result = mail($recipient, $subject, $formcontent);

                        if ($result) {
                            $errormsg = "
                            <div class='alert alert-success alert-dismissible alert-outline fade show'>
                                Consulta enviada con éxito. Nos pondremos en contacto contigo lo antes posible.
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                        }
                        } elseif ($status !== "OK") {
                        $errormsg = "
                            <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                            $msg <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                        } else {
                        $errormsg = "
                            <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                            Ocurrió un problema técnico. Por favor, inténtalo de nuevo más tarde o contacta al administrador para obtener ayuda.
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>";
                        }
                    }
                    ?>
                    <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
        <!-- ***** Área de Contacto Fin ***** -->

        <!-- ***** Área de Llamada a la Acción Inicio ***** -->
        <section class="section cta-area bg-overlay ptb_100">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                <!-- Encabezado de Sección -->
                <div class="section-heading text-center m-0">
                    <h2 class="text-white">Otro más</h2>
                    <p class="text-white d-none d-sm-block mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores laboriosam delectus facilis expedita suscipit quis et, nobis harum quam corporis ratione totam optio numquam accusamus dicta cupiditate? Consequatur, labore soluta?</p>
                    <a href="contact" class="btn btn-bordered-white mt-4">Contáctanos</a>
                </div>
                </div>
            </div>
            </div>
        </section>
        <!-- ***** Área de Llamada a la Acción Fin ***** -->

        <?php include "footer.php"; ?>

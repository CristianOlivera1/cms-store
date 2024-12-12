<?php
include_once("../z_db.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username'])) {
  $status = "OK"; //estado inicial
  $msg = "";
  $username = mysqli_real_escape_string($con, $_POST['username']); //obteniendo detalles a través del método post
  $password = mysqli_real_escape_string($con, $_POST['password']);


  if ($status == "OK") {

    // Recuperar nombre de usuario y contraseña de la base de datos según la entrada del usuario, evitando la inyección SQL
    $query = "SELECT * FROM admin WHERE (username = '". mysqli_real_escape_string($con, $_POST['username']) . "') AND (password = '" . mysqli_real_escape_string($con, $_POST['password']) . "')";


    if ($stmt = mysqli_prepare($con, $query)) {

      /* ejecutar consulta */
      mysqli_stmt_execute($stmt);

      /* almacenar resultado */
      mysqli_stmt_store_result($stmt);

      $num = mysqli_stmt_num_rows($stmt);

      /* cerrar declaración */
      mysqli_stmt_close($stmt);

    //mysqli_close($con);
    // Verificar coincidencia de nombre de usuario y contraseña

   if ($num == 1){

session_start();
        // Establecer variable de sesión de nombre de usuario
        $_SESSION['username'] = $username;

       $username = $_SESSION['username'];
       print "
       <script language='javascript'>
         window.location = 'index.php';
       </script>";

}

else{
$errormsg= "
<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                 El nombre de usuario y/o la contraseña no coinciden.
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Cerrar'></button>
                    </div>"; //imprimiendo error si se encuentra en la validación

}}}


else {

$errormsg= "
<div class='alert alert-danger alert-dismissible alert-outline fade show'>
                ".$msg."
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Cerrar'></button>
                    </div>"; //imprimiendo error si se encuentra en la validación
}
}

?>

<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
  data-sidebar-image="none">


<!-- Reflejado desde themesbrand.com/velzon/html/default/auth-signin-cover.html por HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jun 2022 20:40:59 GMT -->

<head>

  <meta charset="utf-8" />
  <title>Iniciar Sesión | Diamond</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Administración y Panel de Control Multipropósito" name="description" />
  <meta content="EAPIIS" name="author" />
  <!-- Favicon de la aplicación -->
  <link rel="shortcut icon" href="../assets/img/favicon/favicon.ico">

  <!-- Configuración de diseño Js -->
  <script src="assets/js/layout.js"></script>
  <!-- Bootstrap Css -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <!-- Icons Css -->
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

  <!-- contenedor de la página de autenticación -->
  <div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-overlay"></div>
    <!-- contenido de la página de autenticación -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card overflow-hidden">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="p-lg-5 p-4 auth-one-bg h-100">
                    <div class="bg-overlay"></div>
                    <div class="position-relative h-100 d-flex flex-column">
                      <div class="mb-4">
                        <a href="#" class="d-block">
                            <h3 class="text-white fw-bold">MEN'S STYLE</h3>
                        </a>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- fin col -->

                <div class="col-lg-6">
                  <div class="p-lg-5 p-4">
                    <div>
                      <h5 class="text-primary">¡Bienvenido de nuevo!</h5>
                        <p class="text-muted">Inicia sesión para continuar en tu panel de control.</p>
                    </div>

                    <div class="mt-4">
                    <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST' && ($errormsg!=""))
            {
            print $errormsg;
            }
            ?>
                                    <form class="user" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "utf-8"); ?>" method="post">
                        <div class="mb-4">
                          <label for="username" class="form-label">Nombre de usuario</label>
                          <input type="text" class="form-control" id="username" name="username" placeholder="Introduce tu nombre de usuario">
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="password-input">Contraseña</label>
                          <div class="position-relative auth-pass-inputgroup mb-3">
                            <input type="password" class="form-control pe-5" name="password" placeholder="Introduce tu contraseña"
                              id="password-input">

                          </div>
                        </div>
                               <div class="mt-5">
                                    <button class="w-100" type="submit" name="login" style="font-size: 14px; background: linear-gradient(90deg, #393df79a, rgb(18, 63, 250), rgb(20, 20, 169)); margin-top: 30px; width: 100%; padding: 10px 0; border-radius: 10px; color: white; border: none; transition: background-color 0.3s;">Iniciar Sesión</button>
                                </div>
                      </form>
                    </div>


                  </div>
                </div>
                <!-- fin col -->
              </div>
              <!-- fin fila -->
            </div>
            <!-- fin tarjeta -->
          </div>
          <!-- fin col -->
        </div>
        <!-- fin fila -->
      </div>
      <!-- fin contenedor -->
    </div>
    <!-- fin contenido de la página de autenticación -->

    <!-- pie de página -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
           <p class="mb-0">&copy;
              <script>document.write(new Date().getFullYear())</script> Unamba. <i class="mdi mdi-heart text-danger"></i> Ing. Informática y sistemas
          </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- fin pie de página -->
  </div>
  <!-- fin contenedor de la página de autenticación -->
</body>
</html>

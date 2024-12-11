<?php include "z_db.php";?>

    <!--====== Área de Pie de Página Comienza ======-->
    <footer class="section footer-area">
                        <!-- Parte Superior del Pie de Página -->
                        <div class="footer-top ptb_100">
                                <div class="container">
                                        <div class="row">
                                                <div class="col-12 col-sm-6 col-lg-4">
                                                        <!-- Elementos del Pie de Página -->
                                                        <div class="footer-items">
                                                                <!-- Título del Pie de Página -->
                                                        <h3 class="footer-title text-uppercase mb-2">Sobre Nosotros</h3>
                                                                <p class="mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi ipsam atque architecto nulla minima a optio iusto rerum nesciunt odit assumenda, libero sint sit id odio! Ipsam quos repellat reprehenderit!</p>
                                                        </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-lg-4">
                                                        <!-- Elementos del Pie de Página -->
                                                        <div class="footer-items">
                                                                <!-- Título del Pie de Página -->
                                                                <h3 class="footer-title text-uppercase mb-2">Productos</h3>
                                                                <ul>

 <?php
     $q="SELECT * FROM  service ORDER BY id DESC LIMIT 5";
 $r123 = mysqli_query($con,$q);

while($ro = mysqli_fetch_array($r123))
{

    $id="$ro[id]";
    $service_title="$ro[service_title]";

print "
<li class='py-2'><a class='text-black-50' href='servicedetail.php?id=$id'>$service_title</a></li>
";
}
?>
                                                                </ul>
                                                        </div>
                                                </div>

                                                <div class="col-12 col-sm-6 col-lg-4">
                                                        <!-- Elementos del Pie de Página -->
                                                        <div class="footer-items">
                                                                <!-- Título del Pie de Página -->
                                                                <h3 class="footer-title text-uppercase mb-2">Síguenos</h3>
                                                                <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium eius non corporis recusandae ratione, ullam quidem ex hic nobis laudantium, quisquam quas! Unde, quia sint. Fuga corporis fugiat nihil quasi.</p>
                                                                <!-- Iconos Sociales -->
                                                                <ul class="social-icons list-inline pt-2">
                                                                                <li class="list-inline-item px-1"><a href="https://www.facebook.com/usuario"><i class="fab fa-facebook-f"></i></a></li>
                                                                                <li class="list-inline-item px-1"><a href="https://www.instagram.com/usuario"><i class="fab fa-instagram"></i></a></li>
                                                                </ul>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <!-- Parte Inferior del Pie de Página -->
                        <div class="footer-bottom bg-grey">
                                <div class="container">
                                        <div class="row">
                                                <div class="col-12">
                                                        <!-- Área de Derechos de Autor -->
                                                        <div class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                                                                <!-- Derechos de Autor Izquierda -->
                                                                <div class="copyright-left">Unamba</div>
                                                                <!-- Derechos de Autor Derecha -->
                                                                <div class="copyright-right">Ing. Informática y sistemas</div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </footer>
                <!--====== Área de Pie de Página Termina ======-->

                <!--====== Área de Búsqueda Modal Comienza ======-->

                <!--====== Área de Búsqueda Modal Termina ======-->

                <!--====== Área de Menú Responsivo Modal Comienza ======-->
                <div id="menu" class="modal fade p-0">
                        <div class="modal-dialog dialog-animated">
                                <div class="modal-content h-100">
                                        <div class="modal-header" data-dismiss="modal">
                                                Menú <i class="far fa-times-circle icon-close"></i>
                                        </div>
                                        <div class="menu modal-body">
                                                <div class="row w-100">
                                                        <div class="items p-0 col-12 text-center"></div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                <!--====== Área de Menú Responsivo Modal Termina ======-->

        </div>

        <!-- ***** Todos los Plugins de jQuery ***** -->
        <!-- jQuery(necesario para todos los plugins de JavaScript) -->
        <script src="assets/js/jquery/jquery-3.5.1.min.js"></script>
        <!-- Bootstrap js -->
        <script src="assets/js/bootstrap/popper.min.js"></script>
        <script src="assets/js/bootstrap/bootstrap.min.js"></script>

        <!-- Plugins js -->
        <script src="assets/js/plugins/plugins.min.js"></script>

        <!-- Activo js -->
        <script src="assets/js/active.js"></script>
</body>
</html>

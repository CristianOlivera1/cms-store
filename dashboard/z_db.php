<?php
$con = new mysqli("localhost", "root", "", "storecms");
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//La URL de tu sitio web va aquí
$url="http://localhost/vogue";

//Establecer el bono de activación del blog aquí (Debe ser solo un número)
$blog_bonus ="10";
//Establecer el bono de activación del artículo aquí (Debe ser solo un número)
$art_bonus="10";
//Establecer el bono de inicio de sesión diario aquí (Debe ser solo un número)
$login_bonus="10";
//Establecer el símbolo de moneda para el bono de inicio de sesión diario aquí
$money="$";
?>

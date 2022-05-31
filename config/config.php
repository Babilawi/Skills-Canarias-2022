<?php
$server = "localhost";
$user= "root";
$pass= "";
$bd= "skills";

$connect = mysqli_connect($server, $user, $pass, $bd);
if (!$connect) {
    die("Conexión fallida: " . mysqli_connect_error());
}

mysqli_set_charset($connect, "utf8");
?>
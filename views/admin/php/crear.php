<?php 

session_start();
if (($_SESSION['admin']) != 'admin') {
    header("Location: ../../../");
}

include_once '../../../config/config.php';


$nombre = $_POST['nombre'];
$cantidad = $_POST['cantidad'];



$sql = "INSERT INTO crud (nombre,cantidad) VALUES ('$nombre', '$cantidad')";
$result = mysqli_query($connect, $sql);

?>
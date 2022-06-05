<?php 

session_start();
if (($_SESSION['admin']) != 'admin') {
    header("Location: ../../../");
}

include_once '../../../config/config.php';
$tabla = $_POST['tabla'];
$id = $_POST['id'];
$id = substr($id, 1);


$sql = "DELETE FROM $tabla WHERE id='$id'";
$result = mysqli_query($connect, $sql);










?>
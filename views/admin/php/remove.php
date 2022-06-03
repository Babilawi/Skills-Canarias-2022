<?php 

include_once '../../../config/config.php';

$id = $_POST['id'];


$sql = "DELETE FROM usuarios WHERE id='$id'";
$result = mysqli_query($connect, $sql);










?>
<?php 

include_once '../../../config/config.php';
$tabla = $_POST['tabla'];


$id = $_POST['id'];
# quitar primera letra a id
$id = substr($id, 1);
$mail = $_POST['mail'];
$user = $_POST['user'];

if ($tabla=="usuarios") {
    $phone = $_POST['phone'];
    $country = $_POST['country'];
}






if ($tabla=="usuarios") {
  $sql = "UPDATE usuarios SET user='$user', mail='$mail', phone='$phone', country='$country' WHERE id='$id'";
  $result = mysqli_query($connect, $sql);
}else{
    $sql = "UPDATE crud SET nombre='$user', cantidad='$mail' WHERE id='$id'";
    $result = mysqli_query($connect, $sql);
}


$sql = "UPDATE $tabla SET user='$user', mail='$mail', phone='$phone', country='$country' WHERE id='$id'";
$result = mysqli_query($connect, $sql);










?>
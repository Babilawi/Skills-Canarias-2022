<?php 

session_start();
if (($_SESSION['admin']) != 'admin') {
    header("Location: ../../../");
}

// desactivar notificaciones de error
error_reporting(0);


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
    if (mysqli_query($connect, $sql)){
      echo "1";
    } else {
        echo "0";}
}else{
    $sql = "UPDATE crud SET nombre='$user', cantidad='$mail' WHERE id='$id'";
    if (mysqli_query($connect, $sql)) {
        echo "1";
    } else {
        echo "0";
    }
}












?>
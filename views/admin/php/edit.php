<?php 

include_once '../../../config/config.php';


$user = $_POST['user'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$id = $_POST['id'];


$sql = "UPDATE usuarios SET user='$user', mail='$mail', phone='$phone', country='$country' WHERE id='$id'";
$result = mysqli_query($connect, $sql);










?>
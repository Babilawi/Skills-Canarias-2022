<?php

session_start();
if (($_SESSION['admin']) != 'admin') {
    header("Location: ../../../");
}



if ($_FILES['imagen']['type'] == "image/gif" || $_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png"){
    $rutaenservidor='../../../';
    unlink($rutaenservidor . 'favicon.ico');
    $rutatemporal=$_FILES['imagen']['tmp_name'];
    $nombreimagen=$_FILES['imagen']['name'];
    $rutadestino=$rutaenservidor.'/'.$nombreimagen;
    move_uploaded_file($rutatemporal,$rutadestino);
    //renombrar imagen por favicon.ico
    rename($rutadestino, $rutaenservidor . 'favicon.ico');
}



?>
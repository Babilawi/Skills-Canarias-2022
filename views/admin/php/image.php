<?php





echo $_FILES['img']['type'];


if ($_FILES['img']['type'] == "image/jpg" || $_FILES['img']['type'] == "image/png" || $_FILES['img']['type'] == "image/jpeg"){
$ruta = "../../../img/";
move_uploaded_file($_FILES['img']['tmp_name'], $ruta . $_FILES['img']['name']);
rename($ruta . $_FILES['img']['name'], $ruta . "bg-masthead.jpg");
$ruta = "../../../img/bg-masthead.jpg";

if ($_FILES['img']['type'] == "image/png"){
    $imagen = imagecreatefrompng($ruta);
    imagejpeg($imagen, $ruta . "bg-masthead.jpg", 70);
}else{
$imagen = imagecreatefromjpeg($ruta);
imagejpeg($imagen, $ruta, 70);
}




}else{
    $ruta = "../../../";   
    move_uploaded_file($_FILES['img']['tmp_name'], $ruta . $_FILES['img']['name']);
    # renombrar imagen
    rename($ruta . $_FILES['img']['name'], $ruta . "favicon.ico");

}




header("Location: ../");



















?>
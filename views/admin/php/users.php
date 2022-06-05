<?php 

session_start();
if (($_SESSION['admin']) != 'admin') {
    header("Location: ../../../");
}

include_once '../../../config/config.php';

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($connect, $sql);
$cont=1;
while ($row = mysqli_fetch_array($result)) {

  $id = "u".$row['id']."";

    if ($cont%2==0) {
        $tipo="even";
    }
    else{
        $tipo="odd";
    }

    echo '
    <tr id="'.$id.'" class="'.$tipo.'">
      <td class="pt-3" ><p class="p-0 m-0">'.$row['user'].'</p></td>
      <td class="pt-3"><p class="p-0 m-0">'.$row['mail'].'</p></td>
      <td class="pt-3"><p class="p-0 m-0">'.$row['phone'].'</p></td>
      <td class="pt-3"><p class="p-0 m-0">'.$row['country'].'</p></td>
      <td class="">
        <button onClick="editar(\''.$id.'\',\'usuarios\')" class="btn btn-success w-50">Editar</button>
        <button onClick="avisoBorrar(\''.$id.'\',\'usuarios\')" class="btn btn-danger w-50">Borrar</button>
      </td>
  </tr>
    ';

    $cont++;
}









?>
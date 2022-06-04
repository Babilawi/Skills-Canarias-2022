<?php 

include_once '../../../config/config.php';

$sql = "SELECT * FROM crud";
$result = mysqli_query($connect, $sql);
$cont=1;
while ($row = mysqli_fetch_array($result)) {

    $id = "c".$row['id']."";

    if ($cont%2==0) {
        $tipo="even";
    }
    else{
        $tipo="odd";
    }

    echo '
    <tr id="'.$id.'" class="'.$tipo.'">
      <td class="pt-3" ><p class="p-0 m-0">'.$row['nombre'].'</p></td>
      <td class="pt-3"><p class="p-0 m-0">'.$row['cantidad'].'</p></td>
      <td class="">
        <button onClick="editar(\''.$id.'\',\'crud\')" class="btn btn-success w-50">Editar</button>
        <button onClick="avisoBorrar(\''.$id.'\',\'crud\')" class="btn btn-danger w-50">Borrar</button>
      </td>
  </tr>
    ';

    $cont++;
}









?>
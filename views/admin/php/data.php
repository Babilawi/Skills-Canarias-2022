<?php 

include_once '../../../config/config.php';

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($connect, $sql);
$cont=1;
while ($row = mysqli_fetch_array($result)) {

    if ($cont%2==0) {
        $tipo="even";
    }
    else{
        $tipo="odd";
    }

    echo '
    <tr id="'.$row['id'].'" class="'.$tipo.'">
      <td class="" ><input class="mt-1 form-control" type="text" value="'.$row['user'].'"><div hidden>'.$row['user'].' </div></td>
      <td><input class="mt-1 form-control" type="mail" value="'.$row['mail'].'"></td>
      <td><input class="mt-1 form-control" type="number" value="'.$row['phone'].'"></td>
      <td><input class="mt-1 form-control" type="text" value="'.$row['country'].'"></td>
      <td class="">
        <button onClick="editar('.$row['id'].')" class="btn btn-success w-50">Editar</button>
        <button onClick="avisoBorrar('.$row['id'].')" class="btn btn-danger w-50">Borrar</button>
      </td>
  </tr>
    ';

    $cont++;
}









?>
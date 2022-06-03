<?php 

include_once '../../../config/config.php';

$sql = "SELECT * FROM usuarios";
$result = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($result)) {
    echo '
    <tr>
    <td hidden>'.$row['id'].'</td>
    <td>'.$row['user'].'</td>
    <td>'.$row['mail'].'</td>
    <td>'.$row['phone'].'</td>
    <td>'.$row['country'].'</td>
    <td class="">
      <button class="btn btn-success me-5">Editar</button>
      <button class="btn btn-danger">Borrar</button>
    </td>
  </tr>
    ';
}









?>
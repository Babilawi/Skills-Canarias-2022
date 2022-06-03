<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel de Administrador</title>

  <!-- CSS -->
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/nav.css">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/favicon.ico" type="image/x-icon">

</head>



<body>
  <nav>
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
      <img src="./img/logo.png" class="logo" alt="">
      <h3 class="hide">Nombre</h3>
    </div>
    <div class="sidebar-links">
      <ul style="padding-left:0 !important;">
        <div class="active-tab"></div>
        <li class="tooltip-element" data-tooltip="0">
          <a href="#" onClick="mostrarContenido('crud')" class="active" data-active="0">
            <div class="icon">
              <i class='bx bx-calendar' ></i>
              <i class='bx bxs-calendar' ></i>
            </div>
            <span class="link hide">Crud</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="#" onclick="mostrarContenido('users')" data-active="1">
            <div class="icon">
              <i class='bx bx-user' ></i>
              <i class='bx bxs-user' ></i>
            </div>
            <span class="link hide">Usuarios</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="#" onclick="mostrarContenido('config')" data-active="2">
            <div class="icon">
              <i class='bx bx-cog'></i>
              <i class='bx bxs-cog'></i>
            </div>
            <span class="link hide">Configuración</span>
          </a>
        </li>
        <div class="tooltip">
          <span class="show">Crud</span>
          <span>Usuarios</span>
          <span>Configuración</span>
        </div>
      </ul>

    
    </div>

    <div class="sidebar-footer">
      <a href="#" class="account tooltip-element" data-tooltip="0">
        <i class='bx bx-user'></i>
      </a>
      <div class="admin-user tooltip-element" data-tooltip="1">
        <div class="admin-profile hide">
          <img src="./img/face-1.png" alt="">
          <div class="admin-info">
            <h3 class="text-capitalize"><?php echo $_SESSION['user'] ?></h3>
            <h5>Admin</h5>
          </div>
        </div>
        <a href="../../index.php" class="log-out">
          <i class='bx bx-log-out'></i>
        </a>
      </div>
      <div class="tooltip">
        <span class="show text-capitalize"><?php echo $_SESSION['user'] ?></span>
        <span>Cerra Sesión</span>
      </div>
    </div>
  </nav>


  <main>


    <!-- ================================================================= -->
    <!-- ----------------------------- CRUD ------------------------------ -->
    <!-- ================================================================= -->

    <div id="crud">
      <!--
      <div class="titulo">
        <h2 class="text-center">Administración de usuarios</h2>
      </div>
      -->
      <table  id="crudTable" class="pt-2 display nowrap table table-striped w-100">
        <thead class="purpleHeader">
          <tr class="text-center">
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th class="w-25">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Juan</td>
            <td>Perez</td>
            <td>Perez</td>
            <td>Perez</td>
            <td  class="">
              <button class="btn btn-success me-5">Editar</button>
              <button class="btn btn-danger">Borrar</button>
            </td>
          </tr>
          <tr>
            <td>luan</td>
            <td>luan</td>
            <td>luan</td>
            <td>luan</td>
            <td class="">
              <button class="btn btn-success me-5">Editar</button>
              <button class="btn btn-danger">Borrar</button>
            </td>
          </tr>

      </table>
    </div>

    <!-- ================================================================= -->
    <!-- --------------------------- Usuarios ---------------------------- -->
    <!-- ================================================================= -->

    <div id="users" style="display: none;">
      <table  id="userTable" class="display pt-2 nowrap table table-striped w-100">
        <thead class="purpleHeader">
          <tr class="text-center">
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Pais</th>
            <th class="w-25"></th>
          </tr>
        </thead>
        <tbody id="usuariosAjax">


      </table>
    </div>


    <!-- ================================================================= -->
    <!-- ---------------------------- Config ----------------------------- -->
    <!-- ================================================================= -->

    <div id="config" style="display: none;">
      holas
    </div>

    <!-- ================================================================= -->
    <!-- ------------------------------ Edit ----------------------------- -->
    <!-- ================================================================= -->


    <div id="edit" style="display: none;">
      <input type="text" name="" id="">
      <input type="mail" name="" id="">
      <input type="number" name="" id="">
      <input type="text" name="" id="">
    </div>
  </main>

  <script src="/Skills-Canarias-2022/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="js/JQuery.Datatables.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
  <script src="js/nav.js"></script>




  <script>
    $(document).ready(function () {
    $('#crudTable').DataTable();
    scrollX: true
  });
  </script>

<script>
  $(document).ready(function () {
  $('#userTable').DataTable();
  scrollX: true
});
</script>

<style>
  input:hover{
    border: 1px solid #ccc;
  }
</style>

</body>

</html>
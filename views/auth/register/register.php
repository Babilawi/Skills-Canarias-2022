



<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/register.css">
  <link rel="shortcut icon" href="/Skills-Canarias-2022/favicon.ico" type="image/x-icon">

</head>

<body class="d-flex vh-100">
  <div class=" animation container shadow redondeado-start align-self-sm-center">
    <div class="redondeado-start row">

      <div class="d-none d-lg-block col-5 p-0 h-100 ">
        <div class="fondoLogin position-relative">
            <a href="../../../index.php" class="position-absolute m-4 text-white d-flex align-items-cente"><i class='bx bx-left-arrow-alt pt-1' style='color:#ffffff'  ></i>Volver</a>
        </div>
      </div>

      <div class="col-12 col-lg-7 py-1 bg-light redondeado-end  position-relative d-flex align-items-center">

        <div>
          <form method="post" id="registro">
            <h2 class=" text-center mx-5 pt-0 fw-light title">Registro de nuevo usuario</h3>

              <h4 class="text-center fs-5 fw-light">Rellena tus datos</h4>
              <div class="row mx-5 ">
                <div class="col-12 col-md-6 px-0">
                  <div class="user form-floating mb-3 me-md-3 mt-4">
                    <input required type="text" class="form-control formulario" id="user" name="user"
                      placeholder="nombre de usuario" value="">
                    <label for="user">Nombre de Usuario *</label>

                  </div>
                </div>

                <div class="col-12  col-md-6 px-0">
                  <div class="email form-floating mb-3 ms-md-3 mt-4">

                    <input required type="email" class="form-control formulario" id="mail" name="mail"
                      placeholder="Correo electronico" value="">
                    <label for="mail">Correo Electrónico *</label>

                  </div>
                </div>

                <div class="col-12 col-md-6 px-0">
                  <div class="pass form-floating mb-3 me-md-3 mt-4">
                    <input required type="password" class="form-control formulario" id="pass1" name="pass1"
                      placeholder="contraseña" value="">
                    <label for="pass1">Contraseña *</label>
                  </div>
                </div>

                <div class="col-12 col-md-6 px-0">
                  <div class="passconfirm form-floating mb-3 ms-md-3 mt-4">

                    <input required type="password" class="form-control formulario" id="pass2" name="pass2"
                      placeholder="repetir contraseña" value="">
                    <label for="pass2">Repetir Contraseña *</label>

                  </div>
                </div>

                <div class=" col-6 col-md-4 px-0">
                  <div class="pass form-floating mb-3 me-3 mt-4">

                    <input type="text" class="form-control formulario" id="country" name="country" placeholder="pais" value="">
                    <label for="country">País</label>

                  </div>
                </div>

                <div class=" col-6 col-md-4 px-0">
                  <div class="pass form-floating mb-3 ms-3 me-md-3  mt-4">

                    <input type="text" class="form-control formulario" id="city" name="city" placeholder="ciudad" value="">
                    <label for="city">Ciudad</label>

                  </div>
                </div>

                <div class=" col-6 col-md-4  px-0">
                  <div class="pass form-floating mb-3 ms-md-3 mt-4">

                    <input type="number" class="form-control formulario" id="phone" name="phone" placeholder="telefono" value="">
                    <label for="phone">Teléfono Movil</label>


                  </div>
                </div>
              </div>

              <div class="ms-5 mt-3">
                <label>Género:</label>
              </div>

              <div class=" mx-5  pt-2 text-center">
                <label class="custom-control custom-radio px-2">
                  <input type="radio" name="gender" id="male" value="Hombre" class="custom-control-input">
                  <span class="custom-control-indicator">Hombre</span>
                </label>
                <label class="custom-control custom-radio  px-2">
                  <input type="radio" name="gender" id="female" value="Mujer" class="custom-control-input">
                  <span class="custom-control-indicator">Mujer</span>

                </label>
                <label class="custom-control custom-radio  px-2">
                  <input type="radio" name="gender" id="other" value="Otro" class="custom-control-input">
                  <span class="custom-control-indicator">Otro</span>

                </label>
                <label class="custom-control custom-radio  px-2">
                  <input type="radio" name="gender" id="nr" value="No responde" class="custom-control-input" checked>
                  <span class="custom-control-indicator">Prefiero no responder</span>
                  <span class="custom-control-description"></span>
                </label>

              </div>

          </form>

          <div class="form-check ms-5 mt-4 ">

            <input required type="checkbox" onclick="disabledRegister()" class=" form-check-input checkbox-register"
              name="" id="registerCheck" value="">
            <p class="form-check-label " for="">
              Acepto los <a href="">terminos y condiciones.</a>
            </p>
          </div>



          <div class="text-center mb-1 px-5 mt-4">
            <input disabled class="loginButon disabled" onclick="validation()" type="submit" id="registerButton" value="Regístrate" />
            <p class="pt-2 pb-0 mb-0">¿Tienes cuenta? <a href="../login/login.php">Inicia sesión</a></p>
          </div>

        </div>


      </div>
    </div>
  </div>



  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
  </script>
  <script src="../../../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="js/register.js"></script>
  <script src="js/validations.js"></script>





<?php

$error=0;

if (isset($_POST['user'])){
  include_once '../../../config/config.php';

# ===========================================
# ---------------- Variables ----------------
# ===========================================

function limpiar($input) {
 
  $search = array(
    '@<script[^>]*?>.*?</script>@si',   // Elimina javascript
    '@<[\/\!]*?[^<>]*?>@si',            // Elimina las etiquetas HTML
    '@<style[^>]*?>.*?</style>@siU',    // Elimina las etiquetas de estilo
    '@<![\s\S]*?--[ \t\n\r]*>@'         // Elimina los comentarios multi-línea
  );
 
    $output = preg_replace($search, '', $input);
    return $output;
  }

$user = limpiar($_POST['user']);
$pass = limpiar($_POST['pass1']);
$pass2 = limpiar($_POST['pass2']);
$mail = limpiar($_POST['mail']);
$city = limpiar($_POST['city']);
$country = limpiar($_POST['country']);
$phone = limpiar($_POST['phone']);


if ($pass != $pass2){
  $error++;
}

if (strlen($user) <= 5 || strlen($user) >= 20){
  $error++;
}

if (strlen($pass) < 6){
  $error++;
}


if ($error != 0){
  echo '<script>
  swal.fire({
    title: "Error",
    text: "Algunos campos no son correctos",
    icon: "error",
    confirmButtonText: "Aceptar"
  });
  </script>';
}else{















# ==================================================
# ---------------- Exist validation ----------------
# ==================================================
    $userCount= 0;
    $mailCount=0;

    $sql = "SELECT * FROM usuarios WHERE user = '$user'";
    $sql2 = "SELECT * FROM usuarios WHERE mail = '$mail'";
    $result = mysqli_query($connect, $sql);

    $result2 = mysqli_query($connect, $sql2);
    while ($row = mysqli_fetch_array($result)) {
      $userCount++;
    }
    while ($row2 = mysqli_fetch_array($result2)) {
      $mailCount++;
    }
    if ($userCount > 0) {
        echo "<script>const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 0,
          timerProgressBar: true,
          didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
      })
      
      Toast.fire({
          icon: 'error',
          title: 'El usuario ya existe'
  
      })</script>";
    }
    else if ($mailCount > 0) {
        echo "<script>const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 0,
          timerProgressBar: true,
          didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
          }
      })
      
      Toast.fire({
          icon: 'error',
          title: 'El correo ya existe'
  
      })</script>";
    }





# ========================================
# ---------------- Insert ----------------
# ========================================

    else{
        $pass_secure=password_hash($pass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (user, pass, mail, city, country, phone) VALUES ('$user', '$pass_secure', '$mail', '$city', '$country', '$phone')";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            echo "Usuario registrado correctamente";
        } else {
            echo "<script>const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 0,
                timerProgressBar: true,
                didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            
            Toast.fire({
                icon: 'error',
                title: 'Error al registrar el usuario, intentelo mas tarde'
        
            })</script>";
        }
    }
}
}
?>

</body>

</html>
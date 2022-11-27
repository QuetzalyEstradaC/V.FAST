<?php
error_reporting(0);

include 'include/conecta.php';
//consulta para genero (datos)
$genero = "SELECT * FROM genero";
$guardar = $conecta->query($genero);

$tusuario = "SELECT * FROM tusuario";
$guardarlo = $conecta->query($tusuario);

//validar que exista un boton
if(isset($_POST['registrar'])){
  $mensaje="";
  $nombre = $conecta->real_escape_string($_POST ['Nombre']);
  $apellido1 = $conecta->real_escape_string($_POST ['ApellidoP']);
  $apellido2 = $conecta->real_escape_string($_POST ['ApellidoM']);  
  $genero = $conecta->real_escape_string($_POST ['genero']);
  $tusuario = $conecta->real_escape_string($_POST ['tusuario']);
  $email = $conecta->real_escape_string($_POST ['email']);
  $nick = $conecta->real_escape_string($_POST ['nick']);
  $password = $conecta->real_escape_string($_POST ['password']);


//consultar para la inserccion
$insertar = "INSERT INTO usuarios (Nombre, ApellidoP, ApellidoM, Id_Genero, Email, Id_Tusuario, Nick, Password) VALUES('$nombre', '$apellido1', '$apellido2', '$genero', '$email', '$tusuario', '$nick', '$password')";

$guardando = $conecta->query($insertar);
if ($guardando > 0) {
    $mensaje.="<h3 class='text-success'>Tu registro se realizo correctamente</h3>";
}
else {
    $mensaje.="<h3 class='text-danger'>Tu registro se realizo incorrectamente</h3>";
}
}
?>
<!--FIN DEL PHP-->
<!--HTML FORM-->
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    
</head>
<body>
<div class="container">
        <div class="container-profile">
            <span class="logo">
                <img src="img/logovfast.png" alt="vfast">
            </span>
</div>
<div class="row d-flex justify-content-center">
<!--FORMULARIO-->
<div class="container-form">
<form class="form" action="" method="POST">
    <h3 class="text-center">REGISTRO | V.FAST </h3>
    <input type="text" name="nick" placeholder="Nombre de Usuario" class="cuadros" required>
    <input type="text" name="Nombre" placeholder="Nombre(s)" class="cuadros" required>
    <input type="text" name="ApellidoP" placeholder="Apellido Paterno" class="cuadros" required>
    <input type="text" name="ApellidoM" placeholder="Apellido Materno" class="cuadros" required>
    <select class="cuadros" name="genero" placeholder="genero" >
        <option value="">Selecciona tu genero</option>
         <?php while($row = $guardar->fetch_assoc()){?>
          <option value="<?php echo $row['Id_Genero']; ?>"<?php echo $row['NomGenero']; ?>></option>
         <?php } ?>   

    </select>

    <select class="cuadros" name="tusuario" >
        <option value="">Selecciona el Tipo de Usuario</option>
         <?php while($row = $guardarlo->fetch_assoc()){?>
          <option value="<?php echo $row['Id_Tusuario']; ?>"<?php echo $row['NombreTusu']; ?>></option>
         <?php } ?>   

    </select>
    <input type="email" name="email" placeholder="Email" class="cuadros" required>
    <input type="password" name="password" placeholder="Contraseña" class="cuadros" required>

<input type="submit" name="registrar" value="REGISTRARSE" class="btn btn-sm btn-block cuadros" >
<!--INICIAR SESION-->
                    <div class="my-3">
                        <span>¿No tienes cuenta? <a href="#">Inicia sesión aquí</a></span> <br>
                        <span><a href="recu.html">¿Olvidaste tu contraseña?</a></span>
                    </div>
                    
</form>
         </div>
         </div>
         </div>
<?php echo $mensaje; ?>
<script src="js/bootstrap.min.js"></script>   
</body>
</html>

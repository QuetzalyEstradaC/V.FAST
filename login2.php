<?php
//llamar a la conexion de bd
error_reporting(0);
include 'include/conecta.php';
if(isset($_POST['entrar'])){
    $ruser = $conecta->real_escape_string($_POST ['usuario']);
    $rpass = $conecta->real_escape_string(md5($_POST ['pass']));
///generar consulta d ela BD
$consulta = "SELECT * FROM usuarios WHERE Nick = '$ruser' and Pasword = 'rpass'";
if($resultado= $conecta->query($comsulta)){
    while($row = $resultado->fetch_array()){
        $userok = $row['Nick'];
        $passwordok = $row['Pasword'];
    }
    $resultado->close();

}
$conecta->close();
if(isset($ruser) && isset($rpass)){
     if($ruser == $userok && $rpass == $passwordok) {
         $_SESSION['login'] = TRUE;
         $_SESSION['Usuario'] = $usuario;
         header("location:escritorio0.php");
     }
     else{
        $mensaje.= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                   <strong>Error, verifica los datos y vuelve a intentar</strong> DATOS ERRONEOS.
                   <button type='button' class='close' data-dismiss='alert' arial-label='Close'>
                   <span aria-hidden='true'>&times;</span>
                   </button>
                   </div>"; 
     }
}
else{
    $mensaje.= "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                   <strong>Error, verifica los datos y vuelve a intentar</strong> DATOS ERRONEOS.
                   <button type='button' class='close' data-dismiss='alert' arial-label='Close'>
                   <span aria-hidden='true'>&times;</span>
                   </button>
                   </div>"; 

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
    <title>LOGIN</title>
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
<div class="container-form">
    <form class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
       <h3 class="text-center">INICIO DE SESIÓN </h3>
    <input type="text" name="usuario" placeholder="Nombre de Usuario" class="cuadros" required>
    <input type="password" name="pass" placeholder="Contraseña" class="cuadros" required>
        <button type="submit" name="entrar" value="ENTRAR" class="">Iniciar Sesion</button>
        <div class="my-3">
        <span>Si tienes cuenta<a href="Registrarse.php" class="span">Registrate aquí</a></span> <br>
                        <span><a href="recu.html">¿Olvidaste tu contraseña?</a></span>
                    </div>
    </form>
</body>
</html>

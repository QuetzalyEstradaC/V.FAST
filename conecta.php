<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "dlyp07";
$conecta = mysqli_connect($servidor, $usuario, $password, $bd);
if($conecta->connect_error){
    die("Error en la conexion con el servidor".$conecta->connect_error);
}
?>

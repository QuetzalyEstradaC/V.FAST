<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleshet" href="stylesheet.css">
    <title>Inicio Sesion</title>
</head>
<body>
    <form action="InicioSesion.php" method="POST">
        <h1>Inica Sesion</h1>
        <i class="fa-solid fa-usser"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre Usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Password</label>
        <input type="password" name="Password" placeholder="Password">
        <button type="submit">Iniciar Sesion</button>
        <a href="CrearCuenta.php"></a>
    </form>
</body>
</html>

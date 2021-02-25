<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practicando conexion 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</head>
<body>
<center>
<h1>Practicando conexion 6</h1>
    <form action="index.php" method="post">
    <div class="col-md-4">
    <label for="id" class="form-label">Doc:</label>
        <input type="text" class="form-control" name="id" id="id"><br>
    <label for="nombre" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="nombre"><br>
    <label for="apellido" class="form-label">Apellido:</label>
        <input type="text" class="form-control" name="apellido" id="apellido"><br>
    <label for="apellido2" class="form-label">Apellido 2:</label>
        <input type="text" class="form-control" name="apellido2" id="apellido2"><br>
    <label for="telefono" class="form-label">Telefono:</label>
        <input type="text" class="form-control" name="telefono" id="telefono"><br>
    <label for="usuario" class="form-label">Usuario:</label>
        <input type="text" class="form-control" name="usuario" id="usuario"><br>
    <label for="contraseña" class="form-label">Contraseña:</label>
        <input type="password" class="form-control" name="contraseña" id="contraseña"><br>
    <label for="contraseña2" class="form-label">Repita la contraseña:</label>
        <input type="password" class="form-control" name="contraseña2" id="contraseña2"><br>
    <input class="btn btn-secondary" type="submit" value="Registrar" name="btnregistrar"><br><br>
</form>
</center>

<?php 
if (isset($_POST['btnregistrar'])) {
    $_id =$_POST['id'];
    $_nombre =$_POST['nombre'];
    $_apellido1 =$_POST['apellido'];
    $_apelido2 =$_POST['apellido2'];
    $_telefono =$_POST['telefono'];
    $_usuario =$_POST['usuario'];
    $_contraseña =$_POST['contraseña'];
    $_contraseña2 =$_POST['contraseña2'];

    if ($_contraseña === $_contraseña2) {
        include("./clases/conexion-open.php");

        $conexion->query("INSERT INTO $table1(user, pass) VALUES('$_usuario','$_contraseña')");
        $conexion->query("INSERT INTO $table2(id, nombre, apellido, apellido2, telefono, user) VALUES
        ('$_id','$_nombre','$_apellido1','$_apelido2','$_telefono','$_usuario')");

        include("./clases/conexion-close.php");
        echo "los datos se registraron con exito";


    } else {
        echo "Las contraseñas no coinciden";
    }
    
}
?>
</body>
</html>
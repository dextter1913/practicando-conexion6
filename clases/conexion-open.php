<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "clinica";
$table1 = "usuarios";
$table2 = "medico";

error_reporting(0);

$conexion = new mysqli($host, $user, $pass, $db);
if ($conexion->connect_errno) {
    echo "lo sentimos hay problemas con el sistema";
}
?>
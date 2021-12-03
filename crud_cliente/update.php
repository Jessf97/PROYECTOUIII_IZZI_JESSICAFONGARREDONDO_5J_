<?php

include("conexion.php");
$con=conectar();

$id_cliente=$_POST['id_cliente'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$correo_electronico=$_POST['correo_electronico'];
$direccion=$_POST['direccion'];
$fecha_ap=$_POST['fecha_ap'];

$sql="UPDATE cliente1 SET  nombre='$nombre',apellidos='$apellidos',telefono='$telefono',correo_electronico='$correo_electronico',direccion='$direccion',fecha_ap='$fecha_ap' WHERE id_cliente='$id_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente1.php");
    }
?>
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

$sql="INSERT INTO cliente1 VALUES('$id_cliente','$nombre','$apellidos','$telefono','$correo_electronico','$direccion','$fecha_ap')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente1.php");
    
}else {
}
?>
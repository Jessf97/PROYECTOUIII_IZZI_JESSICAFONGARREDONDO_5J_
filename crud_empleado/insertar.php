<?php
include("conexion.php");
$con=conectar();

$id_empleado=$_POST['id_empleado'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$fecha_ingreso=$_POST['fecha_ingreso'];
$direccion=$_POST['direccion'];
$No_control=$_POST['No_control'];
$telefono=$_POST['telefono'];

$sql="INSERT INTO empleado VALUES('$id_empleado','$nombre','$apellidos','$fecha_ingreso','$direccion','$No_control','$telefono')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>
<?php
include("conexion.php");
$con=conectar();

$id_transaccion=$_POST['id_empleado'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$No_tarjeta=$_POST['No_tarjeta'];
$PIN=$_POST['PIN'];
$fecha=$_POST['fecha'];
$cantidad=$_POST['cantidad'];

$sql="INSERT INTO pago_online VALUES('$id_transaccion','$nombre','$apellidos','$No_tarjeta','$PIN','$fecha','$cantidad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: pago_online.php");
    
}else {
}
?>
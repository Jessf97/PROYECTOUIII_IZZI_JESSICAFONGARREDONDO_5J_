<?php

include("conexion.php");
$con=conectar();

$id_transaccion=$_POST['id_transaccion'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$No_tarjeta=$_POST['No_tarjeta'];
$PIN=$_POST['PIN'];
$fecha=$_POST['fecha'];
$cantidad=$_POST['cantidad'];

$sql="UPDATE pago_online SET  nombre='$nombre',apellidos='$apellidos',No_tarjeta='$No_tarjeta',PIN='$PIN',fecha='$fecha',cantidad='$cantidad' WHERE id_transaccion='$id_transaccion'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pago_online.php");
    }
?>
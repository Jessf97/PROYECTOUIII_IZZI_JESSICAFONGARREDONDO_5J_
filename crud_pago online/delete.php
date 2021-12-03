<?php

include("conexion.php");
$con=conectar();

$id_transaccion=$_GET['id'];

$sql="DELETE FROM pago_online  WHERE id_transaccion='$id_transaccion'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pago_online.php");
    }
?>

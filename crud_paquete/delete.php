<?php

include("conexion.php");
$con=conectar();

$id_paquete=$_GET['id'];

$sql="DELETE FROM paquete1  WHERE id_paquete='$id_paquete'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: paquete1.php");
    }
?>

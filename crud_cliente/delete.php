<?php

include("conexion.php");
$con=conectar();

$id_cliente=$_GET['id'];

$sql="DELETE FROM cliente1  WHERE id_cliente='$id_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente1.php");
    }
?>

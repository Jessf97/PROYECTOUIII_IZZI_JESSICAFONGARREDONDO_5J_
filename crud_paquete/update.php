<?php

include("conexion.php");
$con=conectar();

$id_paquete=$_POST['id_paquete'];
$nombre_paq=$_POST['nombre_paq'];
$precio=$_POST['precio'];
$fecha_act=$_POST['fecha_act'];
$fecha_ven=$_POST['fecha_ven'];
$tipo_de_plan=$_POST['tipo_de_plan'];
$beneficios=$_POST['beneficios'];

$sql="UPDATE paquete1 SET  nombre_paq='$nombre_paq',precio='$precio',fecha_act='$fecha_act',fecha_ven='$fecha_ven',tipo_de_plan='$tipo_de_plan',beneficios='$beneficios' WHERE id_paquete='$id_paquete'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: paquete1.php");
    }
?>
<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM paquete1 WHERE id_paquete='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_paquete" value="<?php echo $row['id_paquete']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre_paq" placeholder="nombre_paq" value="<?php echo $row['nombre_paq']  ?>">
                                <input type="text" class="form-control mb-3" name="precio" placeholder="precio" value="<?php echo $row['precio']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_act" placeholder="fecha_act" value="<?php echo $row['fecha_act']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_ven" placeholder="fecha_ven" value="<?php echo $row['fecha_ven']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo_de_plan" placeholder="tipo_de_plan" value="<?php echo $row['tipo_de_plan']  ?>">
                                <input type="text" class="form-control mb-3" name="beneficios" placeholder="beneficios" value="<?php echo $row['beneficios']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM paquete1";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA PAQUETE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_paquete" placeholder="id paquete">
                                    <input type="text" class="form-control mb-3" name="nombre_paq" placeholder="nombre paquete">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="precio">
                                    <input type="text" class="form-control mb-3" name="fecha_act" placeholder="fecha activacion">
                                    <input type="text" class="form-control mb-3" name="fecha_ven" placeholder="fecha vencimiento">
                                    <input type="text" class="form-control mb-3" name="tipo_de_plan" placeholder="tipo de plan">
                                    <input type="text" class="form-control mb-3" name="beneficios" placeholder="beneficios">
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/PROYECTO_FONG_IZZI/index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id_paquete</th>
                                        <th>nombre_paq</th>
                                        <th>precio</th>
                                        <th>fecha_act</th>
                                        <th>fecha_ven</th>
                                        <th>tipo_de_plan</th>
                                        <th>beneficios</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_paquete']?></th>
                                                <th><?php  echo $row['nombre_paq']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['fecha_act']?></th>   
                                                <th><?php  echo $row['fecha_ven']?></th>  
                                                <th><?php  echo $row['tipo_de_plan']?></th>  
                                                <th><?php  echo $row['beneficios']?></th>  


                                                <th><a href="actualizar.php?id=<?php echo $row['id_paquete'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_paquete'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
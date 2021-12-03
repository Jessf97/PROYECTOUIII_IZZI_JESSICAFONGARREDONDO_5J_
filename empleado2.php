<?php include ('header.php');  ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Colaboradores</h1>
			</div>
			<div class="formempleado">
   <p><h1>Inicia sesion, Colaborador IZZI</h1></p>
   <h2>Consulta los pedidos de instalacion en el area, iniciando sesion antes.</h2>
   <form method="post">
	   <p>Nombre:</p>
	   <input type="text" id="name" name="name" placeholder="Ingresa tu nombre">
	   <p>Apellidos:</p>
	   <input type="text" id="lname" name="lname" placeholder="Ingresa tu apellido">
	   <p>Numero de Control:</p>
	   <input type="idn" name="idn" id="idn" placeholder="(111111)" <br><br>
	   <p>Contraseña:</p>
	   <input type="idn" name="idn" id="idn" placeholder="******" <br><br>
	   <input name="btnreg" type="submit" value="INICIAR" id="inicio">
   </form>
   </div>
			</div>
			<?php include('sidebar.php'); ?>
	</section>
	<?php include('footer.php');?>
</body>
</html>
<?php include ('header.php');  ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Usuario Select de IZZI</h1>
			</div>
			<div class="form inicio de sesion">
				<article class="iniciosesionusuario">
					<h3>Inicia Sesion</h3>
					<p>Ingresa con tu cuenta y numero de telefono IZZI</p><br>
					<p >Telefono</p>
					<input type="number" placeholder="Ejemplo: 656 123 6744" required="" name="nombre"> 
					<p>Correo electrónico</p>
					<input class="formintro" type="email" placeholder="ejemplo@gmail.com" required="" name="correo">  
					<p>Contraseña</p>
					<input class="formintro" type="password" placeholder="*******" required="" name="password"> 
					<input class="inicioses" type="submit" value="Iniciar Sesion" onclick="document.location.reload();">
				</article>
			</div>
			<?php include('sidebar.php'); ?>
		</div>
	</section>
	<?php include('footer.php');?>
</body>
</html>
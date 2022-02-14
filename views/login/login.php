<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<title>Coco Inventario</title>
</head>
<body>
	<center>
		<div id="page-login-index">
		<fieldset style="
		display: flex;
		align-items: center;
		justify-content: center;
		min-height: 100vh;
		">
		<br>
		<br>
		<div class="card opacity" style="width: 25rem;">
			<br>
			<h3 class="card-title">Inicio de Sesión</h3>
			<form class="p-4" action="" method="">
				<div class="form-group">
					<label for="user">
						<h5 class="card-title">Usuario</h4>
						</label>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" class="form-control" id="user" name="user" pattern="[A-Za-z0-9_-]{2,20}" placeholder="Usuario">					
						</div>
					</div>
					<div class="form-group">
						<label for="passw">
							<h5 class="card-title">Contraseña</h4>
							</label>
							<div class="input-group form-group">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
								<input type="password" class="form-control" id="passw" name="passw" pattern="[A-Za-z0-9_-#$]{2,20}" placeholder="Contraseña">
							</div>
						</div>
						<button type="submit" name="trigger" value="login" class="btn btn-primary">Iniciar Sesion</button>
					</form>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item text-muted" href="addUsser.php">No Tienes Cuenta? Crea una!</a>
					<a class="dropdown-item text-muted" href="#">Olvidaste tu contraseña?</a>
				</div>
			</div>
		</fieldset>
	</center>
</body>
</html>
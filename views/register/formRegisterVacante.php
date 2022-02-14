<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="../../models/resources/bootsrap/css/bootstrap.min.css">

	<title>Registro de usuario</title>
</head>
<body>

	<form action="../../controller/app_controllers/maincontroller.php" method="POST">
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
				<div class="card opacity" style="width: 50rem;">

					<fieldset>


						<br>
						<h5 class="card-title">Datos Personales</h5>
						<div class="card-body">

							<!-- nombre-->					
							<div class="form-group">
								<label class="col-md-12 control-label" for="nombre">Nombre</label>  
								<div class="col-md-12">
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-signature"></i></span>
										</div>
										<input id="nombre" name="nombre" type="text" placeholder="Nombre (s)" class="form-control input-md" required>
									</div> 	
								</div>
							</div>

							<!-- apellidos-->
							<div class="form-group">
								<label class="col-md-12 control-label" for="apellido">Apellidos</label>  
								<div class="col-md-12">
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-signature"></i></span>
										</div>
										<input id="apellido" name="apellido" type="text" placeholder="Apellidos" class="form-control input-md">
									</div>
								</div>
							</div>

							<!-- identificacion-->
							<div class="form-group">
								<label class="col-md-12 control-label" for="identificacion">Identificacion</label>  
								<div class="col-md-12">
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-id-card"></i></span>
										</div>
										<input id="identificacion" name="identificacion" type="text" placeholder="Identificacion" class="form-control input-md"  required>
									</div>
								</div>
							</div>

							<!-- genero-->
							<div class="form-group">
								<label class="col-md-12 control-label" for="genero">Genero</label>  
								<div class="col-md-12">
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
										</div>
										<!-- aqui datos de bd-->
									</div>
								</div>
							</div>

							<!-- fecha de nacimiento-->
							<div class="form-group">
								<label class="col-md-12 control-label" for="nacimiento">Fecha de Nacimiento</label>  
								<div class="col-md-12">
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-clock"></i></span>
										</div>
										<input id="nacimiento" name="nacimiento" type="date" placeholder="placeholder" class="form-control input-md"  required>
									</div>
								</div>
							</div>

						<h5 class="card-title">Datos de Usuario</h5>
						<div class="card-body">

							<!-- Usuario -->
							<div class="form-group">
								<label class="col-md-12 control-label" for="usuario">Usuario</label>  
								<div class="col-md-12">
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-user"></i></span>
										</div>
										<input id="usuario" name="usuario" type="text" placeholder="Usuario" class="form-control input-md"  required>
									</div>
								</div>
							</div>

							<!-- contraseña-->
							<div class="form-group">
								<label class="col-md-12 control-label" for="contraseña">Contraseña</label>  
								<div class="col-md-12">
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-key"></i></span>
										</div>
										<input id="contraseña" name="contraseña" type="password" placeholder="Contraseña" class="form-control input-md"  required>
									</div>
								</div>
							</div>

							<!-- conf contraseña-->
							<div class="form-group">
								<div class="col-md-12">
									<div class="input-group form-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-key"></i></span>
										</div>
										<input id="confcontraseña" name="confcontraseña" type="password" placeholder="Confirme su contraseña" class="form-control input-md"  required>
									</div>
								</div>
							</div>
						</div>

						<br>

						<button type="summit" name="action" value="guardar_persona" class="btn btn-primary">Registrar </button>
						<br><br>
						<h6 class="mb-2 text-muted">¿ya tienes cuenta? 
							<a href="../../">¡ir a pagina de inicio!</a>
						</h6>

					</fieldset>
				</div>
			</div>

		</center>
	</form>
	
</body>
</html>
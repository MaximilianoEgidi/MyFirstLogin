<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conexion con Base de Datos</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<form action="registrarUsuario.php" id="formReg" class="formulario">
		<h1>REGISTRARSE</h1>
		<input type="text" name="usuario" id="usuario" placeholder="Usuario" class="datos"><br>
		<input type="text" name="nombreapellido" id="nombreapellido" placeholder="Nombre y Apellido" class="datos"><br>
		<input type="text" name="email" id="email" placeholder="Email" class="datos"><br>
		<input type="password" name="password" id="password" placeholder="Contraseña" class="datos"><br>
		<input type="password" name="conf_pass" placeholder="Confirme contraseña" class="datos"><br>
		<input type="submit" class="btn" value="Registrarse">
		<input type="reset" class="btn" value="Borrar">	
        
	</form>

	<form action="loginUsuario.php" id="formReg" class="formulario">
		<h1>Login</h1>
		<input type="text" name="email" id="email" placeholder="Email" class="datos"><br>
		<input type="password" name="password" id="password" placeholder="Contraseña" class="datos"><br>
		<input type="submit" class="btn" value="Login">

        
	</form>
</body>
</html>
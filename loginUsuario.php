<?php	
	define('email', 'email');

	include("conexion.php");
	
	if (!$conexion) {
			echo 'Error en la conexion';
		}else{
			echo 'Conectado a la base de datos <br>';
		}
	//para prevenir mysql injection
	$email= mysqli_real_escape_string($conexion, $_REQUEST['email']);
	$password=  mysqli_real_escape_string($conexion, $_REQUEST['password']);
	
	$email= $_REQUEST['email'];
	$password = $_REQUEST['password'];
	
	
				if (empty($_REQUEST['email'] && $_REQUEST['password'])) {
					echo "El email o la contraseña están vacíos";
				}else{
		
				//insertar usuario en la base de datos
					
					$sql_select = "SELECT * from usuario where mail = '".$_REQUEST['email']."'";
					
					if ($resultado=$conexion->mysqliquery($sql_select)) {
						if($fila=$resultado->fetch_assoc())
							if($fila['password']==$_REQUEST['password']){
								echo 'iniciar sesion';
							}
							else {
								echo 'datos incorrectos';
							}
						}
					}
					//Cerrar conexion
					mysqli_close($conexion);
				
				
	
?> <p> <a href="registrarse.php">Volver</a></p> 
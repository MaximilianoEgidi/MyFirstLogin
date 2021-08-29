<?php	
	include("conexion.php");
	
	if (!$conexion) {
			echo 'Error en la conexion';
		}else{
			echo 'Conectado a la base de datos <br>';
		}
	//para prevenir mysql injection
	$username= mysqli_real_escape_string($conexion, $_REQUEST['usuario']);
	$password=  mysqli_real_escape_string($conexion, $_REQUEST['password']);
	
	$username = $_REQUEST['usuario'];
	$nombre=$_REQUEST['nombreapellido'];
	$email= $_REQUEST['email'];
	$password = $_REQUEST['password'];
	$passwordconf= $_REQUEST['conf_pass'];
	
				if (empty($_REQUEST['usuario'] && $_REQUEST['password'])) {
					echo "El nombre o la contraseña están vacíos";
				}else{
					if ($password!=$passwordconf) {
						echo "Las contraseñas no coinciden";
						mysqli_close($conexion);
					}else{
				//insertar usuario en la base de datos
					
					$sql_insert = "INSERT INTO usuario(nombre_apellido,nombreusuario,password,mail) VALUES ('$_REQUEST[nombreapellido]','$_REQUEST[usuario]','$_REQUEST[password]','$_REQUEST[email]')";
					mysqli_query($conexion, $sql_insert);
					if (!$sql_insert) {
						echo 'Error al registrarse';
					}else{
						
						echo 'Usuario registrado exitosamente';
					}
					//Cerrar conexion
					mysqli_close($conexion);
				}
				}
	
?> <p> <a href="registrarse.php">Volver</a></p> 
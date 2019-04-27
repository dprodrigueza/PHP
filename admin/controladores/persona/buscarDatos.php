<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Buscar datos de Persona.</title>
</head>

<body>

	<?php
		include('../../../config/conexionDB.php');
	
		$codigo = $_POST['codigo'];
		$cedula = $_POST['cedula'];
		$nombre = strtoupper(trim($_POST['nombre']));
		$apellido = strtoupper(trim($_POST['apellido']));
		$direccion = strtoupper(trim($_POST['direccion']));
		$telefono = $_POST['telefono'];
		$email = $_POST['email'];
		$fecNac = $_POST['fecNac'];	
	
	$sql = "INSERT INTO datos_personales VALUES ('$codigo', '$cedula', '$nombre', '$apellido', '$direccion', '$telefono', '$email', '$fecNac');";
	
	if($conn->query($sql) === TRUE) {
		echo("Se han ingresado los datos personales correctamente!! <br>");
	}else{
		echo("Error: " . $sql . "<br>" . $conn->errno . "<br>");
	}
	
	echo("<a href='insertar.html'> Regresar </a>");
	
	$conn->close();
	?>


</body>

</html>
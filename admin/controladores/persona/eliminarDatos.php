<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eliminar datos de Persona.</title>
</head>

<body>

	<?php
		include('../../../config/conexionDB.php');
	
		
		$cedula = $_POST['cedula'];
		
	$sql = "INSERT INTO datos_personales VALUES ('$codigo', '$cedula', '$nombre', '$apellido', '$direccion', '$telefono', '$email', '$fecNac');";
	
	if($conn->query($sql) === TRUE) {
		echo("Se han eliminado los datos personales correctamente!! <br>");
	}else{
		echo("Error: " . $sql . "<br>" . $conn->errno . "<br>");
	}
	
	echo("<a href='eliminar.html'> Regresar </a>");
	
	$conn->close();
	?>



</body>

</html>
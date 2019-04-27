<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ingresar.</title>
</head>

<body>

	<?php

	session_start();
	
	include( '../../../config/conexionDB.php' );


	$email = isset( $_POST[ "email" ] )?trim($_POST[ 'email' ] ) : null;
	$password = isset( $_POST[ "contrasena" ] )?trim($_POST[ 'contrasena' ] ) : null;


	$sql = "SELECT * FROM datos_personales WHERE correo = '$email' and contrasena = ('$password')";

	$result = $conn->query($sql);


	if ($result->num_rows>0) {
		$_SESSION[ 'isLogged' ] = TRUE;
		echo( "si entra" );
		header( "Location: ../../vista/persona/index.html" );
	} else {
		echo($sql);
		#header( "Location: ../../vista/persona/login.html" );
	}

	$conn->close();

	?>


</body>

</html>
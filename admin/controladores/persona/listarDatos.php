<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listar datos de Usuarios.</title>
</head>

<body>

	<table style="width: 100%" border="1">
		<tr>
			<th>Cedula</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Dirección</th>
			<th>Telefono</th>
			<th>E-MAIL</th>
			<th>Fecha de Nacimiento</th>
			<th colspan="3">ACCIONES</th> 

		</tr>


		<?php
		include( '../../../config/conexionDB.php' );

		$sql = "SELECT * from datos_personales;";
		$result = $conn->query( $sql );




		if ( $result->num_rows > 0 ) {
			

			while ( $row = $result->fetch_assoc() ) {
				echo "<tr>";
				echo( "<td>" . $row[ "cedula" ] . "</td>" );
				echo( "<td>" . $row[ "nombre" ] . "</td>" );
				echo( "<td>" . $row[ "apellido" ] . "</td>" );
				echo( "<td>" . $row[ "direccion" ] . "</td>" );
				echo( "<td>" . $row[ "telefono" ] . "</td>" );
				echo( "<td>" . $row[ "correo" ] . "</td>" );
				echo( "<td>" . $row[ "fecha_nacimiento" ] . "</td>");
				echo( "<td>" . "<a href = ../../vista/persona/eliminar.html?codigo=$row['codigo']>ELIMINAR</a>" . "</td>");
				echo( "<td>" . "<a href = ../../vista/persona/actualizar.html>MODIFICAR</a>" . "</td>");
				echo( "<td>" . "<a href = ../../vista/persona/actualizar.html>CAMBIAR CONTRASEÑA</a>" . "</td>");
				echo( "</tr>" );
			}
		} else {
			echo "<tr>";
			 echo("<td colspan='7'>No existen usuarios registrados </td>");
			echo( "</tr>" );
		}


		$conn->close();
		?>


	</table>




</body>

</html>
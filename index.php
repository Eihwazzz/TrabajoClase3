<html>
<head>
	<title>TP - parte 2</title>
		<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--final de Estilos-->
		   <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
  <div class="container">
		<div class="page-header">
			<h1>Empleados</h1>      
		</div>
		<div class="CajaInicio animated bounceInRight">
			<h1>Ingreso de Empleados</h1>
		
			<!--CODIFICAR LOS ATRIBUTOS DEL FORMULARIO-->
			<form id="FormIngreso" action="administracion.php" method="post">
			
				<span class="class="list-group-item-heading">Apellido:</span><input type="text" name="txtApellido"/>
				<span class="class="list-group-item-heading">Nombre:</span><input type="text" name="txtNombre"/>
				<span class="class="list-group-item-heading">Dni:</span><input type="text" name="txtDni"/>
				<span class="class="list-group-item-heading"><br/>Masculino</span><input type="radio" name="txtSexo" value="Masculino"/>
				<span class="class="list-group-item-heading">Femenino</span><input type="radio" name="txtSexo" value="Femenino"/>
				<span class="class="list-group-item-heading"><br/><br/>Legajo:</span><input type="text" name="txtLegajo"/>
				<span class="class="list-group-item-heading">Sueldo:</span><input type="text" name="txtSueldo"/>

				<!--CODIFICAR LOS ELEMENTOS DEL FORMULARIO-->
				
				
				<input type="submit" class="MiBotonUTNMenu"  value="Enviar"/>
				<input type="reset" class="MiBotonUTNMenu" value="Limpiar"/>
			</form>
		</div>
	</div>
</body>
</html>
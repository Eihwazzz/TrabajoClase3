<?php
require_once "Persona.php";
require_once "Empleado.php";
require_once "Fabrica.php";

	$nombre = $_POST["txtNombre"];
	$apellido = $_POST["txtApellido"];
	$dni = $_POST["txtDni"];
	$legajo = $_POST["txtLegajo"];
	$sueldo = $_POST["txtSueldo"];
	if(!empty($_POST["txtSexo"]))
		{
			$sexo= $_POST["txtSexo"];
		}

	if($nombre === "" || $apellido === ""  || $dni === ""  || $legajo === ""  || $sueldo === ""  || empty($_POST["txtSexo"]))
	{
		echo "Rellene todos los campos por favor!<br/>";
		?>
		<a href="/clase3/index.php">Inicio</a>
		<?php
	}else
	{
		$empleado1 = new Empleado($nombre,$apellido,$dni,$sexo,$legajo,$sueldo);
		$objFabrica = new Fabrica("Martin & Cia");
		$objFabrica->AgregarPersona($empleado1);

		echo $objFabrica->ToString();
		
	}


?>
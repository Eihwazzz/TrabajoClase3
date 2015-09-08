<?php
	

	class Fabrica{
		private $_razonSocial;
		public $_empleados = array();

		public function __construct($razonSocial)
		{
			$this->_razonSocial = $razonSocial;
		}
		public function AgregarPersona($persona)
		{
			//$this->_empleados[] = $persona;
			$flag = 0;
			if($this->VerificarArrayVacio())
			{
				$flag = 1;
			}else
			{				
				if($this->EvitarDuplicados($persona) < 0)
				{
					$flag = 1;
				}
				else
				{
					echo "El empleado ya se encuentra en la fabrica";
				}
			}

			if($flag === 1)
			{
				array_push($this->_empleados, $persona);
			}
			//$this->_empleados = $this->EvitarDuplicados();
		}
		public function ToString()
		{
			$cadena = "";
			if($this->VerificarArrayVacio())
			{
				$cadena = "La Fabrica no posee empleados";
			}
			else
			{
				for($cont = 0; $cont < count($this->_empleados); $cont++)
				{
					{
						$cadena.=$this->_empleados[$cont]->ToString()."<br/>";
					}
				}
			}
			return "<br/>Razon Social: ".$this->_razonSocial."<br/>".$cadena;
		}

		public function SacarPersona($persona)
		{
			//Verifico si el array esta vacio
			if($this->VerificarArrayVacio())
			{
				echo "No hay empleados en la fabrica";
			}else
			{
				//Utilizo el retorno de EvitarDuplicados
				//Si devuelve >= 0 es porque encontro la persona y esta pasando un indice
				$auxiliar = $this->EvitarDuplicados($persona);
				if($auxiliar >= 0)
				{
					unset($this->_empleados[$auxiliar]);
					$this->_empleados = array_values($this->_empleados);
				}else
				{
					echo "La persona no se encuentra en la Fabrica";
				}
			}
		}

		public function CalcularSalarios()
		{
			$salarios = 0.0;
			for($cont = 0; $cont < count($this->_empleados);$cont++)
			{
				$salarios+=$this->_empleados[$cont]->getSueldo();
			}
			return $salarios;
		}
		private function EvitarDuplicados($persona)
		{
			for($cont = 0; $cont < count($this->_empleados); $cont++)
			{
				//Recorro el array de empleados y si lo encuentro retorno el indice
				if($this->_empleados[$cont]->getLegajo() === $persona->getLegajo())
				{
					return $cont;
				}
			}
			//Si no se encuentra, retorno -1
			return -1;
		}
		public function VerificarArrayVacio()
		{
			if(count($this->_empleados) == 0)
			{
				return true;
			}
			else{
				return false;
			}
		}
	}

?>
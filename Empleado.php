<?php
	class Empleado extends Persona{

		private $_legajo;
		private $_sueldo;


		public function __construct($nombre,$apellido,$dni,$sexo,$legajo,$sueldo){
			parent::__construct($nombre,$apellido,$dni,$sexo);
			$this->_legajo = $legajo;
			$this->_sueldo = $sueldo;
		}
		public function getLegajo()
		{
			return $this->_legajo;
		}
		public function setLegajo($valor)
		{
			$this->_legajo= $valor;
		}
		public function getSueldo()
		{
			return $this->_sueldo;
		}
		public function setSueldo($valor)
		{
			$this->_sueldo = $valor;
		}
		public function ToString()
		{
			return parent::ToString()."<br/>Legajo: ".$this->_legajo."<br/>Sueldo: ".$this->_sueldo;
		}
		public function Hablar($idioma)
		{
			return "Idioma: Ingles";
		}
	}

?>
<?php
	
	abstract class Persona{

		private $_nombre;
		private $_apellido;
		private $_dni;
		private $_sexo;

		public function __construct($nombre,$apellido,$dni,$sexo)
		{
			$this->_nombre = $nombre;
			$this->_apellido = $apellido;
			$this->_dni = $dni;
			$this->_sexo = $sexo;
		}
		public function getSexo()
		{
			return $this->_sexo;
		}
		public function getNombre()
		{
			return $this->_nombre;
		}
		public function getApellido()
		{
			return $this->_apellido;
		}
		public function getDni()
		{
			return $this->_dni;
		}
		public function setNombre($valor)
		{
			$this->_nombre = $valor;
		}
		public function setApellido($valor)
		{
			$this->_apellido = $valor;
		}
		public function setDni($valor)
		{
			$this->_dni = $valor;
		}

		public function ToString()
		{
			return "Nombre: ".$this->getNombre()."<br/>Apellido: ".$this->getApellido()."<br/>DNI: ".$this->getDni()."<br/>Sexo: ".$this->getSexo();
		}

		public abstract function Hablar($idioma);
	}



?>
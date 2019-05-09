<?php
class Clientes extends Validator
{
	//Declaración de propiedades
	private $id = null;
	private $nombres = null;
	private $apellidos = null;
	private $correo = null;
	private $usuario = null;
	private $clave = null;

	//Métodos para sobrecarga de propiedades
	public function setId($value)
	{
		if ($this->validateId($value)) {
			$this->id = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getId()
	{
		return $this->id;
	}

	public function setNombres($value)
	{
		if ($this->validateAlphanumeric($value, 1, 50)) {
			$this->nombres = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getNombres()
	{
		return $this->nombres;
	}

	public function setApellidos($value)
	{
		if ($this->validateAlphabetic($value, 1, 50)) {
			$this->apellidos = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getApellidos()
	{
		return $this->apellidos;
	}


	public function setCorreo($value)
		{
			if ($this->validateEmail($value)) {
				$this->correo = $value;
				return true;
			} else {
				return false;
			}
		}

		public function getCorreo()
		{
			return $this->correo;
		}


	public function setUsuario($value)
	{
		if ($this->validateAlphanumeric($value, 1, 50)) {
			$this->usuario = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getUsuario()
	{
		return $this->usuario;
	}

	public function setClave($value)
	{
		if ($this->validatePassword($value)) {
			$this->clave = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getClave()
	{
		return $this->clave;
	}
	//Métodos para manejar la sesión del usuario
	public function checkUsuario_Cliente()
	{
		$sql = 'SELECT id_cliente FROM clientes WHERE Usuario_cliente = ?';
		$params = array($this->usuario);
		$data = Conexion::getRow($sql, $params);
		if ($data) {
			$this->id = $data['id_cliente'];
			return true;
		} else {
			return false;
		}
	}

	public function checkPassword()
	{
		$sql = 'SELECT Clave_cliente FROM clientes WHERE id_cliente = ?';
		$params = array($this->id);
		$data = Conexion::getRow($sql, $params);
		if (password_verify($this->clave, $data['Clave_cliente'])) {
			return true;
		} else {
			return false;
		}
	}

	public function changePassword()
	{
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = 'UPDATE clientes SET clave = ? WHERE id_cliente = ?';
		$params = array($hash, $this->id);
		return Conexion::executeRow($sql, $params);
	}
	//Metodos para manejar el CRUD
	public function readClientes()
	{
		$sql = 'SELECT id_cliente, Nombre_cliente, Apellido_cliente, Usuario_cliente, Correo_cliente, CLave_cliente FROM clientes ORDER BY Apellido_cliente';
		$params = array(null);
		return Conexion::getRows($sql, $params);
	}

	public function searchClientes($value)
	{
		$sql = 'SELECT id_cliente, Nombre_cliente, Apellido_cliente, Usuario_cliente, Correo_cliente FROM clientes WHERE Apellido_cliente LIKE ? OR usuario_cliente LIKE ? ORDER BY Apellido_cliente';
		$params = array("%$value%", "%$value%");
		return Conexion::getRows($sql, $params);
	}

	public function createClientes()
	{
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = 'INSERT INTO clientes(Nombre_cliente, Apellido_cliente, Usuario_cliente, Correo_cliente, Clave_cliente) VALUES(?, ?, ?, ?, ?)';
		$params = array($this->nombres, $this->apellidos, $this->usuario, $this->correo, $hash);
		return Conexion::executeRow($sql, $params);
	}

	public function getClientes()
	{
		$sql = 'SELECT id_cliente, Nombre_cliente, Apellido_cliente, Usuario_cliente, Correo_cliente FROM clientes WHERE id_cliente = ?';
		$params = array($this->id);
		return Conexion::getRow($sql, $params);
	}

	public function updateCliente()
	{
		$sql = 'UPDATE clientes SET Nombre_cliente = ?, Apellido_cliente = ?, Usuario_cliente = ?, Correo_cliente = ? WHERE id_cliente = ?';
		$params = array($this->nombres, $this->apellidos, $this->usuario, $this->correo, $this->id);
		return Conexion::executeRow($sql, $params);
	}

	public function deleteCliente()
	{
		$sql = 'DELETE FROM clientes WHERE id_cliente = ?';
		$params = array($this->id);
		return Conexion::executeRow($sql, $params);
	}
}
?>

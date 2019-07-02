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
	private $IdCliente = null;
	private $IdProducto = null;
	private $cantidad = null;
	private $IdPrepedido = null;
	private $IdPedido = null;
	private $FechaPedido = null;
	private $EstadoPedido = null;

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

	public function setCantidad($value)
	{
		if ($this->validateId($value)) {
			$this->cantidad = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getCantidad()
	{
		return $this->cantidad;
	}

	public function setIdProducto($value)
	{
		if ($this->validateId($value)) {
			$this->IdProducto = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getIdProducto()
	{
		return $this->IdProducto;
	}

	public function setIdCliente($value)
	{
		if ($this->validateId($value)) {
			$this->IdCliente = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getIdCliente()
	{
		return $this->IdCliente;
	}

	public function setIdPrepedido($value)
	{
		if ($this->validateId($value)) {
			$this->IdPrepedido = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getIdPrepedido()
	{
		return $this->IdPrepedido;
	}

	public function setIdPedido($value)
	{
		if ($this->validateId($value)) {
			$this->IdPedido = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getIdPedido()
	{
		return $this->IdPedido;
	}

	public function setFechaPedido(){
		$this->FechaPedido;
	}

	public function getFechaPedido(){
		return $this->FechaPedido;
	}

	public function setEstadoPedido($value)
	{
		if ($this->validateId($value)) {
			$this->EstadoPedido = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getEstadoPedido()
	{
		return $this->EstadoPedido;
	}

	//Método para manejar la sesión del usuario
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

	//Método para verificar la contraseña
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

	public function createClientes()
	{
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = 'INSERT INTO clientes(Nombre_cliente, Apellido_cliente, Usuario_cliente, Correo_cliente, Clave_cliente) VALUES(?, ?, ?, ?, ?)';
		$params = array($this->nombres, $this->apellidos, $this->usuario, $this->correo, $hash);
		return Conexion::executeRow($sql, $params);
	}

	public function getCliente()
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

	public function agregarCarrito()
	{
		$sql = 'INSERT INTO pre_pedido(id_cliente, id_producto, cantidad) VALUES(?, ?, ?)';
		$params = array($this->IdCliente, $this->IdProducto, $this->cantidad);
		return Conexion::executeRow($sql, $params);
	}

	public function readCarrito()
	{
		$sql = 'SELECT id_prepedido, id_cliente, id_producto, cantidad, Imagen_producto, Nombre_producto, Precio_producto FROM pre_pedido INNER JOIN productos USING (id_producto) WHERE id_cliente = ?';
		$params = array($this->id);
		return Conexion::getRows($sql, $params);
	}

	public function deleteCliente()
	{
		$sql = 'DELETE FROM clientes WHERE id_cliente = ?';
		$params = array($this->id);
		return Conexion::executeRow($sql, $params);
	}

	public function deleteCarrito()
	{
		$sql = 'DELETE FROM pre_pedido WHERE id_prepedido = ?';
		$params = array($this->IdPrepedido);
		return Conexion::executeRow($sql, $params);
	}

	public function getPre(){
		$sql = 'SELECT id_prepedido FROM pre_pedido WHERE id_prepedido = ?';
		$params = array($this->IdPrepedido);
		return Conexion::getRow($sql, $params);
	}

	public function getPrepedido(){
		$sql = 'SELECT id_prepedido, id_cliente, id_producto, cantidad FROM pre_pedido WHERE id_cliente = ?';
		$params = array($this->id);
		return Conexion::getRows($sql, $params);
	}

	public function createPedido(){
		$sql = 'INSERT INTO pedidos(id_cliente, Estado_pedido) VALUES (?, 1)';
		$params = array($this->IdCliente);
		return Conexion::executeRow($sql, $params);
	}

	public function createDetallePedido(){
		$sql = 'INSERT INTO detalle_pedido(id_pedido, id_producto, cantidad) VALUES (?, ?, ?)';
		$params = array($this->IdPedido, $this->IdProducto, $this->cantidad);
		return Conexion::executeRow($sql, $params);
	}

	public function readUltimoPedido(){
		$sql = 'SELECT MAX(id_pedido) AS UltimoPedido FROM pedidos';
		$params = array(null);
		$data = Conexion::getRow($sql, $params);
		if($data){
			$this->IdPedido = $data['UltimoPedido'];
			return true;
		} else {
			return false;
		}
	}

	public function readPrepedido(){
		$sql = 'SELECT id_prepedido, id_cliente, id_producto, cantidad FROM pre_pedido';
		$params = array(null);
		$data = Conexion::executeRow($sql, $params);
		if($data){
			$this->IdProducto = $data['id_producto'];
			$this->cantidad = $data['cantidad'];
			return true;
		} else {
			return false;
		}
	}

	public function deletePrepedido()
	{
		$sql = 'DELETE FROM pre_pedido WHERE id_cliente = ?';
		$params = array($this->IdCliente);
		return Conexion::executeRow($sql, $params);
	}


}
?>

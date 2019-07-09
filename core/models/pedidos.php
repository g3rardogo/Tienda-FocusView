<?php
class Pedidos extends Validator
{

	private $id = null;
	private $fecha = null;
	private $cliente = null;
	private $estado = null;

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

	public function setFecha(){
		if ($this->validateFecha($value)) {
			$this->fecha = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getFecha()
	{
		return $this->fecha;
	}

	public function setCliente($value)
	{
		if ($this->validateId($value)) {
			$this->cliente = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getCliente()
	{
		return $this->cliente;
	}

	public function setEstado($value)
	{
		if ($value == '1' || $value == '0') {
			$this->estado = $value;
			return true;
		} else {
			return false;
		}
	}

	public function getEstado()
	{
		return $this->estado;
	}

	public function readPedidosCliente()
	{
		$sql = 'SELECT Nombre_cliente, id_pedido, Fecha_pedido, Estado_pedido FROM pedidos INNER JOIN clientes USING(id_cliente) WHERE id_cliente = ? AND Estado_pedido = 1 ORDER BY Fecha_pedido';
		$params = array($this->cliente);
		return Conexion::getRows($sql, $params);
	}

	public function readNumber()
	{
		$sql = 'SELECT id_cliente, Nombre_cliente, Usuario_cliente, COUNT(id_pedido) as Pedidos from clientes INNER JOIN pedidos USING(id_cliente) GROUP BY id_cliente';
		$params = array($this->cliente);
		return Conexion::getRows($sql, $params);
	}

	public function readPedidos()
	{
		$sql = 'SELECT id_pedido, Fecha_pedido, Estado_pedido, nombre_cliente FROM pedidos INNER JOIN clientes USING(id_cliente) ORDER BY Fecha_pedido';
		$params = array(null);
		return Conexion::getRows($sql, $params);
	}

	public function readVendidos()
	{
		$sql = 'SELECT Nombre_producto, Sum(cantidad) as Cantidad from detalle_pedido INNER JOIN productos USING(id_producto) GROUP by Nombre_producto';
		$params = array(null);
		return Conexion::getRows($sql, $params);
	}

	public function readDetalle()
	{
		$sql = 'SELECT id_detalle, id_pedido, id_producto, Nombre_producto, Cantidad, Precio_producto FROM detalle_pedido INNER JOIN productos USING(id_producto) WHERE id_pedido = ?';
		$params = array($this->id);
		return Conexion::getRows($sql, $params);
	}

	public function readDetalleFactura()
	{
		$sql = 'SELECT id_detalle, id_pedido, id_producto, Nombre_producto, Cantidad, Precio_producto FROM detalle_pedido INNER JOIN productos USING(id_producto) INNER JOIN pedidos USING(id_pedido) WHERE pedidos.id_pedido = ?';
		$params = array($this->id);
		return Conexion::getRows($sql, $params);
	}

	public function readClientes()
	{
		$sql = 'SELECT id_cliente, nombre_cliente, apellido_cliente, usuario_cliente, correo_cliente FROM clientes';
		$params = array(null);
		return Conexion::getRows($sql, $params);
	}
	
	public function createPedidos()
	{
		$sql = 'INSERT INTO pedidos(fecha_pedido, id_cliente, estado_pedido) VALUES (?, ?, ?)';
		$params = array($this->fecha, $this->cliente, $this->estado);
		return Conexion::executeRow($sql, $params);
	}

	public function getPedido()
	{
		$sql = 'SELECT id_pedido, fecha_pedido, id_cliente, Estado_pedido FROM pedidos WHERE id_pedido = ?';
		$params = array($this->id);
		return Conexion::getRow($sql, $params);
	}

	public function updatePedido()
	{
		$sql = 'UPDATE pedidos SET Estado_pedido = ? WHERE id_pedido = ?';
		$params = array($this->estado, $this->id);
		return Conexion::executeRow($sql, $params);
	}

	public function readUltimoPedido(){
		$sql = 'SELECT MAX(id_pedido) AS UltimoPedido, Nombre_cliente, Apellido_cliente, Fecha_pedido FROM pedidos INNER JOIN clientes USING(id_cliente) WHERE id_cliente = ?';
		$params = array($this->cliente);
		return Conexion::getRow($sql, $params);
	}
	public function Graphics2()
	{
		$sql = 'SELECT Usuario_cliente as clientes, Count(id_pedido) as cantidad FROM clientes INNER JOIN pedidos USING(id_cliente) GROUP BY id_cliente limit 10';
		$params = array(null);
		return Conexion::getRows($sql, $params);
	}

}
?>

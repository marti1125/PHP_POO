<?php
class Producto {
	private $id;
	private $nombre;
	private $precio;
	private $stock;
	private $categoria;

	public function __construct($id = 0, $nombre = "", $precio = 0, $stock = 0){
		$this->id = $id;
		$this->nombre = $nombre;
		$this->precio = $precio;
		$this->stock = $stock;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
	public function setPrecio($precio){
		$this->precio = $precio;
	}
	public function setStock($stock){
		$this->stock = $stock;
	}
	public function setCategoria($categoria){
		$this->categoria = $categoria;
	}
	public function getId(){
		return $this->id;
	}
	public function getNombre(){
		return $this->nombre;
	}
	public function getPrecio(){
		return $this->precio;
	}
	public function getStock(){
		return $this->stock;
	}
	public function getCategoria(){
		return $this->categoria;
	}
}

?>

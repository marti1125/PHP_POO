<?php

class Categoria {
   private $id;
   private $nombre;
   private $productos = array();

   public function __construct($id = 0, $nombre = "") {
      $this->id = $id;
      $this->nombre = $nombre;
   }
   public function setId($id) {
      $this->id = $id;
   }
   public function setNombre($nombre) {
      $this->nombre = $nombre;
   }
   public function setProductos($productos) {
      $this->productos = $productos;
   }
   public function getId() {
      return $this->id;
   }
   public function getNombre() {
      return $this->nombre;
   }
   public function getProductos() {
      return $this->productos;
   }
   public function addProducto($producto) {
      $this->productos[] = $producto;
   }
}

?>
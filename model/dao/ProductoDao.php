<?php
class ProductoDao {
	public function crear(Producto $Producto){

	}
	public function modificar(Producto $Producto){

	}
	public function eliminar($id){

	}
	public function traerPorId($id){

	}
	public function traerTodo(){

	}
	public function traerPorCategoria($categoriaId){
		$cn = null;
		$cmd = null;
		$productos = array();
		try {
			$cn = ConexionBD::getInstance()->getConexion();
			$cmd = $cn->prepare("select * from producto where id = categoria_id");

			$cmd->bindParam(":categoria_id", $categoriaId);
 			$cmd->execute();

 			while($row = $cmd->fetch()) {
   				$producto = new Producto();
   				$producto->setId($row["id"]);
   				$producto->setNombre($row["nombre"]);
   				$producto->setPrecio($row["precio"]);
   				$producto->setStock($row["stock"]);

   				error_log($row["nombre"], 3, "error.log");

   				$productos[] = $producto;
			}
		}catch(PDOException $ex){
			throw new Exception($ex->getMessage());
		}catch(Exception $ex){
			throw $ex;
		}
		return $productos;
	}
}

?>
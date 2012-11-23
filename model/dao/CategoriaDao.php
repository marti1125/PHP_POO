<?php
class CategoriaDao {
	public function crear(Categoria $Producto){

	}
	public function modificar(Categoria $Producto){

	}
	public function eliminar($id){

	}
	public function traerPorId($id){

	}
	public function traerTodo(){
		$cn = null;
		$categorias = array();
		try {
			$cn = ConexionBD::getInstance()->getConexion();
			foreach($cn->query("select * from categoria") as $row) {
        		$categoria = new Categoria($row["id"],$row["nombre"]);
        		$categorias[] = $categoria;
    		}
		}catch(PDOException $ex){
			throw new Exception($ex->getMessage());
		}catch(Exception $ex){
			throw $ex;
		}
		return $categorias;
	}
}
?>
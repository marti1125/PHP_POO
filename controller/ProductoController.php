<?php

session_start();

require_once("../model/dao/CategoriaDao.php");
require_once("../model/dao/ProductoDao.php");
require_once("../model/to/Categoria.php");
require_once("../model/to/Producto.php");
require_once("../util/ConexionBD.php");

switch($_REQUEST["accion"]){
	case "abrir_producto_categoria":
		$cateDao = new CategoriaDao();
		$categorias = $cateDao->traerTodo();

		$_SESSION["categorias"] = serialize($categorias);
		header("location:../view/index.php");
		break;
	case "consultar_producto_categoria":
		$categoriaId = $_REQUEST["cat_id"];
		$proDao = new ProductoDao();
		$productos = $proDao->traerPorCategoria($categoriaId);

		$_SESSION["productos"] = serialize($productos);
		header("location:../view/index.php");
		break;
}


?>
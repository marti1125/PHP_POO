<?php
session_start();

require_once("../model/dao/CategoriaDao.php");
require_once("../model/to/Categoria.php");
require_once("../util/ConexionBD.php");

switch($_REQUEST["accion"]){
	case "traer_todo":
		$cateDao = new CategoriaDao();
		$categorias = $cateDao->traerTodo();

		$_SESSION["categorias"] = serialize($categorias);
		header("location:../view/index.php");
		break;
}

?>
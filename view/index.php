<?php
session_start();
require_once("../model/to/Categoria.php");
require_once("../model/to/Producto.php");

$categorias = unserialize($_SESSION["categorias"]);
$productos = unserialize($_SESSION["productos"]);

?>
<html>
<head>
<script type="text/javascript">

	function consultarProductos() {
			var cat_id = 1; //Recuperar el value cboCategoria
			location.href = "../controller/ProductoController.php?accion=consultar_producto_categoria&categoria_id=" + cat_id;
	}
</script>
</head>
<body>

<select name="cboCategoria" onchange="consultarProductos()">
<?php
	foreach ($categorias as $categoria) {
?>
	<option value="<?=$categoria->getId()?>"><?=$categoria->getNombre()?> </option>
<?php
	}
?>
</select>

<table border="1" >
	<tr>
		<td>ID<td>Nombre</td><td>Precio</td><td>Stock</td>
	</tr>
<?php
	foreach ($productos as $producto) {
?>
	<tr>
		<td><?=$producto->getId()?><td><?=$producto->getNombre()?></td>
		<td><?=$producto->getPrecio()?></td><td><?=$producto->getStock()?></td>
	</tr>
<?php 
	}
?>
</table>

</body>

</html>
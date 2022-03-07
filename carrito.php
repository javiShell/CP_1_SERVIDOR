<?php

$aCarrito = array();
$sHTML = '';
$fPrecioTotal = 0;

//Vaciamos el carrito
if(isset($_GET['vaciar'])) {
	unset($_COOKIE['carrito']);
	$sHTML = '';
}

//Obtenemos los productos anteriores
if(isset($_COOKIE['carrito'])) {
	$aCarrito = unserialize($_COOKIE['carrito']);
}

//Anyado un nuevo articulo al carrito
if(isset($_POST['nombre']) && isset($_POST['precio'])) {
	$iUltimaPos = count($aCarrito);
	$aCarrito[$iUltimaPos]['nombre'] = $_POST['nombre'];
	$aCarrito[$iUltimaPos]['precio'] = $_POST['precio'];
}else{
	echo "No hay valores";
}

//Creamos la cookie (serializamos)
$iTemCad = time() + (60 * 60);
setcookie('carrito', serialize($aCarrito), $iTemCad);



//Imprimimos el contenido del array
foreach ($aCarrito as $key => $value) {
	$sHTML .= '-> ' . $value['nombre'] . ' ' . $value['precio'] . '<br>';
	$fPrecioTotal += $value['precio'];
}

//Imprimimos el precio total
$sHTML .= '<br>------------------<br>Precio total: ' . $fPrecioTotal;

?>

<?php echo $sHTML;
echo "<div>";
echo "<input type='button' value='Vuelta atrás' onClick='history.go(-1);'>";
echo "</div>";
?>








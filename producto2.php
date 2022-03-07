<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>PRODUCTO 1</title>
</head>
<body>
	<form action="carrito.php" method="POST">
        <p>PRODUCTO 2</p>
        <img src="tele.jpeg" alt="Televisión">
        <div>
        <input type="hidden" value="Televisión" name="nombre">
        <p>Televisión 400€</p>
        <input  type="hidden" value="400" name="precio">
        </div>
        <br>
        <input type="submit" value="Añadr al carrito">
        
    </form>
    <?php
    echo "<input type='button' value='Vuelta atrás' onClick='history.go(-1);'>";
    ?>
</body>
</html>
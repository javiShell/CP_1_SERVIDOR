<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>PRODUCTO 1</title>
</head>
<body>
	<form action="carrito.php" method="POST">
        <p>PRODUCTO 3</p>
        <img src="pc.jpg" alt="pc">
        <div>
        <input type="hidden" value="PC" name="nombre">
        <p>PC 800€</p>
        <input  type="hidden" value="800" name="precio">
        </div>
        <br>
        <input type="submit" value="Añadr al carrito">
        
    </form>
    <?php
    echo "<input type='button' value='Vuelta atrás' onClick='history.go(-1);'>";
    ?>
</body>
</html>
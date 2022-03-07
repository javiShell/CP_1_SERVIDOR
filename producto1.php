<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>PRODUCTO 1</title>
</head>
<body>
	<form action="carrito.php" method="POST">
        <p>PRODUCTO 1</p>
        <img src="1.jpg" alt="cama">
        <div>
        <input type="hidden" value="Cama" name="nombre">
        <p>Cama 130€</p>
        <input  type="hidden" value="130" name="precio">
        </div>
        <br>
        <input type="submit" value="Añadr al carrito">
        
    </form>
    <?php
    echo "<input type='button' value='Vuelta atrás' onClick='history.go(-1);'>";
    ?>
</body>
</html>
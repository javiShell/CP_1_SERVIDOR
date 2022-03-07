<!DOCTYPE html>
<html lang="es-ES">
<head>
	<meta charset="UTF-8">
	<title>PRODUCTO 1</title>
</head>
<body>
	<form action="carrito.php" method="POST">
        <p>PRODUCTO 4</p>
        <img src="mesa.jpg" alt="mesa" width="15%">
        <div>
        <input type="hidden" value="Mesa" name="nombre">
        <p>Mesa 70€</p>
        <input  type="hidden" value="70" name="precio">
        </div>
        <br>
        <input type="submit" value="Añadr al carrito">
        
    </form>
    <?php
    echo "<input type='button' value='Vuelta atrás' onClick='history.go(-1);'>";
    ?>
</body>
</html>
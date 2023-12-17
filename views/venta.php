<?php
/**Codigo Fuente:
 ** Autor: Julian David Molina Jaramillo
 ** CC: 1152687834
 ** Fecha: 16/12/2023
**/

//Incluimos el archivo connection
include('connection.php');

$conect = connection();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/style.css">
    <title>venta De Productos</title>
</head>
<body>
    <div class="users-form">
        <form action="venta_producto.php" method ="POST">
            <h1> <img src="Image/icono2.png" class="icono">Venta De Producto </h1>
            <section class="container">
                <div><input type="text" name="id" placeholder="ID Producto"></div>
                <div><input type="text" name="stock" placeholder="Cantidad a vender"></div>
                <div><input type="submit" value="Vender Producto" class="botonVenta"></div>
                <a href="index.php" class="users-table--edit">X</a>
            </section>
            <!-- Solicitamos los input solo de los datos deseados --> 
        </form>
    </div>  
</body>
</html>
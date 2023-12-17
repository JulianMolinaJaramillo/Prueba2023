<?php
/**Codigo Fuente:
 ** Autor: Julian David Molina Jaramillo
 ** CC: 1152687834
 ** Fecha: 16/12/2023
**/

//Incluimos el archivo connection
include('connection.php');

$conect = connection();

//Para identificar el registro con el ID
$id=$_GET['id'];
$sql = "SELECT * FROM gce_caracteristicas WHERE id=$id";

//Ejecutamos el Query para la actualizacion de datos
$query = mysqli_query($conect , $sql);
$row = mysqli_fetch_array($query)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/style.css">
    <title>Editar Productos</title>
</head>
<body>
    <div class="users-form">
        <form action="edit_producto.php" method ="POST">
            <h1> <img src="Image/icono.png" class="icono"> Editar Producto </h1>
            <section class="container">
                <!-- Reasignamos todos los datos para que solo se actualice lo que se desea modificar --> 
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <div>
                    <input type="text" name="nombre" placeholder="Nombre"value="<?= $row['nombre'] ?>" >
                    <input type="text" name="tipoPlaca" placeholder="Board"value="<?= $row['tipoPlaca'] ?>">
                    <input type="text" name="modeloTorre" placeholder="Modelo"value="<?= $row['modeloTorre'] ?>">
                    <input type="text" name="marcaProcesador" placeholder="Procesador"value="<?= $row['marcaProcesador'] ?>">
                </div>
            
                <div>
                    <input type="text" name="tipoTeclado" placeholder="Teclado"value="<?= $row['tipoTeclado'] ?>">
                    <input type="text" name="marcaTarjeta" placeholder="Gráfica"value="<?= $row['marcaTarjeta'] ?>">
                    <input type="text" name="tamañoRam" placeholder="Ram"value="<?= $row['tamañoRam'] ?>">
                    <input type="text" name="modeloDisco" placeholder="Disco"value="<?= $row['modeloDisco'] ?>">
                </div>

                <div>
                    <input type="text" name="tipoMouse" placeholder="Mouse"value="<?= $row['tipoMouse'] ?>">
                    <input type="text" name="tamañoPantalla" placeholder="Pantalla"value="<?= $row['tamañoPantalla'] ?>">
                    <select name="estado">
                        <option value="">Estado</option>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                    <input type="text" name="stock" placeholder="Stock"value="<?= $row['stock'] ?>"></div>
        </form>
                    <a href="index.php" class="users-table--edit">X</a>
                    <input type="submit" value="Actualizar Producto" class="botonActualizar">
    </div>
            </section>   
</body>
</html>
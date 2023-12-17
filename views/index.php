<?php
/**Codigo Fuente:
 ** Autor: Julian David Molina Jaramillo
 ** CC: 1152687834
 ** Fecha: 16/12/2023
**/

//Incluimos el archivo connection
include('connection.php');

$conect = connection();

//Definimos un Query SQL
$sql = "SELECT * FROM gce_caracteristicas";
//Ejecutamos el Query
$query = mysqli_query($conect , $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/style.css">
    <title>GC_Equipos</title>
</head>
<body>
<div class="users-form">   
    <!-- Formulario de Registro --> 
    <form action="insert_producto.php" method ="POST">
        <h1 class="h1-index"> <img src="Image/icono.png" class="icono">Registro computadores </h1>     
        <section class="container">
            <div>
                <input type="text" name="nombre" placeholder="Nombre del equipo">
                <input type="text" name="marcaProcesador" placeholder="Procesador">
                <input type="text" name="modeloDisco" placeholder="Disco">
                <input type="text" name="tamañoPantalla" placeholder="Pantalla">
            </div>

            <div>
                <input type="text" name="tipoPlaca" placeholder="Board">        
                <input type="text" name="marcaTarjeta" placeholder="Gráfica">
                <input type="text" name="tipoTeclado" placeholder="Teclado">
                <select name="estado">
                    <option value="">Estado</option>
                    <option value="Activo" >Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>

            <div>
                <input type="text" name="modeloTorre" placeholder="Modelo">
                <input type="text" name="tamañoRam" placeholder="Ram">        
                <input type="text" name="tipoMouse" placeholder="Mouse">
                <input type="text" name="stock" placeholder="Stock">  
            </div>          
        </section>
        <section class="containerdos">
            <input type="submit" value="Agregar Producto" >
        </section>
    </form>
</div>

<section class="contarinerTabla">
    <!-- tabla con los datos --> 
    <div class="users-table">
        <input  id ="boton" class="h2-index" type="submit" value="Computadores" >
        <table>
            <thead>
                <tr id ="tabla" class="colortabla">
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Board</th>
                    <th>Modelo</th>
                    <th>Procesador</th>
                    <th>Gráfica</th>
                    <th>Ram</th>
                    <th>Disco</th>
                    <th>Teclado</th>
                    <th>Mouse</th>
                    <th>Pantalla</th>
                    <th>Estado</th>
                    <th>Stock</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php 
                //Por cada producto nuevo que se encuentre en la base de datos imprime la infomracion
                while($row = mysqli_fetch_array($query)): 
                ?>
                <tr>
                    <th><?= $row['id'] ?></th>
                    <th><?= $row['nombre'] ?></th>
                    <th><?= $row['tipoPlaca'] ?></th>
                    <th><?= $row['modeloTorre'] ?></th>
                    <th><?= $row['marcaProcesador'] ?></th>
                    <th ><?= $row['marcaTarjeta'] ?></th>
                    <th><?= $row['tamañoRam']."GB" ?></th>
                    <th><?= $row['modeloDisco'] ?></th>
                    <th><?= $row['tipoTeclado'] ?></th>
                    <th><?= $row['tipoMouse'] ?></th>
                    <th><?= $row['tamañoPantalla']."''" ?></th>
                    <th><label class="switch" ><input type="checkbox" <?php echo ($row['estado'] == 1)?"checked":""?> value="si"><span class="slider round"></span></label></th>
                    <th><?= $row['stock'] ?></th>
                    <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit colortabla">Editar</a></th>
                    <th><a href="delete_producto.php?id=<?= $row['id'] ?>" class="users-table--edit colortabla2">Eliminar</a></th>             
                </tr>  
                <?php 
                endwhile;
                ?>                         
            </tbody>
        </table>
        <br>
        <a href="venta.php" class="users-table--edit">Venta De Producto</a>
    </div>
</section>
<script src="Comportamiento/apli.js" charset="utf-8"></script>
<br/>  
</body>
</html>
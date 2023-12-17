<?php
/**Codigo Fuente:
 ** Autor: Julian David Molina Jaramillo
 ** CC: 1152687834
 ** Fecha: 16/12/2023
**/

//Incluimos el archivo connection
include('connection.php');

$conect = connection();

//variables con el ID y Stock
$id = $_POST["id"];
$stock = $_POST["stock"];

//Hacemos una consulta a nuestra base de datos
$sql = "SELECT * FROM gce_caracteristicas";
$query = mysqli_query($conect , $sql);

//Buscamos el dato que deseamos obtener
while($row = mysqli_fetch_array($query)): 
   
   if ($row['id'] == $id) 
   {
    $stockActual = $row['stock'];
   }
endwhile;

//Restamos la cantidad actual de stock de la nueva cantidad
$stockNuevo = $stockActual - $stock;

//Si el stock nuevo es menor que cero saldrá un mensaje de error y no se podrá finalizar la venta
if ($stockNuevo < 0) {
    echo '<script language="javascript">alert("Stock sobrepasa el limite del inventario No es posible la venta");window.location.href="index.php"</script>';
}else 

{
    //Si todo se cumple Insertamos los valores obtenidos en la tabla y actualizamos el nuevo stock
    $sql = "UPDATE gce_caracteristicas SET stock='$stockNuevo' WHERE id='$id' ";
    //Ejecutamos el Query
    $query = mysqli_query($conect , $sql);

    //Retornamos al index 
    if ($query) {
    //Header("Location: index.php");
    echo '<script language="javascript">alert("Venta Finalizada Con Exito");window.location.href="index.php"</script>';
    }
}

?>
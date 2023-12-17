<?php
/**Codigo Fuente:
 ** Autor: Julian David Molina Jaramillo
 ** CC: 1152687834
 ** Fecha: 16/12/2023
**/

//Incluimos el archivo connection
include('connection.php');

$conect = connection();
//Obtenemos el id
$id=$_GET['id'];

//Ejecutamos el Query
$sql = "DELETE FROM gce_caracteristicas WHERE id='$id'";
$query = mysqli_query($conect , $sql);

if ($query) {
    //Retornamos al index
    //Header("Location: index.php");
    echo '<script language="javascript">alert("Producto Eliminado Con Exito");window.location.href="index.php"</script>';
}

?>
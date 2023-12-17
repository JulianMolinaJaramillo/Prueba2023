<?php
/**Codigo Fuente:
 ** Autor: Julian David Molina Jaramillo
 ** CC: 1152687834
 ** Fecha: 16/12/2023
**/

//Incluimos el archivo connection
include('connection.php');

$conect = connection();

//Obtenemos los datos en variables con le metodo POST
$id = $_POST["id"];
$name = $_POST["nombre"];
$placa = $_POST["tipoPlaca"];
$torre = $_POST["modeloTorre"];
$procesador = $_POST["marcaProcesador"];
$tarjeta = $_POST["marcaTarjeta"];
$ram = $_POST["tamañoRam"];
$disco = $_POST["modeloDisco"];
$teclado = $_POST["tipoTeclado"];
$mouse = $_POST["tipoMouse"];
$pantalla = $_POST["tamañoPantalla"];
$est = $_POST["estado"];
$stock = $_POST["stock"];

//Validamos el estado del equipo
if($est == "Activo"){
    $est = 1;
}else{
    $est = 0;
}

//Si todo se cumple Insertamos los valores obtenidos en la tabla
$sql = "UPDATE gce_caracteristicas SET nombre='$name', tipoPlaca='$placa', modeloTorre='$torre', marcaProcesador='$procesador', marcaTarjeta='$tarjeta',
 tamañoRam='$ram', modeloDisco='$disco', tipoTeclado='$teclado', tipoMouse='$mouse', tamañoPantalla='$pantalla', estado='$est', stock='$stock' WHERE id='$id' ";
//Ejecutamos el Query
$query = mysqli_query($conect , $sql);

//Validamos si hay un envio
if ($query) {
    //Retornamos al index
    //Header("Location: index.php");
    echo '<script language="javascript">alert("Producto Actualizado Con Exito");window.location.href="index.php"</script>';
}
?>
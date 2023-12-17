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
$id = null;
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

if($est == "Activo"){
    $est = 1;
}else{
    $est = 0;
}

//Validamos que las casillas esten llenas
if ($name == "") {
    echo '<script language="javascript">alert("Falta Nombre");window.location.href="index.php"</script>';
}elseif ($placa == "") {
    echo '<script language="javascript">alert("Falta Board");window.location.href="index.php"</script>';
}elseif ($torre == null) {
    echo '<script language="javascript">alert("Falta Modelo de la Torre");window.location.href="index.php"</script>';
}elseif ($procesador == null) {
    echo '<script language="javascript">alert("Falta Procesador");window.location.href="index.php"</script>';
}elseif ($tarjeta == "") {
    echo '<script language="javascript">alert("Falta Tarjeta Gráfica");window.location.href="index.php"</script>';
}elseif ($ram== null) {
    echo '<script language="javascript">alert("Falta Ram");window.location.href="index.php"</script>';
}elseif ($disco == "") {
    echo '<script language="javascript">alert("Falta Disco Duro");window.location.href="index.php"</script>';
}elseif ($teclado == "") {
    echo '<script language="javascript">alert("Falta Teclado");window.location.href="index.php"</script>';
}elseif ($mouse == null) {
    echo '<script language="javascript">alert("Falta Mouse");window.location.href="index.php"</script>';
}elseif ($pantalla == "") {
    echo '<script language="javascript">alert("Falta Pantalla");window.location.href="index.php"</script>';
}elseif ($stock == "") {
    echo '<script language="javascript">alert("Falta Stock");window.location.href="index.php"</script>';
}else 
{
    //Si todo se cumple Insertamos los valores obtenidos en la tabla
    $sql = "INSERT INTO gce_caracteristicas VALUES ('$id','$name','$placa','$torre','$procesador','$tarjeta','$ram','$disco',
    '$teclado', '$mouse','$pantalla','$est','$stock')";
    //Ejecutamos el Query
    $query = mysqli_query($conect , $sql);

    
    //Retornamos al index  
    if ($query) {
    //Header("Location: index.php");
    echo '<script language="javascript">alert("Producto agregado con Exito");window.location.href="index.php"</script>';
    }
}
?>
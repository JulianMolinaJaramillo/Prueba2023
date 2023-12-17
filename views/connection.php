<?php
/**Codigo Fuente:
 ** Autor: Julian David Molina Jaramillo
 ** CC: 1152687834
 ** Fecha: 16/12/2023
**/


function connection(){

    //creamos variables para la conexion con la base de satos
    $host = "localhost";
    $user = "root";
    $password = "";
    $bd = "gc_equipos";

    //Generamos la conexion
    $connect = mysqli_connect($host,$user,$password );

    //Seleccionamos la base de datos y conexion
    mysqli_select_db($connect,$bd);

    //Devolvemos la conexion
    return $connect;  
}
?>
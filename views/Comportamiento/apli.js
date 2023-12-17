/**Codigo Fuente:
 ** Autor: Julian David Molina Jaramillo
 ** CC: 1152687834
 ** Fecha: 16/12/2023
**/


//variables
const boton = document.getElementById("boton");
const tabla = document.getElementById("tabla");

//evento
boton.addEventListener('click', function(){
    tabla.classList.toggle('colortabla');
    tabla.classList.toggle('colortabla2');
});


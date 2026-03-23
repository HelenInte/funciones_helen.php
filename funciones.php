<?php
//manipulacion de strings
$texto = "Hola Mundo";
echo strlen($texto); 
echo str_replace("Mundo", "PHP", $texto); 

// 1. strlen: Devuelve la longitud de un string (conteo de caracteres).
$longitud = strlen("Hola"); 

// 2. str_replace: Reemplaza todas las apariciones de un texto por otro.
$texto = str_replace("mundo", "PHP", "Hola mundo"); 

// 3. strtolower: Convierte toda la cadena a minúsculas.
$min = strtolower("HOLA"); 

// 4. strtoupper: Convierte toda la cadena a mayúsculas.
$may = strtoupper("hola"); 

// 5. trim: Elimina espacios en blanco (u otros caracteres) del inicio y final.
$limpio = trim("  suave  "); 

// 6. substr: Devuelve una parte de una cadena (desde posición, cuántos caracteres).
$parte = substr("Abecedario", 0, 3); 

// 7. strpos: Encuentra la posición numérica de la primera aparición de un texto.
$posicion = strpos("Busca aquí", "aquí"); 

// 8. explode: Divide un string en varios pedazos y los mete en un array.
$array = explode(",", "pan,leche,huevos"); 

// 9. implode: Une elementos de un array con un conector para formar un string.
$string = implode("-", ["2026", "03", "23"]); 

// 10. ucfirst: Convierte a mayúscula solo el primer carácter de la cadena.
$nombre = ucfirst("pedro"); 

// Manejo de Arrays
// 11. count: Cuenta todos los elementos de un array.
$total = count([10, 20, 30]); 

// 12. array_push: Inserta uno o más elementos al final del array.
array_push($frutas, "Manzana");





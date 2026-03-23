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

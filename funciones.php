<?php
//manipulacion de strings
$texto = "Hola Mundo";
echo strlen($texto); 
echo str_replace("Mundo", "PHP", $texto); 

// 1. strlen: Devuelve la longitud de un string (conteo de caracteres).
$longitud = strlen("Hola"); // 4

// 2. str_replace: Reemplaza todas las apariciones de un texto por otro.
$texto = str_replace("mundo", "PHP", "Hola mundo"); // "Hola PHP"

// 3. strtolower: Convierte toda la cadena a minúsculas.
$min = strtolower("HOLA"); // "hola"

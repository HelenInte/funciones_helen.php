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

// 13. array_pop: Extrae y elimina el último elemento del array.
$ultimo = array_pop($frutas);

// 14. array_merge: Combina dos o más arrays en uno solo.
$unido = array_merge($lista1, $lista2);

// 15. array_keys: Devuelve todas las llaves (nombres de índices) de un array.
$llaves = array_keys(["id" => 5, "nombre" => "Ana"]); // ["id", "nombre"]

// 16. array_values: Devuelve todos los valores de un array, ignorando las llaves.
$valores = array_values(["id" => 5, "nombre" => "Ana"]); // [5, "Ana"]

// 17. in_array: Comprueba si un valor específico existe dentro de un array.
$existe = in_array("Pepsi", $bebidas); // true o false

// 18. array_key_exists: Verifica si una llave o índice específico existe.
$hay_id = array_key_exists("id", $usuario); // true o false

// 19. array_unique: Elimina valores duplicados de un array.
$unicos = array_unique([1, 2, 2, 3]); // [1, 2, 3]

// 20. sort: Ordena un array de menor a mayorr.
sort($numeros);

// 21. asort: Ordena un array manteniendo la asociación de índices (útil para diccionarios).
asort($edades);

// 22. array_filter: Filtra elementos de un array usando una función de retorno.
$pares = array_filter($numeros, fn($n) => $n % 2 == 0);

// 23. array_map: Aplica una función a cada elemento de un array.
$dobles = array_map(fn($n) => $n * 2, [1, 2, 3]); // [2, 4, 6]

// Variables y Verificaciones

// 24. isset: Determina si una variable está definida y no es NULL.
if(isset($usuario)) { ... }










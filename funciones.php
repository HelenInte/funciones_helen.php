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

// 25. empty: Determina si una variable está vacía (0, "", null, false o array vacío).
if(empty($carrito)) { ... }

// 26. is_array: Comprueba si la variable es un array.
is_array($datos); // true/false

// 27. is_numeric: Comprueba si una variable es un número o un string numérico.
is_numeric("123.5"); // true

// 28. gettype: Devuelve el tipo de dato de la variable.
echo gettype(true); // "boolean"

// 29. intval: Obtiene el valor entero de una variable.
$entero = intval("42px"); // 42

// 30. strval: Convierte una variable a tipo string.
$texto = strval(550); // "550"

// Matemáticas y Números

// 31. rand: Genera un número entero aleatorio.
$azar = rand(1, 10); // Ejemplo: 7

// 32. round: Redondea un número flotante al entero más cercano.
round(3.6); // 4

// 33. ceil: Redondea un número hacia arriba (al siguiente entero).
ceil(3.1); // 4

// 34. floor: Redondea un número hacia abajo (quita los decimales).
floor(3.9); // 3

// 35. abs: Devuelve el valor absoluto (siempre positivo).
abs(-10); // 10

// 36. number_format: Formatea un número con separadores de miles y decimales.
echo number_format(1500.5, 2, '.', ','); // "1,500.50"

// Archivos y JSON
// 37. file_get_contents: Lee un archivo completo a una cadena de texto.
$todo = file_get_contents("notas.txt");






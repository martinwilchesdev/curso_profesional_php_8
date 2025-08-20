<?php // el codigo php va dentro de estas etiquetas

echo "Hola Mundo"; // impresion por pantalla

/***********
 * Variables
*/

$nombre = "Martin"; // variable -> almacenar datos
$edad = 30; // entero
$promedio = 3.5; // flotante
$esAlumno = true; // booleano

/************************************************
 * Constantes -> su valor no puede ser modificado
*/

const escuela = "Codigo Facilito";
define("direccion", "Avenidad Alegria"); // nombre dinamico de constante / no funciona dentro de una clase

// deteccion de tipos
gettype($nombre);

/* php internamente realiza la conversion de tipos de datos (string a int o int a string) */
$numero = "20";
$numero2 = "10";
$suma = $numero + $numero2;

echo $suma; // php detecta que es una suma y convierte "20" y "10" a 20 y 10 para realizar la suma

$numero = 20.5;
echo intval($numero); // forzar la conversion a tipo int
echo strval($numero); // forzar la conversion a tipo string

/*******************************
 * Concatenacion e interpolacion
*/

$palabra = "Codigo";
$palabra2 = "Facilito";

// concatenacion
echo $palabra . " " . $palabra2;

// interpolacion -> inyectar una variable dentro de un string
echo "{$palabra} {$palabra2}"; // la interpolacion solo puede realizarse usando comillas dobles

/*****************************************
 * Extraer y buscar palabras en una cadena
*/

$apellido = substr("Wilches Pinto", 7); // extraer el string desde la posición 7
echo $apellido;

// buscar una aguja en un pajar
$bienvenido = "Bienvenido al mundo de la programacion";
$palabra = "programacion";

echo strpos($bienvenido, $palabra); // retorna el indice desde el cual inicia el string almacenado en `$palabra`

$RFC = "91 75 1A EC C7";
$buscar = " ";
$remplazar = ":";
$resultado = str_replace($buscar, $remplazar, $RFC); // remplazar los espacios en blanco por `:`
echo $resultado;

$anio = "2000";
$mes = "07";
$dia = "25";
$formato = "%s-%s-%s";

echo sprintf($formato, $anio, $mes, $dia); // generar un string formateado

/************
 * Operadores
*/

// operador ternario
$promedio = 5;
$aprobo = $promedio >= 7 ? "Aprobo" : "Reprobo";

// operador de elvis
$promedioV2 = null;
$aproboV2 = $promedioV2 ?: 15; // por defecto el valor de la variable $aproboV2 sera 15
echo $aproboV2;

// operador fusion null
$promedioV3;
$aproboV3 = $promedioV3 ?? 100; // si la variable evaluada no contiene nigun valor, por defecto se le asigna el valor 100
echo $aproboV3;

/************************
 * Estructuras de control
*/

// match v8
$camisa = "Verde";

// retorna el valor que coincide con la evaluacion realizada (PHP v8+)
echo match($camisa) {
    "Amarillo" => "La camisa es amarilla",
    "Verde" => "La camisa es verde"
};

/**********
 * Arreglos
*/
$array = ["Martin", "Eduardo"];
echo $array[0]; // se accede al elemento ubicado en la primera posicion del arreglo

// iterar el contenido de un arreglo mediante un foreach
foreach($array as $index => $value) {
    echo "{$index} - {$value}";
}

// arreglos asociativos
$datos = [
    "nombre" => "Martin",
    "apellido" => "Wilches",
    "edad" => 31
];

// se accede al contenido del arreglo asociativo a traves de los valores no por indices
var_dump($datos["apellido"]);

foreach($datos as $key => $value) {
    echo "{$key} - {$value}";
}

// actualizar un arreglo
$alumnos = ["Martin", "Eduardo"];
$info = [
    "nombre" => "Martin",
    "edad" => 31
];

// agregar un elemento a un arreglo
array_push($alumnos,"Maria");
$info["ciudad"] = "Bucaramanga";

var_dump($info);

// eliminar un elemento de un arreglo
unset($alumnos[1]);

var_dump($alumnos);

// retornar la longitud de un arreglo
var_dump(count($alumnos));

// reemplazar un valor dentro de un arreglo (no modifica el arreglo original)
$test = array_replace($info, [
    "edad" => 32
]);

var_dump($test);
?>

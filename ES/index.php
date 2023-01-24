<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP básico</title>
</head>

<body>
    <a href="https://www.w3schools.com/php/default.asp">
        <h1>PHP básico, primera parte</h1>
    </a>

    <a href="https://www.w3schools.com/php/php_syntax.asp">
        <h2>Sintaxis básica</h2>
    </a>
    <ol>
        <li>Un script en PHP comienza con <strong>
                < ? php</strong> y termina con <strong>? ></strong></li>
        <li>La extensión de un archivo es <strong>.php</strong></li>
        <li>Cada declaración termina con <strong>;</strong></li>
    </ol>

    <a href="https://www.w3schools.com/php/php_variables.asp">
        <h2>Variables</h2>
    </a>
    <p>Una variable es un espacio almacenado en el programa que contiene un valor. Se puede modificar su valor. Reglas de una variable en php:</p>
    <ol>
        <li>Empieza con el signo <strong>$</strong></li>
        <li>Puede empezar con una letra o un guión bajo, nunca con un número.</li>
        <li>Puede contener solo caracteres alfanuméricos y guión bajo.</li>
        <li>Distingue mayúsculas y minúsculas.</li>
    </ol>

    <a href="https://www.w3schools.com/php/php_constants.asp">
        <h2>Constantes</h2>
    </a>
    <p>Una constante al igual que una variable también es un espacio almacenado en el programa que contiene un valor. Se diferencia de la variable porque no se puede modificar su valor durante la ejecución del script. Características:</p>
    <ol>
        <li>El alcance de la constante es global.</li>
        <li>La manera de definir una constante dentro de una clase es diferente que hacerlo en un script.</li>
        <li>En script: <strong>define('NOMBREDELACONSTANTE', 'valor-de-la-constante');</strong></li>
        <li>En clase: <strong>const NOMBREDELACONSTANTE = 'valor-de-la-constante';</strong></li>
        <li>Por convención los identificadores de las constantes siempre se declaran en mayúsculas aunque reconozca minúsculas.</li>
    </ol>

    <a href="https://www.w3schools.com/php/php_datatypes.asp">
        <h2>Tipos de datos</h2>
    </a>
    <ol>
        <li><strong>String: </strong>es una secuencia de caracteres, usa comillas</li>
        <li><strong>Integer: </strong>número no decimal, puede ser negativo o positivo</li>
        <li><strong>Float or Double: </strong>número decimal</li>
        <li><strong>Boolean: </strong>contiene dos estados, verdadero o falso (true / false)</li>
        <li><strong>Array: </strong>es el conjunto de múltiples valores dentro de una sola variable, existen 3 tipos, arrays simples o indexados, arrays asociativos con llave=>valor y arrays multidimensionales (arrays que contienen otros arrays)</li>
        <li><strong>Object: </strong>es una instancia de una clase</li>
        <li><strong>NULL: </strong>no tiene ningún valor</li>
    </ol>

    <a href="https://www.w3schools.com/php/php_echo_print.asp">
        <h2>Imprimir en pantalla</h2>
    </a>
    <ol>
        <li><strong>Echo</strong></li>
        <li><strong>Print</strong></li>
    </ol>

    <h2>Ejercicios</h2>
    <h3>Básicos</h3>
    <ul>
        <li>Clonar este repo de php dentro de tu carpeta htdocs de xampp o mamp. No te olvides de encender el servidor.</li>
        <li>Ejercicio 1: Crear una variable por cada tipo de dato (excepto objeto).</li>
        <li>Ejercicio 2: Imprimir las variables en pantalla (Averigua cómo imprimir el valor booleano (que imprima true o false), un array y un valor nulo (que imprima NULL).</li>
    </ul>
    <h4>Resultados de ejercicios de tipo básicos:</h4>

    <?php
    //BÁSICOS
    //Ejercicio 1 -> Crear una variable por cada tipo de dato (excepto objeto).

    $string = '"Hola"';
    //Continúa escribiendo tu código aquí...
    $integer = 5;
    $float = 1.2;
    $boolean = true;
    $arrayOk = array("key1" => "value1","key2" => "value2" );

    // class objectOk {

    //     function do_foo() {
    //     echo "doing foo.";
    //     }
    // };
    $null = null;

    //Ejercicio 2 -> Imprimir las variables en pantalla (Averigua cómo imprimir el valor booleano (que imprima true o false), un array y un valor nulo (que imprima NULL).

    //Escribe tu código aquí...
    print_r($string);
    echo "<hr/>";
    print_r($integer);
    echo "<hr/>";
    print($float);
    echo "<hr/>";
    print_r(is_bool($boolean));
    echo "<hr/>";
    print_r($arrayOk);
    echo "<hr/>";
    print_r(gettype($null));

    ?>

    <h3>De tipo Strings</h3>
    <ul>
        <li>Ejercicio 3: Crea una variable de tipo string cuyo valor sea 'Hola Mundo' e imprime en pantalla.</li>
        <li>Ejercicio 4: Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la variable original.</li>
        <li>Ejercicio 5: Imprime en pantalla la longitud de la variable tipo string.</li>
        <li>Ejercicio 6: Imprime en pantalla la cantidad de palabras de la variable tipo string.</li>
        <li>Ejercicio 7: Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la variable original.</li>
        <li>Ejercicio 8: Reemplaza la palabra 'Hola' de tu variable original a 'Holi' e imprime en pantalla.</li>
        <li>Ejercicio 9: Crea una nueva variable con el valor de 'Comenzamos con PHP' e imprime la concatenación de tu variable inicial y ésta segunda.</li>
        <li>Ejercicio 10: Crea una constante con tu nombre e imprime en pantalla.</li>
    </ul>
    <h4>Resultados de ejercicios de tipo strings:</h4>

    <?php
    //EJERCICIOS TIPO DE DATOS STRINGS
    //Ejercicio 3 -> Crea una variable de tipo string cuyo valor sea 'Hola Mundo' e imprime en pantalla.

    //Escribe tu código aquí...
    echo "Ejercicio 3:"."<br/>";
    $hola = "Hola Mundo";
    echo $hola."<hr/>";

    //Ejercicio 4 -> Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la variable original.

    //Escribe tu código aquí...
    echo "Ejercicio 4:"."<br/>";
    echo strtoupper($hola."<hr/>");

    //Ejercicio 5 -> Imprime en pantalla la longitud de la variable tipo string.

    //Escribe tu código aquí...
    echo "Ejercicio 5:"."<br/>";
    echo strlen($hola);

    //Ejercicio 6 -> Imprime en pantalla la cantidad de palabras de la variable tipo string.

    //Escribe tu código aquí...
    echo "<hr/>"."Ejercicio 6:"."<br/>";
    echo str_word_count($hola, 0);

    //Ejercicio 7 -> Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la variable original.

    //Escribe tu código aquí...
    echo "<hr/>"."Ejercicio 7:"."<br/>";
    echo strrev($hola);

    //Ejercicio 8 -> Reemplaza la palabra 'Hola' de tu variable original a 'Holi' e imprime en pantalla.

    //Escribe tu código aquí...
    echo "<hr/>"."Ejercicio 8:"."<br/>";
    $hola = "holi";
    echo $hola."<hr/>";

    //Ejercicio 9 -> Crea una nueva variable con el valor de 'Comenzamos con PHP' e imprime la concatenación de tu variable inicial y ésta segunda. 

    //Escribe tu código aquí...
    echo "Ejercicio 9:"."<br/>";

    //Ejercicio 10 -> Crea una constante con tu nombre e imprime en pantalla.
    
    //Escribe tu código aquí...
    echo "Ejercicio 10:"."<br/>";
    ?>

    <h3>De tipo Integer y Double</h3>
    <ul>
        <li>Ejercicio 11: Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla.</li>
        <li>Ejercicio 12: Suma ambas variables de tipo integer e imprime en pantalla.</li>
        <li>Ejercicio 13: Resta ambas variables e imprime en pantalla.</li>
        <li>Ejercicio 14: Multiplica ambas variables e imprime en pantalla.</li>
        <li>Ejercicio 15: Divide ambas variables e imprime en pantalla.</li>
        <li>Ejercicio 16: Calcula el módulo de ambas variables e imprime en pantalla.</li>
        <li>Ejercicio 17: Declara dos variables y dale un valor de tipo double e imprime ambas en pantalla.</li>
        <li>Ejercicio 18: Repite los pasos del 2 al 6 pero para las variables de tipo double e imprime en pantalla.</li>
        <li>Ejercicio 19: Declara una variable de tipo integer con un valor negativo y cambia con una función propia de php al valor positivo e imprime en pantalla.</li>
        <li>Ejercicio 20: Declara una variable de tipo double y redondea su valor, imprime en pantalla.</li>
        <li>Ejercicio 21: Obtén un número aleatorio del 1 al 100 e imprime en pantalla.</li>
    </ul>
    <h4>Resultados de ejercicios de tipo integer y double:</h4>

    <?php
    //EJERCICIOS TIPO DE DATOS INTEGER Y DOUBLE
    //Ejercicio 11 -> declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla.

    //Escribe tu código aquí...
    echo "Ejercicio 11:"."<br/>";

    //Ejercicio 12 -> suma ambas variables de tipo integer e imprime en pantalla.

    //Escribe tu código aquí...
    echo "Ejercicio 12:"."<br/>";

    //Ejercicio 13 -> resta ambas variables de tipo integer e imprime en pantalla.

    //Escribe tu código aquí...
    echo "Ejercicio 13:"."<br/>";

    //Ejercicio 14 -> multiplica ambas variables de tipo integer e imprime en pantalla.
    echo "Ejercicio 14:"."<br/>";

    //Escribe tu código aquí...

    //Ejercicio 15 -> divide ambas variables de tipo integer e imprime en pantalla.

    //Escribe tu código aquí...
    echo "Ejercicio 15:"."<br/>";

    //Ejercicio 16 -> calcula el módulo de ambas variables de tipo integer e imprime en pantalla.

    //Escribe tu código aquí...
    echo "Ejercicio 16:"."<br/>";

    //Ejercicio 17 -> declara dos variables y dale un valor de tipo double e imprime ambas en pantalla.

    //Escribe tu código aquí...
    echo "Ejercicio 17:"."<br/>";

    //Ejercicio 18 -> repite los pasos del 2 al 6 pero para las variables de tipo double e imprime en pantalla.

    //Escribe tu código aquí...
    echo "Ejercicio 18:"."<br/>";

    //Ejercicio 19 -> declara una variable de tipo integer con un valor negativo y cambia con una función propia de php al valor positivo e imprime en pantalla.

    //Escribe tu código aquí...
    echo "Ejercicio 19:"."<br/>";

    //Ejercicio 20 -> Declara una variable de tipo double y redondea su valor, imprime en pantalla.

    //Escribe tu código aquí...
    echo "Ejercicio 20:"."<br/>";

    //Ejercicio 21 -> obtén un número aleatorio del 1 al 100 e imprime en pantalla.

    //Escribe tu código aquí...
    echo "Ejercicio 21:"."<br/>";
    ?>

    <h3>De tipo Array</h3>
    <ul>
        <li>Ejercicio 22: Declara un array con datos de tipo string e imprime en pantalla.</li>
        <li>Ejercicio 23: Obtén el largo del array e imprime en pantalla.</li>
        <li>Ejercicio 24: Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla.</li>
        <li>Ejercicio 25: Ahora agrega 2 elementos más a tu array e imprime en pantalla.</li>
        <li>Ejercicio 26: Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.</li>
    </ul>
    <h4>Resultados de ejercicios de tipo array:</h4>

    <?php
    //EJERCICIOS TIPO DE DATOS ARRAY
    //Ejercicio 22 -> declara un array con datos de tipo string e imprime en pantalla.

    //Escribe tu código aquí...
    echo "Ejercicio 22:"."<br/>";

    //Ejercicio 23 -> obtén el largo del array e imprime en pantalla.

    //Escribe tu código aquí...
    echo "Ejercicio 23:"."<br/>";

    //Ejercicio 24 -> agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla.

    //Escribe tu código aquí...
    echo "Ejercicio 24:"."<br/>";

    //Ejercicio 25 -> ahora agrega 2 elementos más a tu array e imprime en pantalla.

    //Escribe tu código aquí...
    echo "Ejercicio 25:"."<br/>";

    //Ejercicio 26 -> crea un nuevo array y concaténalo con el anterior e imprime en pantalla.

    //Escribe tu código aquí...
    echo "Ejercicio 26:"."<br/>";
    ?>

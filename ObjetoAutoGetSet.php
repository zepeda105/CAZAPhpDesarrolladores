<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 15/05/2016
 * Time: 04:02 PM
 */

    //=== LLAMADA CLASES ===
        include_once "ClaseAutoGetSet.php";



    //=== CREAR OBJETO ===

        $miAuto = new ClaseAutoGetSet();
        $miAuto->manofacturado = "Volkswagen";
        $miAuto->modelo = "Beetle";
        $miAuto->color = "rojo";
        $miAuto->motor = 1.8;
        $miAuto->otrosColores = array("verde", "azul", "morado");

        /* |--------------------------------------------------------
         * |=== COMPROBAR LOS METODOS __get Y __set
         * |--------------------------------------------------------
         * |Se creo el objeto $miAuto y se establecen cinco propiedades
         * |$manofacturado, $modelo, $color de modo que estas propiedades
         * |se en "Volkswagen", "Beetle", "rojo".
         * |
         * |La cuarta propiedad, $motor, no existe en la clase, por eso
         * |se llama al metodo __set(); este a su vez crea un elemento
         * |de tabla en $_datosAdicionales, con una clave "$motor" y un
         * |valor de 1.8.
         * |
         * |De forma similar, la quinta propiedad, $otrosColores, tampoco
         * |existe en la clase "ClaseAutoGetSet.php", por eso se llama a
         * |__set(), creando un elemento de tabla en $_datosAdicionales
         * |con una clave de "$otrosColores" que almacena el valor pasado,
         * |que en este caso es una tabla que contiene las cadenas "verde",
         * |"azul", "morado"
         *
         *
         *
         * */


   //=== MOSTRAR EN PANTALLA ===

        echo "<h1>Ejercicio con __get y __set. </h1>";
        echo "<br/>";
        echo "<br/>";
        echo "<h2>Algunas propiedades:</h2>";
        echo "<br/>";
        echo "<p>Mi auto es manofacturado por ".$miAuto->manofacturado."</p>";
        echo "<p>Mi auto tieneun motor ".$miAuto->motor."</p>";
        echo "<p>Mi auto usa gasolina de tipo ".$miAuto->tipoGasolina."</p>";
        echo "<h2>El \$miAuto Objecto: </h2><pre>";
        print_r($miAuto);
        echo "</pre>";

        /* |------------------------------------------------------------------
         * |=== PROPIEDADES DEL OBJETO $miAuto ===
         * |------------------------------------------------------------------
         * |Observe que para el codigo llamante, la propiedad $motor es
         * |tan real como la propiedad $manofacturado, aunque la propiedad
         * |$motor no existe en la clase "ClaseAutoGetSet.php".
         * |El script tambien intenta recuperar el valor de una propiedad
         * |denominada $tipoGasolina; puesto que esta no existe en la clase
         * |o en la tabla $_datosAdicionales, el metodo __get() devuelve null
         * |al codigo llamante. Esta es la razon po la que no se muestra
         * |ningun valor en la pagina.
         * |
         * |Finalmente, el script vuelca los contenidos del objeto $miAuto
         * |al utilizar la funcion print_r().
         * |Observe que las "propiedades" adicionales, $motor, $otrosColores
         * |se almacenan dentro de la tabla privada $_datosAdicionales(Puede
         * |ver que print_r()tambien muestra las propiedades privadas dentro
         * |de un objeto, lo que es util para la depuracion.)
         * |
         * |Aunque las propiedades no existen se guardan en una tabla privada
         * |en este ejemplo, igualmente se podrian haber guardado en un archivo
         * |o una tabla de base de datos, o pasado via una API(Interfaz de programacion
         * |de aplicacion a otra aplicacion.
         * |Esto le da una idea de __get() y __set().
         * |
         *
         * */











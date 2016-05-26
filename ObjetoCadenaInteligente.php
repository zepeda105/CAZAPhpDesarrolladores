<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 16/05/2016
 * Time: 06:40 PM
 */

    // === AGREGAR CLASES ===

    include_once "ClaseCadenaInteligente.php";

    // === TITULO ===

    echo "<h1>Creacion de envoltorio de Clase con __call()</h1><br/>";

    // === CREAR OBJETO ===

    $objetoMiCadena = new ClaseCadenaInteligente();
    $objetoMiCadena->setMetodoCadena("Hola Carlos Zepeda");

    // === MOSTRAR EN PANTALLA ===

    echo "<p>La cadena es: ".$objetoMiCadena->getMetodoCadena()."</p>";
    echo "<p>La longitud de la cadena es: ".$objetoMiCadena->strlen()."</p>";
    echo "<p>La cadena muestra en mayusculas: ".$objetoMiCadena->strtoupper()."</p>";
    echo "<p>La letra 'C' tiene la posicion: ".$objetoMiCadena->strpos("C")."</p>";

    // === LA CLASE RESPONDE QUE NO EXITE EL METODO INVOCADO ===

    $objetoMiCadena->madeUpMethod();

    /* |--------------------------------------------------------------------
     * |==== COMO FUNCIONA ====
     * |--------------------------------------------------------------------
     * | Las primeras dos llamadas de "metodo" atraves del objeto, "$objetoMiCadena->strlen()"
     * | y "$objetoMiCadena->strtoupper()", no tiene ningun argumento porque su funciones
     * | PHP equivalente solamente requieren un argumento, la cadena con la que trabajar, y
     * | esto se completa automaticamente con la cadena almacenada gracias al metodo
     * | __call(). La tercera llamada de metodo, "$objetoMyCadena->strpos("C")", requiere
     * | un unico argumento, la cadena a buscar, que luego se pasa como segundo
     * | argumento a la funcion strpos() de PHP.
     * |
     * */












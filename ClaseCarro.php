<?php

/**
 * Created by PhpStorm.
 * User: win7
 * Date: 12/05/2016
 * Time: 11:58 PM
 */
class ClaseCarro{

    public function __get($propiedadNombre){
        // TODO: Implement __get() method.
        echo "El valor de '$propiedadNombre' fue requerida <br/>";
        return "azul";
    }

    
}
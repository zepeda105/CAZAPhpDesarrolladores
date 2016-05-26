<?php

/**
 * Created by PhpStorm.
 * User: win7
 * Date: 25/05/2016
 * Time: 12:42 AM
 */
class ClaseSobreCargaDeMetodos{

    /* |-------------------------------------------------------
     * |===== OTROS METODOS DE SOBRECARGA =====
     * |-------------------------------------------------------
     * | Aunque probablemente no los utilizara mucho, merece mencionar otros
     * | tres metodos de sobrecarga proporcionados por PHP:
     * |
     * | __isset(): Se llama cuando el codigo llamante intenta llamar a la
     * | funcion "isset()" de PHP en una propiedad invisible. Toma un argumento,
     * | el nombre de propiedad,y deberia devolver "true" si la propiedad se considera
     * | que esta "establecida", y "false" de lo contrariio:
     * |
     * */

    //=== FUNCION __isset() ===


    public function __isset($popiedadNombre){
        // TODO: Implement __isset() method.
        // Todas las propiedades que comienzan por "pueba" estan "estblecidas"

        return (substr($popiedadNombre, 0, 6)== "prueba") ? true : false;

    }

    // === FUNCION __unset
    /* |---------------------------------------------------------------------------
     * | __unset(): Se llama cuando el codigo llamante intenta eliminar una
     * | propiedad invisible con la funcion "unset()" de PHP. No deberia devolver un valor,
     * | pero deberia hacer lo que fuera necesario para "no establecer" la propiedad
     * | (si aplica):
     * |
     * */

    public function __unset($propiedadNombre){
        // TODO: Implement __unset() method.
        echo "Fue destruida la siguiente propiedad '$propiedadNombre' <br/>";

    }

}
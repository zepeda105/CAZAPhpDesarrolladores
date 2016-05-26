<?php

/**
 * Created by PhpStorm.
 * User: win7
 * Date: 15/05/2016
 * Time: 03:08 PM
 */
class ClaseAutoGetSet
{
    //=== PROPIEDADES ===

        public $manofacturado;
        public $modelo;
        public $color;
        private $_datosAdicionales = array();

    //=== METODOS ===


        public function __get($nombreDePropiedad){
            // TODO: Implement __get() method.
            if (array_key_exists($nombreDePropiedad, $this->_datosAdicionales)){
                    return $this->_datosAdicionales[$nombreDePropiedad];
            }else{
                    return null;
            }
        }
    
        /* |------------------------------------------------------------
         * |=== COMO FUNCIONA __get ===
         * |------------------------------------------------------------
         * |El metodo __get() busca el nombre de la propiedad slicitada en las
         * |solicitada en las claves de la tabla $_datosAdicionales devolviendo
         * |el valor correspondiente en la tabla (si se encuentra). 
         * 
         * */
    

        public function __set($nombreDePropiedad, $valorDePropiedad){
            // TODO: Implement __set() method.
            $this->_datosAdicionales[$nombreDePropiedad]= $valorDePropiedad;
        }

        /* |----------------------------------------------------------------
         * |=== COMO FUNCIONA __set ===
         * |----------------------------------------------------------------
         * |El metodo correspondiente __set() toma el nombre y valor de propiedad
         * |proporcionado y guarda el valor en ta tabla $_datosAdicionales, a la
         * |que se accede con clave por el nombre de propiedad.
         * |
         * */
    
}
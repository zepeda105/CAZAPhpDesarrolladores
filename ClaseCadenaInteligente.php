<?php

/**
 * Created by PhpStorm.
 * User: win7
 * Date: 16/05/2016
 * Time: 06:38 PM
 */
    class ClaseCadenaInteligente{

        /* | --------------------------------------------------------
         * | === SOBRECARGAR LLAMADAS DE METODO CON __call() ===
         * | --------------------------------------------------------
         * | Igual que puede utilizar __get() y __set() para gestionar
         * | leer y escribir propiedades no existentes, puede tambien
         * | utilizar __call() para gestionar llamadas a metodos no
         * | existentes de una clase.
         * |
         * | Simplemente cree un metodo denominado __call() en su clase
         * | que acepta el nombre del metodo no existente como una cadena,
         * | y cualquier argumento pasado al metodo no existente como
         * | una tabla.
         * |
         * | El metodo deberia luego devolver un valor (si alguno) al
         * | codigo llamante.
         * |
         * | __call() es muy util si quiere crear una clase "envoltorio"
         * | que no contiene mucha funcionalidad por si misma, pero
         * | que en su lugar no toca las llamadas de metodos a funciones
         * | externas o API para procesamiento.
         * |
         * */

        //=== PROPIEDADES ===

        private $_propiedadDeCadena = "";
        private static $_propiedadFuncionPermitida = array("strlen", "strtoupper", "strpos");

        /* |------------------------------------------------------------
         * |=== COMO FUNCIONA ===
         * |------------------------------------------------------------
         * | La clase "ClaseCadenaInteligente.php" sirve para dos propositos:
         * | almacena una cadena en la que operar, y proporcina acceso basado
         * | en metodo para tres funciones de cadena incorporadas que operan
         * | en la cadena almacenada:
         * |
         * |    strlen() para calcular la longitud de la cadena.
         * |    strtoupper() para convertir la cadena a letras mayuscula.
         * |    strpos() para encontrar la posicion de la primera coicidencia
         * |             de un caracter en la cadena.
         * |
         * | Como se ha mencionado anteriormente, es una buena practica encapsular
         * | los miembros de una clase tanto como sea posible para que la clase sea
         * | robusta y administrable.
         * |
         * | Para este fin, la cadena almacenada se encapsula en una propiedad privada,
         * | $_propiedadDeCadena; el codigo llamante puede utilizar los metodos
         * | publicos setMetodoCadena() y getMetodoCadena() para establecer y leer
         * | el valor de la cadena.
         * |
         * |
         * |
         * */


        // === METODOS ===

        public function setMetodoCadena($parametroValorCadena){
            $this->_propiedadDeCadena = $parametroValorCadena;
        }

        public function getMetodoCadena(){
            return $this->_propiedadDeCadena ;
        }

        public function __call($parametroMetodoNombre, $parametroArgumentos){
            if (in_array($parametroMetodoNombre, ClaseCadenaInteligente::$_propiedadFuncionPermitida)){
                    array_unshift($parametroArgumentos, $this->_propiedadDeCadena);
                        return call_user_func_array($parametroMetodoNombre, $parametroArgumentos);
            }else{
                die( "<p>Metodo 'ClaseCadenaInteligente::$parametroMetodoNombre' no existe</p>");
            }
        }

        /* |----------------------------------------------------------------------
         * |==== El Metodo __call()===
         * |----------------------------------------------------------------------
         * | El metodo __call() es donde reside lo mas importante de la clase:
         * | 
         * | En primer lugar, el metodo almacena el nombre del metodo que se llamo
         * | en un parametro "$parametroMetodoNombre" y la tabla que contiene cualquier
         * | argumento pasado se almacena en el parametro "$parametroArgumentos"
         * |
         * | A continuacion, el metodo comprueba que "$parametroMetodoNombre" este
         * | contenido en la tabla "ClaseCadenaInteligente::$_propiedadFuncionPermitida"
         * | Es una propiedad estatica privada, creada al principio de la clase
         * | que contiene los nombres de metodo permitidos:
         * |
         * | private static $_propiedadFuncionPermitida = array("strlen", "strtoupper", "strpos");
         * |
         * | Si "$_propiedadFuncionPermitida" no es uno de estos tres valores,
         * | la funcion termina el script con un mensaje de error:
         * |
         * |    die( "<p>Metodo 'ClaseCadenaInteligente::$parametroMetodoNombre' no existe</p>");
         * |
         * | Esto se asegura de que solamente las funciones de cadena "strlen(), strtoupper(),
         * |  y strpos()" se pueden llamar via la clase.
         * |
         * | En realidad, la mayoria de las funciones de cadena incorporadas de PHP, se puede
         * | llamar de esta forma, pero para este sencillo ejemplo, el script permite solo que
         * | se llamen a estas tres funciones. Generalmente, por razones de seguridad es una
         * | buena idea comprobar los argumentos de esta naturaleza contra una lista de valores
         * | permitidos.
         * |
         * | Una vez que se ha validado con exito "$parametroMetodoNombre" el metodo anade el
         * | valor de cadena almacenado del objeto, "$this->_propiedadDeCadena", al principio de
         * | la tabla "$parametroArgumentos"
         * |
         * | array_unshift($parametroArgumentos, $this->_propiedadDeCadena);
         * |
         * | Esto es porque la mayoria de las funciones de cadena incorporadas, incluidas las tres que
         * | esta clase es capaz de llamar, esperan que la cadena sobre la que se opera sea el primer
         * | argumento que se les pase. Por ultimo, el metodo "__call()" esta listo para llamar a la
         * | funcion de cadena apropiada.
         * |
         * | Hace esto al utilizar la funcion PHP "call_user_func_array()", que espera el
         * | nombre de la funcion como primer argumento y la lista de argumento, como una
         * | tabla, como segundo argumento. El metodo __call() luego devuelve el valor de
         * | retorno de la funcion de cadena al codigo llamante del metodo siguiente:
         * |
         * |    return call_user_func_array($parametroMetodoNombre, $parametroArgumentos);
         * |
         * | Este script luego comprueba la clase al crear un nuevo objeto "ClaseCadenaInteligente",
         * | establecer su valor de cadena en "Hola Carlos Zepeda", mostrar el valor de cadena 
         * | almacenado, y llamar a varios metodos que operan en la cadena:             
         * |
         * */


    }









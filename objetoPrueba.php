<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 25/05/2016
 * Time: 07:15 PM
 */

    // ==== INCLUIR CLASES ====

        include_once "ClaseSobreCargaDeMetodos.php";

    // ==== CREAR UN OBJETO ====

        $pruebaObjeto = new ClaseSobreCargaDeMetodos();
         echo isset($pruebaObjeto->platano)."<br/>"; //Muestra "" (false)
         echo isset($pruebaObjeto->pruebaPlatano)."<br/>";//Muestra "1" (true)

    // ==== CREAR UN SEGUNDO OBJETO ====

        $pruebaDeObjetoDos = new ClaseSobreCargaDeMetodos();
        unset($pruebaDeObjetoDos->platano); //Muestra Fue destruida la siguiente propiedad'platano'      

    // ==== INSTANCIAR EL METODO ESTATICO __callStatic()====
    //   Elmetodo "metodoAleatorio()" no existe en la clase pero __callStatic() lo muestra ya que
    //   en la clase se considera como un metodo invisible.

        ClaseSobreCargaDeMetodos::metodoAleatorio("manzana", "pera", "uva");





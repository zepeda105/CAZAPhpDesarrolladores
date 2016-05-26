<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 12/05/2016
 * Time: 11:59 PM
 */
    include_once "ClaseCarro.php";

    $auto=new ClaseCarro();
    $x=$auto->color;
    echo "El carro es de color $x <br/>";
<?php
/**
 * Created by PhpStorm.
 * User: win7
 * Date: 12/05/2016
 * Time: 04:44 AM
 */

include_once "ClaseCuenta.php";

    // Se crea un objeto usuario.

    $usuario = new ClaseCuenta();
    $usuario->hacerDeposito(500);
    $usuario->hacerUnRetiro(100);
    echo $usuario->getBalanceTotal()." <br/> ";
    $usuario->hacerUnRetiro(1000);
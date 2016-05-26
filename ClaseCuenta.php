<?php

/**
 * Created by PhpStorm.
 * User: win7
 * Date: 12/05/2016
 * Time: 03:40 AM
 */
class ClaseCuenta
{
    // === PROPIEDADES ===

        private $_balanceTotal = 0;

    // === METODOS ===

        public function hacerDeposito($cantidadDelMonto){
            $this->_balanceTotal += $cantidadDelMonto;
        }

        public function hacerUnRetiro($cantidadDelMonto){
            if ($cantidadDelMonto < $this->_balanceTotal){
                    $this->_balanceTotal -= $cantidadDelMonto;
            } else {
                die("Fondos Insuficientes <br/>");
            }
        }

        public function getBalanceTotal(){
            return $this->_balanceTotal;
        }

}
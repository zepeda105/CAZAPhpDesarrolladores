<?php

/**
 * Created by PhpStorm.
 * User: win7
 * Date: 26/05/2016
 * Time: 08:55 PM
 */
class ClaseHerenciaParaAmpliarPotencialDeObjetos{

    /* |-------------------------------------------------------------------------------------
     * | ==== UTILIZAR HERENCIA PARA AMPLIAR EL POTENCIAL DE LOS OBJETOS ====
     * |-------------------------------------------------------------------------------------
     * | Hasta ahora, todas las clases que ha creado han sido independientes. Sin
     * | embargo, los objetos empiezan a hacerse interesantes cuando comienza a utilizar herencias.
     * |
     * | Al utilizar esta tecnica puede crear clases, conicidas como clases hijo, que se basan
     * | en otra clase: la clase padre.
     * |
     * | Una clase hijo hereda todas las propiedades y metodos de su padre, y tambien puede anadir
     * | propiedades y metodos adicionales.
     * |
     * | Lo importante sobre la herencia es que, si quiere crear muchas clases similares, tiene que
     * | escribir el codigo que tienen en comun solamente una vez, en la clase padre. Esto le ahorra
     * | dublicar codigo.
     * |
     * | Ademas, cualquier codigo exterior que puede funcionar con la clase padre automaticamente
     * | tiene la capacidad de funcionar con sus clases hijo, siempre y cuando el codigo funcione
     * | solo con las propiedades y metodos contenidos en la clase padre.
     * |
     * | Imagine que crea un programa para tratar con varias formas normales, como circulos, cuadrados,
     * | triangulos, equilateros, etc.
     * |
     * | En este ejemplo teorico, quiere crear una clase llamada "ClaseFomasGeometricas" que puede guardar
     * | informacion como numeros de lados, longitud del lado, radio y color, tambien que pueda calcular
     * | valores como el area de de la forma y el perimetro.
     * |
     * | Sin embargo, no todas las formas son iguales. Los circulos realmente no tienen un numero
     * | definido de lados, ni tampoco seria posible calcular con la misma formula el area de un tiangulo
     * | equilatero y tendriamos el mismo problema para calcular un cuadrado, con esta reflexion seria muy
     * | complicado encontrar en una sola clase todas las formulas y tambien mantener un codigo asi en un
     * | entorno de desarrollo donde dos o mas desarrolladores modifiquen la misma clase que terminaria siendo
     * | mas compleja aunado a comenter mas errores en el codigo, ya que seria una clase in legible
     * | o inentendible para los desarrolladores.
     * |
     * | Al utilizar herencia, sin embargo, puede divdir el problema en pasos mas sencillos. En primer
     * | lugar, cree una clase padre "ClasePadreDeFormasGeometricas" que contenga solo las propiedades y
     * | metodos que son comunes a todas las formas.
     * |
     * | Luego, puede crear clases hijo como "ClaseHijoDeFormasGeometricasCirculo".
     * |
     * | Para que una clase hijo pueda heredar de una clase padre es necesario utilizar la palabra clave
     * | "extends" para comprender mejor la herencia de clases mostramos un sencillo ejemplo:
     * |
     * |        class ClasePadreDeFormasGeometricas {
     * |                // (Propiedades y metodos generales de la clase padre aqui)
     * |        }
     * |
     * |        class ClaseHijoDeFormasGeometricasCirculo {
     * |               // (Propiedades y metodos especificos de Circulo aqui)
     * |        }
     * |
     * |
     * |*/
    


}

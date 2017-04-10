<?php

/**
 * Created by PhpStorm.
 * User: Pedro Ruan
 * Date: 01/04/2017
 * Time: 19:05
 */
class DistanciaEuclidiana
{

    //Calcula distancia euclidiana
    public static function obterDistanca($individuoBanco, $individuoAtual){
        $soma =
            pow(($individuoBanco->peso - $individuoAtual->getPeso()),2) +
            pow(($individuoBanco->altura - $individuoAtual->getAltura()),2);

        return sqrt($soma);
    }

}
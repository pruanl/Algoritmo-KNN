<?php

/**
 * Created by PhpStorm.
 * User: Pedro Ruan
 * Date: 02/04/2017
 * Time: 10:41
 */
class Algoritmo
{

    //retorna os dados que estava no json
    public static function retornaDados($infos){
        foreach ($infos->lista as $info){
            $dados [] = $info;
        }
    return $dados;
    }

    //compara os dados para mostrar a distancia com todos os itens do banco de dados
    public static function comparaDados($dados,$pessoas){
        for ($i = 0; $i<count($dados); $i++){
            $calculo[$i] = [
                'distancia' => DistanciaEuclidiana::obterDistanca($dados[$i],$pessoas),
                'situacao' => $dados[$i]->situacao,
                'nome' => $dados[$i]->nome,
                'idade' => $dados[$i]->idade,
                'peso' => $dados[$i]->peso,
                'altura' => $dados[$i]->altura
            ];
        }

        //$calculoEmOrdem = ordenaDados($calculo);
        return $calculo;

    }

    //ordena os dados
    public static function ordenaDados($dados){
        foreach ($dados as $key => $row){
            $distancia[$key] = $row['distancia'];
        }

        array_multisort($distancia, SORT_ASC, $dados);

        return $dados;
    }

    //mostra a lista de vizinhos baseado no K que foi solicitado
    public static function buscarVizinhos($dados, $k){

        if ($k < 3){
            $k = 3;
        }

        if ($k % 2 == 0){
            $k--;
        }


        for ($i = 0; $i < $k; $i++){
            $vizinhos[] = $dados[$i];
        }
        return $vizinhos;
    }

    //verifica o valor que mais aparece entre os k descoberto e retorna com a situação
    public static function verificarSituacao($vizinhos){
        $situacoes = array_count_values(array_map(function ($array) {
            return $array['situacao'];}, $vizinhos));

        return ( array_keys($situacoes, max($situacoes))[0] );
    }




}
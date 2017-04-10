<?php


class Json
{
    private $jsonUrl;

    //Recebe um json
    function __construct($url){
        $this->jsonUrl = $url;

    }

    //retorna um array de dados
    function retornaDadosJson (){
        $arquivo = $this->jsonUrl;
        $info = file_get_contents($arquivo);
        return json_decode($info);
    }

    function salvaLinha($dados,$pessoa){

        $dados[] = [
            'nome' => $pessoa->getNome(),
            'idade' => intval($pessoa->getIdade()),
            'altura' => intval($pessoa->getAltura()),
            'peso' => intval($pessoa->getPeso()),
            'situacao' => $pessoa->getSituacao(),
        ];

        $adicionaLinha['lista'] = $dados;
        if(file_put_contents($this->jsonUrl, json_encode($adicionaLinha))){
            return true;
        }else{
            return false;
        }
    }



}
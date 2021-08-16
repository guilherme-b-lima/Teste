<?php

echo 'TESTE<br/><br/>';
//echo <br />

class Fabricante{
    private $nome;

    public function __construct($nome){
    $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }
}

class Produto{
    private $descricao;
    private $preco;
    private $fabricante;

    public function __construct($descricao, $preco, Fabricante $fabricante){
    $this->descricao = $descricao;
    $this->preco = $preco;
    $this->fabricante = $fabricante;
    }

    public function getDetalhes(){
        return "O produto {$this->descricao} custa {$this->preco} reais. Fabricante: {$this->fabricante->getNome()}";
    }

}

$f1 = new Fabricante('Fiat');
$p1 = new Produto('carro' , 65120 , $f1);

echo $p1->getDetalhes();

//var_dump($produto1);
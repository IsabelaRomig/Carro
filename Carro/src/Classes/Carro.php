<?php

class Carro
{
    public $nome;
    public $valor;
    public $modelo;
    public $detalhe = "Veículo da marca BYD";

    public function revisao(){
        echo "A primeira revisão terá 50% de desconto na autorizada";
    }
    
    public function combustivel(){
        echo "Este veículo não utiliza gasolina, ele funciona com recarga elétrica";
    }
    
    public function kmRodado(){
        echo "Este veículo é zero quilômetro";
    }

    public function pintura(){
        echo "O cliente pode escolher a cor, cores disponíveis: prata, azul, branco ou preto";
    }
}
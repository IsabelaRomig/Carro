<?php

class Cliente
{
    public $nome;
    public $idade;
    public $endereco;
    public $telefone;

    public function comprar(){
        echo "O cliente realizou a compra";
    }

    public function troca()
    {
        echo "O cliente quer fazer uma troca de carros.";
    }
}
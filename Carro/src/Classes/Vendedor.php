<?php

class Vendedor
{
    public $identidade;
    public $nota;
    public $feedbacks;

    public function atendimento(){
        echo "O funcionário concluiu uma proposta com o cliente";
    }

    public function entrada(){
        echo "O funcionário registrou seu ponto de entrada.";
    }
}

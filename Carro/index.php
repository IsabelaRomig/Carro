<?php
require_once "src/Classes/Carro.php";
require_once "src/Classes/Cliente.php";
require_once "src/Classes/Vendedor.php";

$car1 = new Carro;
$car1-> nome = "BYD";
$car1-> modelo = "Dolphin Plus";
$car1-> detalhe = "Carro elétrico";
$car1-> valor = 149000;


$car2 = new Carro;
$car2-> nome = "Tesla";
$car2-> modelo = "Model 3";
$car2-> detalhe = "Sedan elétrico";
$car2-> valor = 250000;

var_dump($car1);
echo "<br>";
var_dump($car2);

$cliente = new Cliente;
$cliente-> nome = "Ana Paula";
$cliente-> idade = 35;
$cliente-> endereco = "Av. Brasil, 123";
$cliente-> telefone = "(41) 94002-8922";

$cliente->comprar();
echo "<br>";
var_dump($cliente);

$vendedor = new Vendedor;
$vendedor-> identidade = "Carlos Augusto";
$vendedor-> nota = 4.8;
$vendedor-> feedbacks = "Ótimo atendimento e atenção ao cliente";

$vendedor-> atendimento();
echo "<br>";
var_dump($vendedor);

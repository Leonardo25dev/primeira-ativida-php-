<?php

require_once "Veiculo.php";
require_once "Carro.php";
require_once "Moto.php";

// Criando um carro
$meuCarro = new Carro("Fiat", "Uno", 2010, "ABC-1234", 4);

// Exibindo detalhes do carro
$meuCarro->exibirDetalhes();
$meuCarro->acelerar();

echo "\n";

// Criando uma moto
$minhaMoto = new Moto("Honda", "CG 125", 2023, "DEF-5678", 125);

// Exibindo detalhes da moto
$minhaMoto->exibirDetalhes();
$minhaMoto->acelerar();


<?php

class Moto extends Veiculo {

    private $cilindrada;

    public function __construct($marca, $modelo, $ano, $placa, $cilindrada) {
        parent::__construct($marca, $modelo, $ano, $placa);
        $this->cilindrada = $cilindrada;
    }

    public function getCilindrada() {
        return $this->cilindrada;
    }

    public function setCilindrada($cilindrada) {
        $this->cilindrada = $cilindrada;
    }

    public function exibirDetalhes() {
        echo "Detalhes da Moto:\n";
        echo "Marca: " . $this->getMarca() . "\n";
        echo "Modelo: " . $this->getModelo() . "\n";
        echo "Ano: " . $this->getAno() . "\n";
        echo "Placa: " . $this->getPlaca() . "\n";
        echo "Cilindrada: " . $this->getCilindrada() . "cc\n";
    }

    public function acelerar() {
        echo "A moto está acelerando!";
    }
}

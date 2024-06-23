<?php

class Carro extends Veiculo {

    public function exibirDetalhes() {
        echo "Detalhes do Carro:\n";
        echo "Marca: " . $this->getMarca() . "\n";
        echo "Modelo: " . $this->getModelo() . "\n";
        echo "Ano: " . $this->getAno() . "\n";
        echo "Placa: " . $this->getPlaca() . "\n";
    }

    public function acelerar() {
        echo "O carro está acelerando!";
    }
}

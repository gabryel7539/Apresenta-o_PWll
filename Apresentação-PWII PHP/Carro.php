<?php

class Carro extends Veiculo{

private $potencia;

function __construct($cor, $modelo, $potencia){
    parent::__construct($cor, $modelo);
    $this->potencia = $potencia;
}


function acelerar($i){
        echo "<br> Acelerar: " . $i + $this->potencia;
    }


function frear($i){
    echo "<br> Frear: " . $i - $this->potencia;
}
}
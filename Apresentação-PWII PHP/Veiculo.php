<?php
class Veiculo{

    public $modelo;
    public $cor;
    private $velocidade;

    function __construct($cor, $modelo){
        $this -> cor = $cor;
        $this -> modelo = $modelo;
    }

    function get_velocidade(){
        return $this->velocidade;
    }


}
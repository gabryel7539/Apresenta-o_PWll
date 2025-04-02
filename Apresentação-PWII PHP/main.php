<?php

include_once("Veiculo.php");
include_once("Carro.php");

$ferr= new Carro("Vermelho", "Ferrari", 100);
$fuscPreto = new Carro("Preto", "Fusca", 50);
$fuscAzul = new Carro("Azul", "Fusca", 20);


echo "<span>Ferrari vel:" . $ferr->get_velocidade() . "</span>";
$ferr->acelerar(10);

echo "<br><span>Fusca Preto vel:" .  $fuscPreto->get_velocidade() . "</span>";
$fuscPreto->acelerar(10);

echo "<br><span>Fusca Azul vel:" .  $fuscAzul->get_velocidade() . "</span>";
$fuscAzul->acelerar(10);
$fuscAzul->frear(1);

// Aqui é como se fosse a largada;
// O pisão máximo no acelador é 10;



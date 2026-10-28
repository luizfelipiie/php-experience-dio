<?php 

require __DIR__ . '/../vendor/autoload.php'; 

use Luizf\Modulo03Composer\ContaBancaria;

$conta = new ContaBancaria();
var_dump($conta->exibirDadosDaConta()); 

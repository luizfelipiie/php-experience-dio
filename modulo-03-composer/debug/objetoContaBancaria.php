<?php 

require __DIR__ . '/../vendor/autoload.php'; 

use Luizf\Modulo03Composer\ContaBancaria;



$conta = new ContaBancaria(
    'Banco inter',
    'Luiz Peixoto',
    '1234',
    '12345-12',
    '10000'
);


var_dump($conta->exibirDadosDaConta()); 

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

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->depositar(50);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;

echo $conta->sacar(30);
echo PHP_EOL;

echo $conta->obterSaldo();
echo PHP_EOL;


var_dump($conta->exibirDadosDaConta());
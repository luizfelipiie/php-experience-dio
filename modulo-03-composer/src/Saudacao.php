<?php
namespace Luizf\Modulo03Composer;

class Saudacao
{
    public function ola(string $nome): string
    {
        return "Olá, $nome! O autoload funcionou.";
    }
}
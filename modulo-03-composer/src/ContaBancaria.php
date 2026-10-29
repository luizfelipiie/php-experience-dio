<?php

declare(strict_types=1); 

namespace Luizf\Modulo03Composer; 

class ContaBancaria
{
    private string $Banco;
    private string $NomeTitular;
    private string $NumeroAgencia;
    private string $NumeroConta;
    private float $Saldo; 

    public function __construct(
        string $Banco,
        string $NomeTitular,
        string $NumeroAgencia,
        string $NumeroConta, 
        float $Saldo,
    ) {
        $this->Banco = $Banco;
        $this->NomeTitular = $NomeTitular;
        $this->NumeroAgencia = $NumeroAgencia;
        $this->NumeroConta = $NumeroConta; 
        $this->Saldo = $Saldo;
    }

    public function exibirDadosDaConta(): array
    {
        return [
            'Banco' => $this-> Banco, 
            'NomeTitular' => $this-> NomeTitular, 
            'NumeroAgencia' => $this-> NumeroAgencia,
            'NumeroConta' => $this -> NumeroConta,
            'Saldo' => $this -> Saldo,
        ]; 
    }

    public function depositar(float $valor): string
    {
        $this->Saldo += $valor;
        return 'depósito de R$ ' . number_format($valor, 2, ',', '') . 'realizado';
    }

    public function sacar(float $valor): string 
    {
        $this->Saldo -= $valor;
        return 'saque de R$ ' . number_format($valor, 2, ',', '') . 'realizado';
    }

    public function obterSaldo(): string
    {
        return 'seu saldo atual é: R$ ' . number_format($this->Saldo, 2, ',', '');
    }

    public function getBanco(): string
    {
            return $this->Banco; 
    }
    public function getNomeTitular(): string
   {
        return $this->NomeTitular;
   }

   public function getNumeroAgencia(): string
   {
        return $this->NumeroAgencia;
   }

   public function getNumeroConta(): string
   {
        return $this->NumeroConta;
   }

   public function getSaldo(): float
   {
        return $this->Saldo;
   }
}


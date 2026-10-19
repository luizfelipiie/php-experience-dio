<?php 

function f1()
{
    echo ">f1 está antes da exceção<br>";
}

function f2($int)
{
    if(!is_int($int))
    {
        throw new Exception("o argumento não é do tipo esperado");
}
else 
    {
        echo "> f2 está na exceção<br>";
    }

f3();
}

function f3()
{
    echo "> f3 está depois da exceção<br>";
}    

f1();
try {
    f2(int: 5);
} catch (Exception $e) {
    echo ">Erro capturado: " . $e->getMessage();
}
f3();
//diferente do código da aula coloquei no meu o try/catch
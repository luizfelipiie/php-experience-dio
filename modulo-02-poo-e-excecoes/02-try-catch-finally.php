<?php 

function divisao($dividendo, $divisor) 
{
    try {
        if($divisor == "0")
        {
                throw new RangeException("o número não pode ser dividido por zero");
            }   
                
        $resultado = ($dividendo/ $divisor);

        echo "o resultado é igual a: ". $resultado;
        }catch(Exception $e) {
            echo "o resultado é:". $e->getMessage();
        }
        finally { 
            echo "<br/> tratando exceções";
        }

}
    
divisao(10,0);
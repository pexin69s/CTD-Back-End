<h2>Estrutura de decisao</h2>
<p>
    As estruturas de condição permitem executar
    blocos distintos de codigo dado uma condição.

    <strong>Exemplo</strong>
    <pre>
        if(condicao){
            //instruções executadas
            //caso a condição seja verdadeira
        }else{
            //instruções executadas, caso 
            //a condição seja falsa.
        }
    
    </pre>    

</p>

<?php
        $media = 7;

        if($media >= 6){
            echo "O aluno foi aprovado";
        }
        else {
            echo "O aluno foi aprovado";
        }
?>

<p>--------------------------------------</p>
media >= 6 | aprovado <br>
6 < media >= 3   | exame <br>
media < 3        | reprovado <br> 


        <?php
            $media = 4;

        if($media >= 6){
            echo "O aluno foi aprovado";
        }
        else if($media >= 3){
                echo "O aluno foi de recuperação";
        }
            else {
                echo "O aluno foi reprovado";
        }
?>

<p> O PHP faz a conversão automatica de alguns tipos para verdadeiro ou falso </p>
    <strong>True</strong>
    <ul>
        <li>String com texto</li>
        <li>Numero maior que 0</li>
        <li>Vetor com lementos</li>
    </ul>
    
    <strong>False</strong>
    <ul>
        <li>String vazia</li>
        <li>Numero igual a 0</li>
        <li>Vetor vazio</li>
    </ul>
</p>
<?php
    if("o loco meu!"){
        echo "Verdadeiro";
    }else{
        echo "falso";
    }
?>

<?php
    $media = 4;
    
    if($media >=6 || "Quero passar de ano"){
        echo "Huhuhu, sou esperto";
    }else{
        echo "ihh, me dei mal";
    }
?>
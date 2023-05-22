<h2> Estrutura de decisão </h2>
    <p>
    As estruturas de condição permitem executar blocos distintos de código dado uma condição.
        <strong> Exemplo </strong>
            <pre>
                if(condicao){
                    //instruções executadas caso a condição seja verdadeira
                    }
                else {
                    //intruções executadas, caso a condição seja falsa
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
<br>
<p> ------------------------------------------------------- </p>
<br>


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
            else  {
                echo "O aluno foi reprovado";
            }
            
?>

<p> O PHP faz a conversão automatica de alguns tipos para verdadeiro ou falso <br>
    <strong> true </strong> 
        <ul>
            <li> String com texto </li>
            <li> Número maior que 0 </li>
            <li> Vetor com elementos </li>
        </ul>
    
    <strong> false </strong>
    <ul>
            <li> String vazia </li>
            <li> Número igual a 0 </li>
            <li> Vetor vazio </li>
        </ul>

</p>

            <?php
                if("eita bicho atos libidinosos"){
                    echo "Verdadeiro";
                }
                else {
                    echo "Falso";
                }
            ?>

<br>
            <?php 
            $media = 4;
                if($media >= 6 || "Quero passar de ano"){
                    echo "Eita, sou muito smart";
                }
                else {
                    echo "vish, sou burrao";
                }
            ?>
<h2>Operadores de atribuição</h2>
<p>
        São utilizados para armazenar
        "atribuir valores a uma variável".
</p>

    <ol>
        <li>=  | atribuição simples </li>
        <li>+= | acumula novo valor </li>
        <li>-= | subtrai o valor da variável </li>
        <li>++ | incrementa 1 ao valor da variável </li>
        <li>-- | subtrai 1 do valor da varável </li>
        <li>.= | concatena o texto ao valor da variável</li>
    </ol>

    <strong>Exemplos</strong>
    <?php
     $nota = 5; //atribui o número 5 na variável nota
     echo $nota; //imprime o número 5

     $nota += 5; // soma + 5 na variável nota - $nota = $nota + 5
     echo $nota; // imprime o número 10 (5 de antes + 5 de agora)

     $nota -= 2; // equivalente a $nota
     echo $nota; //imprime o valor 8

     $nota++; // soma 1 ao valor da variável = $nota = $nota + 1
     echo $nota; // imprime o valor 9

     $nota--; // subtrai 1 do valor da variável = $nota = $nota - 1
     echo $nota; // imprime o valor 8

     $nome = "Ariel";
     $nome .= "Floriano"; // concatena o valor anterior Ariel, com
                          // o novo valor Floriano e armazena na variável nome
     echo $nome;  // imprime Ariel Floriano

    ?>
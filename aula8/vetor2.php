<h2> Vetor indexado por texto </h2>
<pre>
    <p> Os vetores podem usar textos para indexar (identificar) os valores armazenados.
        Exemplo:
        
        +------------+
  nome  | Ariel      |
        +------------+
  nota1 | 10         |
        +------------+
  nota2 | 8          |
        +------------+

    </p>
</pre>

    <?php

    $alunos = [
        "nome" => "Ariel",
        "nota1" => 10,
        "nota2" => 8,
    ];

    $alunos["notaTotal"] = ($alunos["nota1"] + $alunos["nota2"]);
    var_dump($alunos);

    echo "<p> &nbsp; </p> <pre>";
    //imprimir todos os valores de um vetor utilizando o foreach

    foreach($alunos as $key => $value) {
        printf("%23s\n", "+------------+");
        printf("%9s | %9s |  \n", $key, $value);
        }

?>
<h2> Operadores lógicos </h2>

    <al>
        <li> and - E </li>
        <li> or - OU </li>
        <li> xor - Ou exclusivo </li>
        <li> </li>
        <li></li>
    </al>



        <?php 
            $media = 6;
            $faltas = 20;
            $criterio1 = $media > 6; //false
            $criterio2 = $faltas < 25; //true
            $resultado = $criterio1 && $criterio2; //false
            var_dump($resultado);


        ?>
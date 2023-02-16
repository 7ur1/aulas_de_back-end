<h2>Estrutura de Repetição for</h2>

<p>
    Utilizada par repetir uma sequência de
    instrução por um número predeterminado de vezes.
</p>

<p>
    <pre>
        for(inicio;condição;passo){
            //instruções a serem repetidas
        }
    </pre>
</p>

<?php
for($contador = 0; $contador < 10; $contador++){
    echo "2 X $contador = ". $contador * 2 ."<br>";

    for($contador = 0; $contador < 10; $contador++)
        echo "3 X $contador = ". $contador * 3 ."<br>";
}
?>

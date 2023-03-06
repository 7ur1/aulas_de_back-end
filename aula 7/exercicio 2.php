<h2>Exercício 2</h2>

<p>
    Crie um vetor com os nomes, conforme exemplo abaixo:
        <pre>
          --------- 
       0 |Murilo   | 
          --------- 
       1 |Poliana  |
          --------- 
       2 |Dalva    |
          --------- 
       3 |Lavinia  |
          --------- 
       4 |Kaua     |
          --------- 
    </pre>
</p>
<p>
    Imprima os nomes do vetor em formato de lista ordenada: ex:
        <br>
        1. Murilo <br>
        2. Poliana <br>
        3. .... <br>
</p>



<?php

$nomes =[];//cria um vetor vazio
$nomes[0] = "Murilo";
$nomes[1] = "Poliana";
$nomes[2] = "Dalva";
$nomes[3] = "Lavinia";
$nomes[4] = "Kaua";

echo "<ol>";
for($i = 0;$i <= 4;$i++){
  echo " <li>$nomes[$i]</li>";
}
echo "</ol>";
?>


   

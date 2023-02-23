<style>
div{
 border:1px solid #000;
}
.container{
  display:grid;
  grid-template-rows:auto auto ;
  grid-template-columns:auto auto auto auto auto ;
}
</style>

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

<div class="container">
<?php
for($tabuada = 1; $tabuada <= 10; $tabuada++){
echo "<div>";
    for($contador = 0; $contador <=10; $contador++){
    $resuldado = $tabuada * $contador; 
    echo "$tabuada x $contador =  $resuldado   <br>";
    }
   echo "</div>";
}
?>
</div>
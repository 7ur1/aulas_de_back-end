<h2>Ordenação - Ordem Alfabética</h2>

<?php

$nomes =[];//cria um vetor vazio
$nomes[0] = "Murilo";
$nomes[1] = "Poliana";
$nomes[2] = "Dalva";
$nomes[3] = "Lavinia";
$nomes[4] = "Camila";
$nomes[5] = "Kaua";

//Algoritmo Select Sort  
for($c=0;$c <=4;$c++){
for($i = $c + 1;$i <= 5;$i++){
if($nomes[$c] > $nomes[$i]){
   $celBranco =  $nomes[$i];
   $nomes[$i] = $nomes[$c];
   $nomes[$c] = $celBranco;
    }
  }
}


var_dump($nomes);

//Camila,Dalva,Kaua,Lavinia,Murilo,Poliana
?>
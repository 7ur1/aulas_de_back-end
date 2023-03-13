<h2>Exercicio 4</h2>


<?php
$mat1 = [
    "nome" => "Poliana",
    "nota1" => 7,
    "nota2" => 9
];

$mat2 = [
    "nome" => "Murilo",
    "nota1" => 8,
    "nota2" => 5
];

$mat3 = [
    "nome" => "André",
    "nota1" => 6,
    "nota2" => 7
];
$tabela = [$mat1,$mat2,$mat3];

foreach($tabela as $key => $value) {
    echo $value["nome"] ."<br>". $value["nota1"] ."<br>". $value["nota2"] ."<br>";
  }

?>
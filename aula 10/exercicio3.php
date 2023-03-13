<h2>Exercicio 3</h2>


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


for($i = 0;$i < 3;$i++){
   foreach($tabela[$i] as $key => $value) {
    echo$value ."<br>";
  }
}
?>
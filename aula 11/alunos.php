<?php
$mat1 = [
    "nome" => "Poliana Silveira",
    "nota1" => 7,
    "nota2" => 9
];

$mat2 = [
    "nome" => "Murilo Alexandre",
    "nota1" => 8,
    "nota2" => 5
];

$mat3 = [
    "nome" => "André Felipe",
    "nota1" => 6,
    "nota2" => 7
];

$mat4 = [
    "nome" => "Lavinia Sandy",
    "nota1" => 8,
    "nota2" => 9
];

$tabela = [$mat1,$mat2,$mat3,$mat4];
//print_r imprimir na tela o codigo igual o var_dump 
echo json_encode($tabela);
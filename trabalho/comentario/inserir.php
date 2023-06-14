<?php

require_once "../conexao.php";

if(isset($_POST["texto"]) && isset($_POST["data"]) 
           && isset($_POST["autor"]))
{

$texto =      $_POST["texto"];
$data = $_POST["data"];
$autor =     $_POST["autor"];
$estrela = $_POST["estrela"];

//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `comentarios`(`texto`, `data`, `autor`, `estrela`) 
        VALUES (?, ?, ?, ?);";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("sssd", $texto, $data, $autor, $estrela);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");



<?php

require_once "../conexao.php";
  
if(isset($_POST["nome"]) && isset($_POST["descricao"])&& isset($_POST["preco"]) && isset($_POST["foto"]))
{
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$foto = "semfoto.png";

//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `produto` (`nome`, `descricao`, `preco`, `foto`) VALUES (?, ?, ?, ?);";


//Prepara o SQl - Comando no Banco de Dados 
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssds", $nome, $descricao, $preco, $foto);

//executa o SQL - Comando no Banco de Dandos
$comando->execute(); 

}
//abre o arquivo form.php
header("Location: produtos.php ");
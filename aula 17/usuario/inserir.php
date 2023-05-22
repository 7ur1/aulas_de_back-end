<?php

require_once "../conexao.php";
  
if(isset($_POST["nome"]) && isset($_POST["login"])&& isset($_POST["senha"]))

{

//inclui o arquivo para salvar_foto.php do uploads 
require_once "salvar_foto.php";

$nome = $_POST["nome"];
$login = $_POST["login"];
$senha = password_hash($_POST["senha"],PASSWORD_DEFAULT);
$foto = $nome_arquivo;

//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `usuario` (`nome`, `login`, `senha`, `foto`) VALUES (?, ?, ?, ?);";


//Prepara o SQl - Comando no Banco de Dados 
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("ssss", $nome, $login, $senha, $foto);

//executa o SQL - Comando no Banco de Dandos
$comando->execute(); 

}
//abre o arquivo form.php
header("Location: usuarios.php ");
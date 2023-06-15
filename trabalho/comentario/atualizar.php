
<?php

require_once "../conexao.php";

if(isset($_POST["texto"]) && isset($_POST["data"]) 
           && isset($_POST["autor"]) && isset($_POST["estrela"]))
{

$id =        $_POST["id"];        
$texto =      $_POST["texto"];
$data = $_POST["data"];
$autor =     $_POST["autor"];
$estrela = $_POST["estrela"];

//String com o comando SQL para ser executado no DB
$sql = "UPDATE comentarios SET 
`texto`= ?, `data`= ?, `autor`= ?, `estrela`= ? 
WHERE  `idcomentario`= ? ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("sssdi", $texto, $data, $autor, $estrela, $id);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
//abre o arquivo form.php
header("Location: index.php");

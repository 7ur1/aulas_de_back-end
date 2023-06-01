<?php
//sempre que for trabalhar com sessões é necessário
//iniciar a sessão 
session_start();

//verificar se existe a variavel de sessão chamada usúario
if(!isset($_SESSION['usuario'])){
    header("Location: ../controla_sessao/form_login.php");
}


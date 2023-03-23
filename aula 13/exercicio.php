<?php

if(isset($_GET["numero"]) and isset($_GET["n2"]) ){
    $r = $_GET["numero"] + $_GET["n2"];
    echo $r;
}else {
    //echo "Você precisa informar os valores para somar";
    //faz um redirecionamento
    header("location: form1.html");
}

?>
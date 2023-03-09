<h2>Vetor com indice textual</h2>
<pre>
     +----------+
nome  |Notebook|
     +----------+
marca  |Dell|
     +----------+
preço  |5.400|
     +----------+
</pre>

<?php
$produto = [
    "nome" => "Notebook",
    "marca" => "Dell",
    "preco" => 5400.99
];
var_dump($produto);

echo "<br>";
echo $produto["nome"] . "<br>";
echo $produto["marca"] . "<br>";
echo $produto["preco"] . "<br>";
echo "<br><br>";

//estrutura de repetição especifica
//para percorrer vectores
foreach($produto as $key => $value){
     echo$value ."<br>";
}

?>
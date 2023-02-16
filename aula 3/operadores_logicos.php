<h2>operadores lógicos</h2>
<hr>
São utilizado para avaliar uma expressão formada
por um conjunto de operadores lógicos. 

<ul>
    <li>and | E</li>
    <li>or | OU</li>
    <li>&& | E</li>
    <li>|| | OU</li>
    <li>! | NÃO</li>
    <li>xor | OU Exclusivo</li>
</ul>

<h3>Tabela Verdade</h3>
<table border="1">
    <tr>
        <th colspan=3>Table do E</th>
    </tr>
    <tr>
        <td>V</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>V</td>
        <td>F</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>F</td>
        <td>F</td>
    </tr>
</table>
<br>
<strong>Exemplo</strong>
Murilo disse a Bruna que iria ao parque se:<br>
<ol>
 <li>Domingo estivesse de sol;</li>
 <li>Tivesse realizado todas as atividades do IF.</li>
</ol>

<?php
$condicao1 = true;
$condicao2 = false;
$acao_murilo = ($condicao1 && $condicao2);
var_dump($acao_murilo);
?>

<h3>Tabela Verdade</h3>
<table border="1">
    <tr>
        <th colspan=3>Table do OU</th>
    </tr>
    <tr>
        <td>V</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>V</td>
        <td>F</td>
        <td>V</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
        <td>V</td>
    </tr>
    <tr>
        <td>F</td>
        <td>F</td>
        <td>F</td>
    </tr>
</table>
<br>
<strong>Exemplo</strong>
Murilo disse a Bruna que iria ao parque se:<br>
<ol>
 <li>Domingo estivesse de sol;</li>
 <li>Tivesse realizado todas as atividades do IF.</li>
</ol>

<?php
$condicao1 = true;
$condicao2 = false;
$acao_murilo = ($condicao1 or $condicao2);
var_dump($acao_murilo);
?>

<h3>Tabela Verdade</h3>
<table border="1">
    <tr>
        <th colspan=3>Table do NÃO</th>
    </tr>
    <tr>
        <td>V</td>
        <td>F</td>
    </tr>
    <tr>
        <td>F</td>
        <td>V</td>
    </tr>

</table>
<br>
<strong>Exemplo</strong>
Murilo é um cara legal:<br>

<?php
$condicao1 = true;
$acao_murilo = !(!$condicao1); 
var_dump($acao_murilo);
?>
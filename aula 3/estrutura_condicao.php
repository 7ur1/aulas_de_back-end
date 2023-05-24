<h2>Estrutura de Condição</h2>
<hr>
<p>
    A Estrutura de condição é utilizado 
    para avaliar qual instrução deve ser 
    executada,dada uma condição.

    se a condição for verdadeira executa (true) executa a 
    instrução 1,caso contrario executa a condição 2
    <br>
    <strong>Exemplo</strong>
    <pre>
        if(<em>condição</em>){
            //instrução 1 
        }else{
            //instrução 2
        }
    </pre>
</p>

<?php
/*
Para passar de ano é necessario tirar no minimo 6 pontos en cada diciplina.
Murilo tirou ....Ele foi aprovado ou não?"
*/
$nota_do_murilo = 6;
$faltas = 74;
if($nota_do_murilo >= 6 && $faltas < 75){ 
    echo "Murilo foi aprovado!";
}else{
    echo "Murilo foi reprovado!";
}
?>

<strong>Exemplo 2</strong>

<p>O aulo para ser aprovado nprecisa obter 
    nota superior a 6 pontos ,para fazer o exame final 
    precisa ter tirado menos que 3 pontos.
    Notas menores que 3 são reprovações diretas 
</p>

<?php
$nota = 2;
if($nota_do_murilo >= 6){ 
    echo "Aprovado!";
}else if($nota > 3){
    echo "Faz exame final!";
}else{
    echo "Reprovado!";
}
?>
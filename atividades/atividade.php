<?php
$nota = 6;
$faltas = 74;
if($nota >= 6 && $faltas < 75){ 
    echo " foi aprovado!";
}else{
    echo " foi reprovado!";
}
?>

<strong>Exemplo 2</strong>

<p>O aulo para ser aprovado precisa-se obter 
    nota superior a 6 pontos, para fazer o exame final 
    precisa ter tirado menos que 3 pontos.
    Notas menores que 3 são reprovações diretas 
</p>

<?php
$nota = 2;
if($nota >= 6){ 
    echo "Aprovado!";
}else if($nota > 3){
    echo "Faz exame final!";
}else{
    echo "Reprovado!";
}
?>
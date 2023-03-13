<h2>Exercicio 1</h2>
<br>

<?php
$numb = [];
$numb[0] = "Pedro";
$numb[1] = "Julia";
$numb[2] = "Maria";

echo "<ol>";
for($i = 0;$i <= 2;$i++){
  echo " <li>$numb[$i]</li>";
}
echo "</ol>";
?>
<?php
$cor = ["Yellow","Green","Blue","Pink","Red","Purple","Orange","Grey","White"];
foreach($cor as $key => $cor){
    echo "<a href='pagina.php?cor=$cor'> Mudar para $cor </a>" ."<br>";
}

if(isset($_GET["cor"])){
    $cor = $_GET["cor"];
}else{
    $cor  ="white";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$cor = ["Yellow","Green","Blue","Pink","Red","Purple","Orange","Grey","White"];
foreach($cor as $key => $cor){
    echo "<a href='pagina.php?cor=$cor'> Mudar para $cor </a>" ."<br>";
}
?>

</body>
</html>
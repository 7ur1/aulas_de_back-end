<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mudar cor de fundo </title>
<?php
$a=@$_POST['cor'];
$b="#66CDAA"; // cor inicial
?>
    <style>
        body {
            background: <?php switch($a) {case "": echo $b; break; default: echo $a;break; } ?>;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="color" name="cor">
        <input type="submit" value="Mudar Cor">
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="exercicios-1.css">
</head>
<body>
    
</body>
</html>

<?php
$dataAtual = date('d/m/y');
CONST NOME = "Eduarda";
$curso = "Sistemas para Internet";
$cargaHoraria = 2400;
$limiteFaltas = $cargaHoraria * 0.25;

echo "<p>Olá! Esta é a aluna " .NOME. " do curso <span style='color: brown; font-weight: bold'> ".$curso. "<span>,</p>";
echo "<p>Com carga horária de <span style= 'color: brown; font-weight: bold'>" .$cargaHorariaCurso. "</span> e seu limite de faltas pe de <span style='color: brown; font-weight: bold'>" .$limiteFaltas."</span>.</p>";
echo "<p>Data atual <span>".$dataAtual. "</p>"
?>
<hr>
<p>Olá! Esta é a aluna <span style="color: brown; font-weight: bold;"><?= NOME ?></span style= "color: purple; font-weight: bold;"> do curso <?= $curso ?>,</p>
<p>Com carga horária de <?= $cargaHorariaCurso ?> e o limite de faltas é de <?= $limiteFaltas ?>.</p>
<p>Data atual: <?= $dataAtual ?></p>

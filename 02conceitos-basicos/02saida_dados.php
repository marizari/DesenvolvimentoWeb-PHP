<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Saída de Dados</title>
</head>
<body>

<?php
// -------------------------
// Variáveis
// -------------------------
$curso = "Desenvolvimento com PHP"; // string
$ano = 2025; // inteiro
$preco = 2112.55; // float

// -------------------------
// Constantes
// -------------------------
define("PLATAFORMA", "Udemy"); // função define
const TIPO = "Curso Online"; // palavra-chave const
?>

<h1>Saída de Dados usando echo na sintaxe COMPLETA</h1>

<?php
// Concatenação (juntar valores com o ponto .)
// Conteúdo estático = texto fixo
// Conteúdo dinâmico = valores de variáveis
echo "<p>Estou fazendo o curso ".$curso." no ano de ".$ano."</p>";
?>

<h1>Saída de Dados usando echo na sintaxe SIMPLIFICADA</h1>

<?php
// Interpolação de variáveis (usar aspas duplas "")
echo "<p>Estou fazendo o curso $curso no ano de $ano</p>";
?>

<h1>Exibindo constantes</h1>

<?php
// Concatenação com constantes (não usam $)
echo "<p>Estou fazendo o ".PLATAFORMA." do tipo ".TIPO."</p>";

// Juntando interpolação de variável com concatenação de constante
echo "<p>".PLATAFORMA." no ano de $ano</p>";
?>

<h2>Saída de dados usando echo na sintaxe ABREVIADA/CURTA</h2>

<!-- Sintaxe abreviada/shorthand -->

<p>Estou fazendo o curso <?=$curso?> no ano de <?=$ano?></p>

<!-- Constantes na forma abreviada (sem $) -->

<p>Estou fazendo o curso <?=PLATAFORMA?> no ano de <?=$ano?></p>
<p>Tipo de curso: <?=TIPO?></p>

<!-- Sintaxe abreviada aplicada a atributos -->

<p class="destaque">Estou fazendo o curso <?=$curso?> no ano de <?=$ano?></p>

<?php
// Exemplo equivalente usando echo com aspas corretamente escapadas
echo "<p class=\"destaque\">Estou fazendo o curso ".$curso." no ano de ".$ano."</p>";
?>

</body>
</html>

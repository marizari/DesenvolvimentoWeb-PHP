<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sintaxe Geral</title>
</head>
<body>
    <h1>Trabalhando com PHP</h1>
    <hr>

```
<?php
/*
PHP é uma linguagem de programação Back-End, ou seja, roda no servidor.
Possui tipagem dinâmica, o que significa que não precisamos declarar o tipo de dado explicitamente.
*/

// -------------------------
// Atalhos de edição (exemplo para VS Code)
// -------------------------
// Ctrl + ; = comenta ou descomenta a linha atual
// Shift + Alt + A = comenta ou descomenta bloco de código
// Shift + Alt + ↓ (seta para baixo) = duplica a linha ou bloco selecionado

// -------------------------
// Geração de strings/textos
// -------------------------
echo "Olá, Mundo! Estou estudando uma linguagem de programação Back-End chamada PHP.";
echo "<br>";

// -------------------------
// Geração de tags HTML via PHP
// -------------------------
echo "<p>Este é um parágrafo gerado com PHP.</p>";
echo "<br>";

// -------------------------
// Utilização de aspas e escape
// -------------------------
// 1- Aspas simples externas e duplas internas
echo '<p>O <abbr title="Hypertext Preprocessor">PHP</abbr> é uma sigla para Hypertext Preprocessor.</p>';

// 2- Aspas duplas externas e simples internas
echo "<p>O <abbr title='Hypertext Preprocessor'>PHP</abbr> é uma sigla para Hypertext Preprocessor.</p>";

// 3- Aspas duplas externas e escapando as aspas duplas internas
echo "<p>O <abbr title=\"Hypertext Preprocessor\">PHP</abbr> é uma sigla para Hypertext Preprocessor.</p>";

/*
Observações:
- <abbr> = Abreviação; quando o usuário passa o mouse sobre o texto, aparece o significado completo.
- É importante entender o uso de aspas simples, duplas e escapes (\) para evitar erros de sintaxe.
*/
?>
```

</body>
</html>

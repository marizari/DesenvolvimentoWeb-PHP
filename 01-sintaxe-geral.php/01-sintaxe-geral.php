<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Síntaxe Geral</title>
</head>
<body>
    <h1>Trabalhando com PHP</h1>
    <hr>
    <?php

    //ctlr + ; = comenta a linha ou tira o comentário
    /* shift + alt  + a = comenta ou tira o comentario */
    /*shift + alt + ⬇️ (seta p/ baixo) = duplica a linha do texto e manda ele pra baixo */


     // Geração de strings/textos
    echo "Olá, Mundo! Estou estudando uma linguagem de programação Back-End chamada PHP.";
    echo "<br>";

    // Geração de tags/elementos HTML
    echo "<p>Este é um parágrafo gerado com PHP.</p>";
    echo "<br>";

    // Utilização de tags HTML especiais como abreviações e atribuições

    //Formas de add quando tem aspas para atribuição e texto

    //1- Utilizando aspas simples para o texto e aspas duplas para a atribuição
    echo '<p> O <abbr title="Hypertext Preprocessor">PHP</abbr> é uma sigla para Hypertext Preprocessor </p>';

    //2- Utilizando aspas duplas para o texto e aspas simples para a atribuição
    echo "<p> O <abbr title='Hypertext Preprocessor'>PHP</abbr> é uma sigla para Hypertext Preprocessor </p>";

    //3- Utilizando aspas duplas para o texto e escapando as aspas duplas da atribuição com barra invertida (\), isso é chamado de escape
    echo "<p> O <abbr title=\"Hypertext Preprocessor\">PHP</abbr> é uma sigla para Hypertext Preprocessor </p>";    

  
    // <abbr> = Abreviação, ou seja, uma forma curta de escrever algo, quando o usuário passa o mouse em cima do texto, aparece o significado completo.


    ?>    
</body>
</html>
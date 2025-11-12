<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Condicionais</title>
</head>
<body>
    <h1 style="text-align: center;">Trabalhando com estruturas condicionais</h1>
    <hr>

    <h2 style="font-size: 14px;">Condicional SIMPLES: <code>if (se)</code></h2>
    <?php
    /* Operadores RELACIONAIS (de comparação)
        ==  Igualdade de valor 
        === Igualdade de valor e tipo de dado
        !=  ou <>  Diferente
        >   Maior que
        <   Menor que
        >=  Maior ou igual a
        <=  Menor ou igual a
    */

    $numero = 50;

    // Estrutura condicional simples
    if($numero > 10){
        echo "<p>$numero é maior que 10.</p>";
    }

    // Também pode omitir as chaves {} se for só uma linha
    if($numero < 10) echo "<p>$numero é menor que 10.</p>";
    ?>
    <hr>

    <h2>Condicional COMPOSTA: <code>if (se) / else (senão)</code></h2>
    <?php 
    $produto = "Ultrabook";
    $qtdEmEstoque = 10; // o que temos à disposição
    $qtdCritica = 5;    // mínimo necessário em estoque

    echo "<h3>$produto</h3>";
    echo "<p><b>Quantidade em estoque:</b> $qtdEmEstoque</p>";

    if ($qtdEmEstoque < $qtdCritica){
        echo "<p style='color:red;'>É necessário comprar/repor!</p>";
    } else {
        echo "<p style='color:green;'>Estoque normal.</p>";
    }
    ?>
    <hr>

   
    
</body>
</html>

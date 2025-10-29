<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Manipulando dados na memórioa</title>
</head>
<body>
    <h1>Usando variáveis e contantes</h1>
    <hr>

    <?php
    //php é o que chamamos de linguagem de programação Back-End, ou seja, uma linguagem que roda no servidor e não no navegador do usuário.
    //O PHP ele tem o que chamamos de tipagem dinamica, ou seja, não precisamos declarar o tipo de dado que uma variável vai armazenar, o próprio PHP identifica o tipo de dado automaticamente.

        // Declaração de variáveis
        $nome = "Maria Eduarda;" // por ter aspas duplas, o PHP entende que é uma string
        $idade = 19; // por não ter aspas, o PHP entende que é um número inteiro
        $altura = 1.53; // por não ter aspas, e com casas decimais o PHP entende que é um número decimal (float)

        // Exibindo valores das variáveis
        echo "<p>Nome: $nome</p>";
        echo "<p>Idade: $idade anos</p>";
        echo "<p>Altura: $altura metros</p>";

        // Declaração de constante
        define("PI", 3.14159);

        // Exibindo valor da constante
        echo "<p>Valor de PI: " . PI . "</p>";
    
</body>
</html>
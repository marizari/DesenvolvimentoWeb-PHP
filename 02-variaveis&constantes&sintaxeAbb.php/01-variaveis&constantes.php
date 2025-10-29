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
    /*
    O PHP é o que chamamos de linguagem de programação Back-End, ou seja, uma linguagem que roda no servidor e não no navegador do usuário.
    O PHP tem o que chamamos de tipagem dinamica, ou seja, não precisamos declarar o tipo de dado que uma variável vai armazenar, o próprio PHP identifica o tipo de dado automaticamente.
    */

        // Declaração de variáveis
        /*
        variáveis sempre começam com o símbolo de cifrão ($)

        variáveis são usadas para armazenar dados na memória do servidor de forma variável, ou seja, que pode mudar durante a execução do programa.
        */

        $nome = "Maria Eduarda;" // por ter aspas duplas, o PHP entende que é uma string
        $idade = 19; // por não ter aspas, o PHP entende que é um número inteiro
        $altura = 1.53; // por não ter aspas, e com casas decimais o PHP entende que é um número decimal (float)

        // Exibindo valores das variáveis
        echo "<p>Nome: $nome</p>";
        echo "<p>Idade: $idade anos</p>";
        echo "<p>Altura: $altura metros</p>";

     // Declaração de constantes (recomenda-se nomear constantes com letras MAIÚSCULAS)

     /*
      Constantes são usadas para armazenar dados na memória do servidor de forma constante, ou seja, que não pode mudar durante a execução do programa.
     Constantes são declaradas com a função define(nome_da_constante, valor_da_constante);
     

     maneira mais antiga de declarar constantes, usando a função define()
     - essa função recebe dois parâmetros: o nome da constante (sempre em maiúsculo) e o valor da constante.*/
        define (PROPRIETARIO, "João Silva"); // função define
    
    //Segunda maneira/sintaxe de declarar constantes, é usando a palavra reservada const, uma sintaxe mais moderna e recomendada.
    
    const EMPRESA = "Tech Solutions"; // palavra-chave const seguida do nome da constante (sempre em maiúsculo) e o valor da constante.





    
</body>
</html>
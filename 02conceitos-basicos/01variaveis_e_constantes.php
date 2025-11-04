<!DOCTYPE html>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Manipulando dados na memória</title>
</head>
<body>
    <h1>Usando variáveis e constantes</h1>
    <hr>

```
<?php
/*
O PHP é uma linguagem de programação Back-End, ou seja, roda no servidor.
Possui tipagem dinâmica, ou seja, o PHP identifica o tipo de dado automaticamente.
*/

// -------------------------
// Declaração de variáveis
// -------------------------
$nome = "Maria Eduarda"; // string
$idade = 19; // inteiro
$altura = 1.53; // float

// Exibindo valores das variáveis
echo "<p>Nome: $nome</p>";
echo "<p>Idade: $idade anos</p>";
echo "<p>Altura: $altura metros</p>";

// -------------------------
// Declaração de constantes
// -------------------------
// Forma antiga usando define()
define("PROPRIETARIO", "João Silva");

// Forma moderna usando const
const EMPRESA = "Tech Solutions";
const A = 10;
const B = 5;
const SOMA = A + B;

// Exibindo constantes
echo "<p>Proprietário: ".PROPRIETARIO."</p>";
echo "<p>Empresa: ".EMPRESA."</p>";
echo "<p>Soma de A + B: ".SOMA."</p>";

// Tentativa de alterar constante (gera erro, então apenas comentada)
// SOMA = 20; // ERRO: constantes não podem ser alteradas
?>
```

</body>
</html>

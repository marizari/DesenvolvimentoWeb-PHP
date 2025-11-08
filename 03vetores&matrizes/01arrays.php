<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays (Vetores e Matrizes)</title>
</head>
<body>
    <h1>Trabalhando com Arrays</h1>
    <hr>
    <!--Arrays são estruturas de dados que armazenam múltiplos valores em uma única variável.
    Arrays = coleções de dados.
    Arrays = Vetores 
    Vetor é um espaço na memória do computador que armazena uma coleção de valores relacionados.
    Vetor é um espaço na memoória que pode ser associado a uma variável ou a uma contante é um espaço de uma única dimensão. Essa unica dimensão pode ser dividida em pedaços menores chamados elementos. Cada elemento é identificado por um índice, que indica a posição do elemento dentro do vetor.
    Matrizes são arrays multidimensionais, ou seja, arrays que contêm outros arrays como seus elementos. Elas são usadas para representar dados em tabelas ou grades, onde cada elemento é acessado por múltiplos índices.Separação de dados. -->
    <h2>Arryas Numéricos/indexados</h2>
    <!--Arrays numéricos são arrays onde os índices são números inteiros, começando geralmente do zero. Cada elemento do array é acessado por um índice numérico que representa sua posição no array.-->
    

    <?php
    //Sintaxe 1: Usando colchetes []
    $bandas = ["Savatage", "Rush", "Slayes", "Metallica"];

    //Sintaxe 2: Usando a função array()
    //O PHP tem milhares de funções internas para manipular arrays. Algumas das mais comuns que outras.
    // Para mais variadas finalidades inclusive uma categoria só p/ funcões relacionadas a criação e manipulação de arrays.
    

    $cursos = array("Sistemas para Internet,'Análise e Desenvolvimento de Sistemas", "Redes de Computadores", "Banco de Dados");

      //O PHP aceita criação de dados/arrays com qualquer tipo de dado, seja ele string, inteiro, float, booleano, objeto, etc. São arrays chamados de heterogêneos, ou seja, eles podem ter elementos de diferentes tipos de dados.
      
      // Arrays heterogêneos
      $coisas = ["Ville", 2112, "<b>Palavra</b>", 253.487]; // Isso pq a liguagem do PHP é dinamica, ou seja, não precisa declarar o tipo de dado da variável.

      // Sintaxe de atribuição manual
      //Possição do array = indice
      $comidas[0] = "Pizza";
      $comidas[1] = "Hambúrguer";
      $comidas[2] = "Sorvete";

      // Constantes com arrays
      //Tem duas maneiras de criar constantes com arrays no PHP:
      //1. Usando a função define(), mais antiga
        define("FRUTAS", ["Banana","Maçã", "Laranja"]); //DETALHE: Nome da contante maiúsculo por convenção, o valor da constante
        //ou
        define("FILIAIS", array("São Paulo", "Rio de Janeiro", "Belo Horizonte"));

    //2. Usando a função const, mais usada
    const ROUPAS = ["Morango", "Abacaxi"];


    ?>
    
    <h2>Arrays associativos</h2>

    
    
</body>
</html>
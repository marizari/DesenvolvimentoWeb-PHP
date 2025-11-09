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
    

    $cursos = array("Sistemas para Internet","Análise Desenvolvimento de Sistemas", "Redes de Computadores", "Banco de Dados");

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

        <h3>Acessando os dados dos arrys indexados</h3>
        <!--Para acessar os dados dos arrays indexados, usamos o nome do array seguido do índice entre colchetes. Lembrando que os índices começam em 0.-->
        <ul>
            <li>Banda que mais gosto: <?=$bandas[1]?></li>
            <li>Eu faço falculdade de <?=$cursos[0]?></li>
            <li>Exemplo de texto com HTML: <?=$coisas[2]?></li>
            <li><?=$comidas[0]?> muito bom e <?=ROUPAS[1]?></li>
            <li>Filial é a <?=FILIAIS?></li>
        </ul>
    
    <h2>Arrays associativos</h2>
    <!--Arrays associativos são arrays onde os índices são strings, ou seja, nomes ou rótulos que identificam cada elemento do array.-->
    <!--São usados principalmente p/ manipulaçãp de banco de dados, onde cada registro pode ser representado como um array associativo, com os nomes dos campos como índices. Para que a linguagem possa manipula-lo dentor de uma página web-->
    <?php
    //uma chave associativa é declarada da seguinte forma no array associativo:
        // 1. Sintaxe váriavel 
        //2. Array associativo com sintaxe de colchetes []
        //3.Dentro do array, colocar chaves associativas entre aspas simples ou duplas, seguidas do operador => e do valor correspondente.
        $curso = [
            // chave associativa: "identificador" => (operador de associação) valor que deseja guardar la dentro
            //pode colocar qunatas chaves associativas quiser colancando no final a vírgula pra separar
            "titulo" => "Gastronomia",
            "carga_horaria" => 1800,
            "descricao" => "Curso voltado para culinária nacional e internacional."
        ];
        // Constantes com arrays associativos
        define("EMPRESA", [
            "nome" => "Tech Solutions",
            "ramo" => "TI"
        ]);

        //outra forma de criar constante com array associativo
        const PROPRIETARIO = [
            "nome" => "Jon Oliva",
            "idade" => 62
        ];

    ?>


    <h3>Acessando os dados dos array associativos</h3>
    <p>Nome do curso: <?=$curso["titulo"]?></p>
    <p>Carga horárias: <?=$curso["carga_horaria"]?> horas.</p>
    <p>Descrição: <?=$curso["descricao"]?></p>
    <p>Empresa: <?=EMPRESA["nome"]?></p>
    <p>CEO: <?=PROPRIETARIO["nome"]?></p>
    <!-- boa prática, colocar a nomenclatura a variavel do array associativo no singular, pois cada elemento representa um único registro ou objeto.
     e o nome do array no plural, pois ele representa uma coleção de registros ou objetos.-->

   
    
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>PHP - Arrays (Vetores e Matrizes)</title>
</head>
<body>
  <h1>Trabalhando com Arrays</h1>
  <hr>

  <!-- 
    📘 Arrays são estruturas de dados que armazenam múltiplos valores em uma única variável.
    🔹 Arrays = coleções de dados.
    🔹 Vetor = array de uma única dimensão.
    🔹 Matriz = array de múltiplas dimensões (arrays dentro de arrays).

    Vetores armazenam uma coleção de valores relacionados, cada um identificado por um índice numérico.
    Matrizes são usadas quando precisamos representar dados em tabelas ou grades, onde cada elemento é acessado por múltiplos índices.
  -->

  <h2>📦 Arrays Numéricos / Indexados</h2>

  <?php
    // Sintaxe 1 — usando colchetes []
    $bandas = ["Savatage", "Rush", "Slayer", "Metallica"];

    // Sintaxe 2 — usando a função array()
    $cursos = array(
      "Sistemas para Internet",
      "Análise e Desenvolvimento de Sistemas",
      "Redes de Computadores",
      "Banco de Dados"
    );

    // Arrays heterogêneos — podem conter diferentes tipos de dados
    $coisas = ["Ville", 2112, "<b>Palavra</b>", 253.487];

    // Atribuição manual de índices
    $comidas[0] = "Pizza";
    $comidas[1] = "Hambúrguer";
    $comidas[2] = "Sorvete";

    // Constantes com arrays
    // Forma antiga — define()
    define("FRUTAS", ["Banana", "Maçã", "Laranja"]);
    define("FILIAIS", ["São Paulo", "Rio de Janeiro", "Belo Horizonte"]);

    // Forma moderna — const
    const ROUPAS = ["Morango", "Abacaxi"];
  ?>

  <h3>🧩 Acessando os dados dos arrays indexados</h3>
  <p>Para acessar os dados, usamos o nome do array seguido do índice entre colchetes <code>[]</code>.</p>

  <ul>
    <li>Banda que mais gosto: <?=$bandas[1]?></li>
    <li>Eu faço faculdade de <?=$cursos[0]?></li>
    <li>Exemplo de texto com HTML: <?=$coisas[2]?></li>
    <li><?=$comidas[0]?> é muito bom e <?=ROUPAS[1]?> também!</li>
    <li>Filiais: <?=implode(", ", FILIAIS)?></li>
  </ul>

  <hr>
  <h2>📂 Arrays Associativos</h2>

  <!--
    Arrays associativos usam chaves nomeadas (strings) em vez de índices numéricos.
    São muito usados em banco de dados, pois cada registro pode ser representado como um array associativo,
    com as chaves sendo os nomes dos campos.
  -->

  <?php
    // Criando um array associativo
    $curso = [
      "titulo" => "Gastronomia",
      "carga_horaria" => 1800,
      "descricao" => "Curso voltado para culinária nacional e internacional."
    ];

    // Constante com array associativo usando define()
    define("EMPRESA", [
      "nome" => "Tech Solutions",
      "ramo" => "TI"
    ]);

    // Constante com array associativo usando const
    const PROPRIETARIO = [
      "nome" => "Jon Oliva",
      "idade" => 62
    ];
  ?>

  <h3>🔍 Acessando os dados dos arrays associativos</h3>

  <p>Nome do curso: <?=$curso["titulo"]?></p>
  <p>Carga horária: <?=$curso["carga_horaria"]?> horas.</p>
  <p>Descrição: <?=$curso["descricao"]?></p>
  <p>Empresa: <?=EMPRESA["nome"]?></p>
  <p>CEO: <?=PROPRIETARIO["nome"]?></p>

  <hr>
  <h3>💡 Boas práticas</h3>
  <ul>
    <li>Use nomes no <strong>singular</strong> para variáveis que representam um único item (ex: <code>$curso</code>).</li>
    <li>Use nomes no <strong>plural</strong> para variáveis que representam coleções (ex: <code>$cursos</code>).</li>
    <li>Evite misturar muitos tipos de dados no mesmo array — use arrays heterogêneos apenas quando fizer sentido.</li>
  </ul>

</body>
</html>

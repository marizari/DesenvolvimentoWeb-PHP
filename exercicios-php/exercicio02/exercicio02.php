<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02: estruturas de dados com arrays e objetos</title>
    <style>
        .container {
            display: flex;
            gap: 20px;
        }
        article {
            border : 2px solid #000;
            padding: 15px;
            margin: 2px;
            width: 45%;
        }
        h1  {
            text-align: center;
        }  
        span {
            font-weight: bold;
            text-decoration: underline;
        }
        p {
            font-size: 16px;
        }

    

        
    </style>
</head>
<body>
    <!-- Em um novo arquivo exercicio02.php, crie um array associativo e um objeto genérico para armazenar os dados fictícios de duas pessoas diferentes: nome de usuario, email, senha, idade, sexo e cidade.

Em seguida, mostre apenas os valores de nome de usuario, email e idade de cada pessoa dentro de tags HTML de conteúdo (como article ou section, além de h2, p etc).

Desafios:
Destaque estes dois blocos de conteúdo usando CSS e mostre-os lado a lado usando flexbox.-->

<!--<h3>Criando Array Associativo p/ primeira pessoa</h3>-->

<?php
$primeiraPessoa = [
    "nome_usuario" => "Izuku Midoriya",
    "email" => "izuku@gmail.com",
    "senha" => "deku123",
    "idade" => 16,
    "sexo" => "Masculino",
    "cidade" => [
        "rua" => "Rua B",
        "numero" => 456,
        "bairro" => "Centro",
        "cep" => "87538-000",
        "cidade" => "Musutafu"
    ]
];
?>

<!--<h3>Criando Objeto Genérico p/ segunda pessoa</h3>  -->

<?php
$segundaPessoa = new stdClass();
$segundaPessoa->nome_usuario = "Katsuki Bakugo";
$segundaPessoa->email = "bakugo@gmail.com";
$segundaPessoa->senha = "kacchan456";
$segundaPessoa->idade = 16;
$segundaPessoa->sexo = "Masculino";
//array associativo
$segundaPessoa->endereco = [
    "rua" => "Rua A",
    "numero" => 123,
    "bairro" => "Centro",
    "cep" => "87538-000",
    "cidade" => "Musutafu"
];
?>

<h1>Informações das Pessoas</h1>
<p>Em um novo arquivo exercicio02.php, crie um array associativo e um objeto genérico para armazenar os dados fictícios de duas pessoas diferentes: nome de usuario, email, senha, idade, sexo e cidade.</p>

<p>Em seguida, mostre apenas os valores de nome de usuario, email e idade de cada pessoa dentro de tags HTML de conteúdo (como article ou section, além de h2, p etc).</p>

<p><span>Desafios: <br></span>
Destaque estes dois blocos de conteúdo usando CSS e mostre-os lado a lado usando flexbox.</p>
<div class="container">
    <article>
    <h2>Primeira Pessoa (Array Associativo)</h2>
        <p><strong>Nome de Usuário: </strong><?=$primeiraPessoa["nome_usuario"]?></p>
        <p><strong>Email do Usuário: </strong><?=$primeiraPessoa["email"]?></p>
        <p><strong>Idade do Usuário: </strong><?=$primeiraPessoa["idade"]?></p>
    </article>

    <hr>
    
    <article>
    <h2>Segunda Pessoa (Objeto Genérico)</h2>
        <p><strong>Nome de Usuário: </strong><?=$segundaPessoa->nome_usuario?></p>
        <p><strong>Email do Usuário: </strong><?=$segundaPessoa->email?></p>
        <p><strong>Idade do Usuário: </strong><?=$segundaPessoa->idade?></p>
        
    </article>
</div>
    
</body>
</html>
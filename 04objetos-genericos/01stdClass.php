<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Objetos Genéricos</title>
</head>
<body>
    <h1>Trabalhando com objetos/instâncias</h1>
    <hr>
    <!--Conceito breve sobre objetos 
        - Objetos são estruturas de dados que permitem agrupar múltiplas propriedades (atributos) e métodos (funções) relacionados a um único conceito ou entidade.
        - Uma instância é um objeto específico criado a partir de uma classe, que serve como um molde para definir as propriedades e comportamentos do objeto.
        - Em PHP, podemos criar objetos genéricos usando a classe embutida stdClass, que permite criar objetos simples sem a necessidade de definir uma classe personalizada.-->
    <?php
    /*Criando um objeto/instância a partir da classe stdClass (Standard Class)
    stdClass é uma classe genérica embutida no PHP que pode ser usada para criar objetos simples sem a necessidade de definir uma classe personalizada.
    constantes não podem ser usadas em objetos, apenas variáveis*/
    $usuario = new stdClass();

    // Adicionando propriedades/atributos ao objeto
    // Essa ->  é a sintaxe para adicionar propriedades a um objeto em PHP. É um operador de objeto serve p/ determinar a propriedade de um objeto. 
   // Dps do nome do objeto, usamos "->" seguido do nome da propriedade que queremos acessar ou definir e atribuímos um valor a ela.
    $usuario->codigo = 1;
    $usuario->nome = "Maria";
    $usuario->email = "email@email.com";
    $usuario->idade = 28;
    $usuario->telefones = ["(11) 99999-9999", "(11) 98888-8888"];
    //array associativo
    $usuario->endereco = [
        "rua" => "Av. Brasil",
        "numero" => 2578,
        "bairro" => "Centro",
        "cep" => "87538-000",
        "cidade" => "São Paulo",
        "estado" => "SP"
    ];
    //podemos fazer integração com outros objetos
    $usuario->caracteristicas = new stdClass();
    $usuario->caracteristicas->peso = 80;
    $usuario->caracteristicas->altura = 1.85;
    ?>

    <h2>Analisando a estutura do objeto</h2>
    <pre><?=var_dump($usuario)?></pre>

    
    
</body>
</html>
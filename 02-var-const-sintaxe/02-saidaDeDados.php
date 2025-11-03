<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Saída de Dados</title>
</head>
<body>

<?php
//Variáveis
$curso = "Desenvolvimento com PHP"; //string
$ano = 2025; //inteiro
$preco = 2112.55; //float

?>
    <h1>Saída de Dados usando echo na sintaxe COMPELTA</h1>

<!-- concatenação = juntar valores, usar o ponto (.)
Conteúdo estático = texto fixo, que não muda
Conteúdo dinâmico = valores de variáveis, que podem mudar-->
    <?php
        echo "<p>Estou fazendo o curso".$curso." no ano de" .$ano."</p>";
    ?>

    <h1>Saída de Dados usando echo na sintaxe SIMPLIFICADA</h1>

    <?php
    //Interpolação (OBRIGATÓRIO usar aspas duplas "")
    echo"<p>Estou fazendo o curso  $curso no ano de $ano </p>"

    ?>


    
    
</body>
</html>
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

    <h2>Condicional ANINHADA: <code>if / else if / else</code></h2>
    <?php 
    //Condicional ANINHADA é basicamento um código dentro de outro
    $nota = 7;

    echo "<p><b>Nota do aluno:</b> $nota</p>";

    if ($nota >= 9){
        echo "<p style='color:green;'>Excelente! Aprovado com mérito.</p>";
    } elseif ($nota >= 6){
        echo "<p style='color:orange;'>Aprovado.</p>";
    } else {
        echo "<p style='color:red;'>Reprovado.</p>";
    }
    ?>
        <hr>

<!--Outro ex de condicional ANINHADA-->
<?php 
    $produto = "Ultrabook";
    $qtdEmEstoque = 0; // o que temos à disposição
    $qtdCritica = 5;    // mínimo necessário em estoque

    echo "<h3>$produto</h3>";
    echo "<p><b>Quantidade em estoque:</b> $qtdEmEstoque</p>";

    if ($qtdEmEstoque < $qtdCritica){
        echo "<p style='color:red;'>É necessário comprar/repor!</p>";

        //Condicional ANINHADA
        if($qtdEmEstoque === 0){
            echo "<p><mark>🚨URGENTE!🚨</mark></p>";
            //A tecla: Windowns + . = Trás tabela de emoji
        }
    
    } else {
        echo "<p>Estoque Normal.</p>";
    }
    ?>
     <hr>

      <h2>Condicional ENCADEADA: <code>if/elseif/else</code></h2>

      <?php 
      //elseif = caso contrário
      $idade = 25;
      if ($idade <= 12) {
        echo "<p>Criança</p>";
      } elseif($idade <= 17) {
         echo "<p>Adolecente</p>";
      } elseif($idade <= 59){
         echo "<p>Adulto</p>";
      } else {
         echo "<p>Idoso</p>";
      }

      ?>
    
        <h3>Condicional Encadeada agora usando: <code>switch/case/default/break</code></h3>
        <?php 
        /*Protótipo de chatbot 
        Opções válidas:
        1 -> Pedir informações
        2 -> Fazer reclamação
        3 -> Fazer elogio
        x -> Inválida; falar com o atendente
        */
        
        //Entra da opção
        $opcao = 1;
        //switch = escolha-caso
        switch($opcao){
            case 1:
               echo "<p>Legal, o que deseja saber?</p>";
               break;
            
            case 2:
                echo "<p>Puxa, me conte o que aconteceu</p>";
                break;

            case 3:
                echo "<p>Que bacana, pode falar!</p>";
                break;

            default:
                echo "<p>Hum, não entendi.. Vou chamar um humano</p>";
                break; //break = pare, exemplo case faca isso break e pare
        }
        ?>
            <hr>

            <h2>Sobre os Operadores <code>==</code> e <code>===</code></h2>
            <?php 
            $a = 10; //int
            $b = '10'; //string

            // == avalia SOMENTE O VALOR NÃO IMPORTA O TIPO DE DADO
            var_dump($a == $b); //true

            echo "<br>";

            // === avalia VALOR E também o TIPO, os dois valores tem que ser a mesma coisa p/ ser igual
            var_dump($a === $b); //false
?>

        <hr>

        <h2>Dica: usando condicional composta c/ shorthand <code>if/else</code></h2>
        <?php 
        // Versão tradicional if/else
        //obs: usando a mesma variavel de exemplos antoriores
        /*if($idaade >= 18){
            $mensagem = "maior";
        }else {
            $mensagem = "menor";
        }
        echo $mensagem;*/

        // Versão usando if/else abreviado com o operador ternário
        // A estrutura funciona assim: (condição) ? valor_se_verdadeiro : valor_se_falso
        // Ou seja: se $idade for maior ou igual a 18, armazena "maior"; senão, armazena "menor"
        // ?: Esses são conhecidos como operadores ternários
        $mensagem = $idade >= 18 ? "maior" : "menor";
        //
        echo $mensagem;
        ?>
        
</body>
</html>

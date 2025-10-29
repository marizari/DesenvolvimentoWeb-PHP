<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Síntaxe Geral</title>
    <style>
        .exemplo {
            color: <?php echo "orange"; ?>;
            border: solid 4px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1 class="exemplo">Trabalhando com PHP</h1>
    <hr>

    <?php
        // ctlr + ; = comenta a linha ou tira o comentário
        /* shift + alt + a = comenta ou tira o comentario */
        /* shift + alt + ⬇️ (seta p/ baixo) = duplica a linha do texto e manda ele pra baixo */

        echo "<span class=\"exemplo\">Olá, Mundo!</span> Estou estudando uma linguagem de programação Back-End chamada PHP.";
        echo "<br>";
    ?> 
    
    <script>
        const exemplo = document.querySelector('.exemplo');
        exemplo.addEventListener('click', function() {
            alert("<?php echo 'Olá PHP e JavaScript'; ?>");
        });
    </script>
</body>
</html>

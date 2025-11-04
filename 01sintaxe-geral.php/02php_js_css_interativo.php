<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - CSS e JS Interativo</title>
    <?php
        // Variável PHP usada para definir cor do CSS dinamicamente
        $corExemplo = "orange";
    ?>
    <style>
        /* -------------------------
           Estilo aplicado dinamicamente via PHP
        ------------------------- */
        .exemplo {
            color: <?= $corExemplo ?>;
            border: solid 4px;
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1 class="exemplo">Trabalhando com PHP, CSS e JS</h1>
    <hr>

```
<?php
// -------------------------
// Exemplos de PHP
// -------------------------

// Comentários de atalho (para estudo/edição)
// Ctrl + ; = comenta/descomenta linha
// Shift + Alt + A = comenta/descomenta bloco
// Shift + Alt + ↓ = duplica linha ou bloco

// Saída de dados
echo "<span class=\"exemplo\">Olá, Mundo!</span> Estou estudando uma linguagem de programação Back-End chamada PHP.";
echo "<br>";

// Integração com CSS e JS
echo "<p>Este texto demonstra PHP alterando o estilo de um elemento e interagindo com JavaScript.</p>";
?>

<script>
    // -------------------------
    // JavaScript - Interatividade
    // -------------------------
    const exemplo = document.querySelector('.exemplo');

    // Clique exibe alerta gerado pelo PHP
    exemplo.addEventListener('click', function() {
        alert("<?php echo 'Olá PHP e JavaScript'; ?>");
    });

    // Mouseover altera o fundo do elemento (exemplo extra)
    exemplo.addEventListener('mouseover', function() {
        this.style.backgroundColor = 'yellow';
    });

    // Mouseout volta à cor original
    exemplo.addEventListener('mouseout', function() {
        this.style.backgroundColor = '';
    });
</script>
```

</body>
</html>

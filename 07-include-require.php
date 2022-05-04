<?php require "recursos.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de Recursos</title>
</head>
<body>
    <h1>Inclusão de Recursos</h1>
    <hr>
    <h2><?=ESCOLA?></h2>
    <p>Estamos no curso de <?=$curso?></p>
    <ul>
<?php
    foreach($tecnologias as $linguagens) {
?>
    <li><?=$linguagens?></li>
<?php
    }
?>
    </ul>
    <p>Cahpolin Colorado tem 20 anos e é <b><?=verificaIdade(20)?></b> de idade</p>
    <p>Chaves tem 8 anos e <b><?=verificaIdade(8)?></b> de idade</p>
    <hr>
    <article>
        <h2>Conteúdo qualquer...</h2>
        <?php include "textos.php"; ?>
    </article>
    <hr>
    <h2>qualquer outra coisa...</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum praesentium quibusdam magni esse, beatae sapiente?</p>
    
</body>
</html>
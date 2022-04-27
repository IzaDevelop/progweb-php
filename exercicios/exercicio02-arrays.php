<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <link rel="stylesheet" href="estyle.css">
</head>
<body>
<?php
    $ela = [
        "nome" => "Michele", 
        "idade" => 20, 
        "contato" => "michele@gmail.com", 
        "sexo" => "Feminino"
    ];

    $ele = [
        "nome" => "Eduardo", 
        "idade" => 17, 
        "contato" => "eduardo@gmail.com", 
        "sexo" => "Masculino"
    ];
?>
    <h2>Informações</h2>
    <article>
        Ela se chama <?=$ela["nome"]?> tem <?=$ela["idade"]?>, seu E-mail é <?=$ela["contato"]?>
    </article>
    <section>
        Ele se chama <?=$ele["nome"]?> tem <?=$ele["idade"]?>, seu E-mail é <?=$ele["contato"]?>
    </section>
</body>
</html>
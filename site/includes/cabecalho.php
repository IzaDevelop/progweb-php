<?php
/* $_SERVER['PHP_SELF'] tráz os dados completos do endereço 
basename extrai apenas o nome.extensão*/
    $pagina = basename($_SERVER['PHP_SELF']);
/* parte 2 fazer o switch para alterar o título */
    switch($pagina) {
        case 'index.php': $titulo = "Home"; break;
        case 'produtos.php': $titulo = "Produtos"; break;
        case 'servicos.php': $titulo = "Serviços"; break;
        default: $titulo = "Contato"; break;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- parte 3 - colocar a variável no title -->
    <title> <?=$titulo?> - XYZ</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>XYZ</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="produtos.php">Produtos</a>
            <a href="servicos.php">Serviços</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>
    <main>
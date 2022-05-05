<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <h1>Processamento de dados</h1>
    <hr>
<?php
    if(empty($_POST['nome']) || empty($_POST['email']) ){
?>
    <p style="font-size: 2rem;">Por favor, preencha os campos Nome e E-mail do formulário!</p>
    <p style="font-size: 1.5rem;"><a href="08-formulario.html">Voltar</a></p>
<?php
    } else {
    /* echo "<pre>";
    var_dump($_POST);
    echo "</pre>"; */

    //capturando os dados enviados do formulario
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    /* se existir o $_POST ['interesses'], o que foi selecionado fica na variável. caso contrário deixe um array vazio na variável
    
    ?? operador de coalescência nula*/
    $interesses = $_POST['interesses'] ?? [];
    $informativos = $_POST['informativos'];
    $mensagem = $_POST['mensagem'];
?>
    <h2>Dados:</h2>
    <ul>
        <li><b>Nome:</b> <?=$nome?></li>
        <li><b>E-mail:</b> <?=$email?></li>
        <li><b>Idade:</b> <?=$idade?></li>
        <?php
        /* aqui usamos o operador de negação (!) para inverter a lógica da função empty (vazio) */
        /* se interesses NÃO estiver vazio  */
        if(!empty($interesses)){
        ?>
        <!-- então faça tudo abaixo -->
        <li><b>Interesses:</b>
            <ul>
            <?php
                foreach($interesses as $interesse){
            ?>
                <li><?=$interesse?></li>
            <?php
                }
            ?>
            </ul>
        </li>
        <?php
            }
        ?>
        <li><b>Informativos:</b> <?=$informativos?></li>
        <li><b>Mensagem:</b> <?=$mensagem?></li>
    </ul>
<?php
    }
?>
</body>
</html>
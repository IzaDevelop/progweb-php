<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <h1>Exercício de Condicionais</h1>
<?php
number_format($salarioNovo);

    $salario = 500;

    if ($salario < 500) {
        $salarioNovo = $salario * 1.15;
    } elseif ($salario <= 1000) {
        $salarioNovo = $salario * 1.10;
    } else {
        $salarioNovo = $salario * 1.05;
    }
?>
    <p>Seu salario era de R$<?=$salario?> reais e seu novo salario com reajuste é R$<?=$salarioNovo?> reais</p>

</body>
</html>
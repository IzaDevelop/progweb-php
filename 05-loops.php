<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
</head>
<body>
    <h1>Loops PHP</h1>
    <hr>
    <h2>while (enquanto)</h2>
<?php
// variavel de controle geralmente se chama I, J ou K
$i = 1;
while($i <= 3) { // ou $i < 4
?>
    <p><?=$i?></p>
<?php
    $i++; //atualiza a variável de controle
}
?>
    <hr>
    <h2>do/while (faça/enquanto)</h2>
<?php
$j = 1;
do {
?>
    <div>
        <h3>Exemplo <?=$j?></h3>
    </div>
<?php
$j++;
} while($j <= 5);
?>
    <hr>
    <h2>For (para)</h2>
<?php
    //inicialização; condição; variável de controle
for($k = 1; $k <= 3; $k++) {
?>
    <p>Valor de K é <b><?=$k?></b></p>
<?php
}
?>
    <hr>
    <h2>Exercício Array e Loop</h2>
    <p>Crie um array com o nome dos 12 meses do ano</p>
    <p>usando um loop, faça o array aparecer em uma lista ordenada</p>
<?php
$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
array_keys($meses);
?>
    <ol>
<?php
for ($i = 0; $i < 12; $i++) {
?>
    <li><?=$meses[$i]?></li>
<?php
}
?>
    </ol>
</body>
</html>
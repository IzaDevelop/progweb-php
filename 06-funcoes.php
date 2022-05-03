<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <h1>Funções PHP</h1>
    <hr>
    <h2>Funções básicas (sem retorno)</h2>
<?php
    function dadosAutor(){
        echo "<div>";
        echo "<p>Izabelle</p>";
        echo date("d/m/Y");
        echo "</div>";
    }
?>
    <section>
        <p>Projeto de Site Back-End</p>
        <?=dadosAutor()?>
    </section>
    <hr>
    <h2>Funções com retorno de dados</h2>
<?php
    function dadosCurso(){
        return "Programador Web - horas";
    }
?>
    <p><b>Informações:</b> <?=dadosCurso()?></p>
    <p>O Senac Penha tem o curso de <?=dadosCurso()?></p>
    <hr>
    <h2>Funções com parâmetros/argumentos</h2>
<?php
    function soma($valor1, $valor2){
        return $valor1 + $valor2;
    }
?>
    <p><?=soma(150, 200)?></p>
<?php
    $primeiro = 1025;
    $segundo = 1448;
?>
<p>
    <?=soma($primeiro, $segundo)?></p>
    <?php
    $preco = 1578.99;
    $desconto = 75.4789;
    $salarioMinimo = 1212;
    $novoSalario = 2500.47;
                                    //parâmetro com valor padrão(default)
    function formataNumero(float $valor, float $casasDecimais = 2 /* não é necessario do valor padrão */):string{
        return "R$ ".number_format($valor, $casasDecimais, ",", ".");
    }
?>
    <ul>
        <li>Preço: <?=formataNumero($preco)?></li>
        <li>Desconto: <?=formataNumero($desconto, 4)?></li>
        <li>Salário mínimo: <?=formataNumero($salarioMinimo)?></li>
        <li>Novo salário: <?=formataNumero($novoSalario)?></li>
    </ul>
    <hr>
    <h2>Indução de tipos de dados</h2>
<?php
    /* Tipos de dados primitivos
    float => numeros decimais 
    int => numeros inteiros
    string => textos */
    function calculaMedia(float $nota1, float $nota2):float{
        return ($nota1 + $nota2) / 2;
    }
?>
    <p>Média: <?=calculaMedia(10, 5)?></p>
    <p>Média: <?=calculaMedia(5.5, 7.7)?></p>
    <p>Média: <?=calculaMedia(9.84, 3.41)?></p>
</body>
</html>
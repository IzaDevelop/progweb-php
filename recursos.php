<?php
const ESCOLA = "Senac";
$curso = "Programador Web";
$tecnologias = ["HTML", "CSS", "JavaScript", "PHP"];

function verificaIdade(int $valor):string {
    if ($valor >= 18) {
        return "maior";
    } else {
        return "menor";
    }
}
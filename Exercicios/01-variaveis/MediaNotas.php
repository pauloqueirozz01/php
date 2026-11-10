<?php
// Crie um programa em PHP que calcule a média de três notas e exiba o resultado.
$nota1 = 10;
$nota2 = 8;
$nota3 = 7.5;

$media = ($nota1 + $nota2 + $nota3) / 3;
echo "A média das notas $nota1, $nota2, $nota3 é: $media\n";

if ($media >= 7) {
    echo "Aluno aprovado!";
} elseif ($media >= 5 && $media < 7){
    echo "Aluno tem direito a fazer a recuperação de notas.";
} else {
    echo "Aluno reprovado!";
}

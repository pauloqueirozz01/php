<?php
// Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.
echo "<== CALCULADORA IMC ==>\n";

$peso = readline("Digite seu peso: (Ex: 84.3)\n");
$altura = readline("Digite sua altura: (Ex: 1.90)\n");

// O IMC (Índice de Massa Corporal)
// é calculado dividindo o peso (em quilogramas) pela altura ao quadrado (em metros),
// seguindo a fórmula: IMC = peso ÷ (altura × altura).

$calculoImc = $peso / ($altura * $altura);
$imc = number_format($calculoImc, 2);

/* Tabela de Classificação de IMC.
Menor que 18,5	Abaixo do peso (Magreza)
Entre 18,5 e 24,9	Peso normal (Eutrófico)
Entre 25,0 e 29,9	Sobrepeso (Pré-obesidade)
Entre 30,0 e 34,9	Obesidade Grau I
Entre 35,0 e 39,9	Obesidade Grau II
Maior ou igual a 40,0	Obesidade Grau III (Grave/Mórbida)
*/
if ($imc < 18.5) {
    echo "Seu IMC está em $imc\n";
    echo "Você está abaixo do peso. Deveria se alimentar melhor!";
} elseif ( $imc >= 18.5 && $imc <= 24.9) {
    echo "Seu IMC está em $imc\n";
    echo "Seu peso está normal. Continue assim!";
} elseif ( $imc >= 25 && $imc <= 29.9) {
    echo "Seu IMC está em $imc\n";
    echo "Você está sobrepeso. Tome cuidado, se alimente melhor para não ficar obeso!";
} elseif ( $imc >= 30 && $imc <= 34.9) {
    echo "Seu IMC está em $imc\n";
    echo "Você está com Obesidade Grau I.";
} elseif ($imc >= 35 && $imc <= 39.9) {
    echo "Seu IMC está em $imc\n";
    echo "Você está com Obesidade Grau II.";
}elseif ( $imc >= 40 ) {
    echo "Seu IMC está em $imc\n";
    echo "Você está com obesidade Grau III. (Grave / Mórbida )";
}

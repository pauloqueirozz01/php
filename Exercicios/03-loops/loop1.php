<?php
// Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 a 100.
// Escrevendo com for o laço de repetição que vai fazer essa contagem.

for ($index = 0; $index <= 100; $index++) {
    // Se o módulo da divisão por 2 for diferente de 0, encontraremos um número ímpar.
    if ($index % 2 !== 0) {
        echo "Número ímpar encontrado: $index \n";
    }
}

<?php

// Programa de maioridade utilizando ternário

// Coletando nome
echo "Digite seu nome: \n";
$nome = $argv[1] ?? "Paulo Queiroz";
echo "$nome \n";

// Capturando idade
echo "Digite sua idade: \n";
$idade = $argv[2] ?? 22;
echo "$idade \n";

// Utilizando operador ternário para checar a condição e fazer um retorno adequado
$maiorDeIdade = $idade > 18 ? "Maior de Idade" : "Menor de Idade";

// Impresso no terminal.
echo "Maioridade: $maiorDeIdade \n";

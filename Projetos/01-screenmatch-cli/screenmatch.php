<?php

echo "Hello World!\n";

$nomeFilme = "Top Gun Maverick";
$anoLancamento = $argv[1] ?? 2022;
$notaFilme = 9.7;
$inclusoNoPlano = true;

echo "Nome do Filme: $nomeFilme \n";
echo "Nota do Filme: $notaFilme \n";
echo "Ano de Lançamento: $anoLancamento \n";

$planoPrime = true;

// Só será incluso no plano se estiver ou no plano prime ou caso ano de lancamento seja inferior a 2020.
$inclusoNoPlano = $planoPrime || $anoLancamento < 2020;

/** @var TYPE_NAME $inclusoNoPlano */
$inclusoNoPlano = $planoPrime && $anoLancamento < 2020;

echo "Incluso no plano: $planoPrime";
echo $inclusoNoPlano;
<?php

echo "Hello World!\n";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor - Ragnarok";
$nomeFilme = "Se beber, não case!";



$anoLancamento = $argv[1] ?? 2022;
$notaFilme = 9.7;
$inclusoNoPlano = true;

echo "Nome do Filme: $nomeFilme \n";
echo "Nota do Filme: $notaFilme \n";
echo "Ano de Lançamento: $anoLancamento \n";

$planoPrime = true;

// Só será incluso no plano se estiver ou no plano prime, ou caso ano de lancamento seja inferior a 2020.
$inclusoNoPlano = $planoPrime || $anoLancamento < 2020;

/** @var TYPE_NAME $inclusoNoPlano */
$inclusoNoPlano = $planoPrime && $anoLancamento < 2020;

if ($inclusoNoPlano) {
    echo "Incluso no plano: Sim.\n";
} else {
    echo "Incluso no plano: Não.\n";
}
echo $inclusoNoPlano;


if ($anoLancamento >= 2022) {
    echo "O filme $nomeFilme é um lançamento!\n";
} elseif ($anoLancamento > 2020 && $anoLancamento < 2022) {
    echo "Este filme ainda é novo, vale a pena assistir!";
} else {
    echo "Este filme é um pouco antigo. Ano de Lançamento do $nomeFilme: $anoLancamento\n";
    echo "Os clássicos são sempre os melhores...\n";
}

// Usando match, combinação de uma variável a outra.
// Nessa abordagem, o filme tem um determinado genêro de acordo com o nome dele.
$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Thor - Ragnarok" => "Ficção",
    "Se beber, não case!" => "Comédia",
    // Passamos um valor default para o match, caso ele não encontre nenhum dos valores informados a ele.
    default => "Gênero Desconhecido",
};

echo "Nome do Filme: $nomeFilme \n";
echo "Genero: $genero\n";

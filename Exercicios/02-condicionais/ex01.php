<?php
// Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite)
// dependendo do horário encontrado numa variável (inteiro representando as horas).

/* Usando match do Screenmatch como exemplo:
$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Thor - Ragnarok" => "Ficção",
    "Se beber, não case!" => "Comédia",
    // Passamos um valor default para o match, caso ele não encontre nenhum dos valores informados a ele.
    default => "Gênero Desconhecido",
};
*/
$numeroDigitado = readline("Digite um número entre 0 e 24\n");


if (trim($numeroDigitado) !== "") {
    if ($numeroDigitado >= 0 && $numeroDigitado <=5.59){
        echo "Boa madrugada!";
    } elseif ($numeroDigitado >= 6 && $numeroDigitado <= 11.59){
        echo "Bom dia!";
    } elseif ($numeroDigitado >= 12 && $numeroDigitado <= 17.59){
        echo "Boa tarde!";
    } elseif ($numeroDigitado >= 18 && $numeroDigitado <= 23.99) {
        echo "Boa noite!";
    }
} else {
    echo "Entrada Inválida! Tente novamente!";
}

<?php

/*
Falando sobre os operadores, estamos abordando operadores aritméticos que são padrão de toda linguagem.
*/

$valorA = 5;
$valorB = 10;

// Operadores Aritméticos.
// Soma
$some = $valorA + $valorB;
echo $some;

// Subtracao
$subtract = $valorA - $valorB;
echo $subtract;

// Multiplicação

$multi = $valorA * $valorB;
echo $multi;

// Divisao
$div = $valorA / $valorB;
echo $div;

// Resto da divisao
$rest_div = $valorA % $valorB;
echo $rest_div;

// Potenciacao
$potencia = $valorA ** $valorB;
echo $potencia;

/*
 * No PHP, também tem o padrao de operadores de atribuição
 *
*/
// Definimos o valor da variavel
$valorA = 15;
$valorA += 2; // Mesma coisa de escrever valorA = valorA + 2;
echo $valorA;

// Operadores de Comparação
$valorA = 15;
$valorB = 12;

$equal = $valorA == $valorB;
$diference = $valorA != $valorB;
$bigger = $valorA > $valorB;
$small = $valorA < $valorB;

// Há uma diferença que é nos operadores de == e ===, != e !==:
// Os tipos são levados em consideração para essa comparação.
$notEqual = $valorA !== $valorB; //  aqui estamos afirmando que são diferentes em valores, mas tipos iguais
$identical = $valorA === $valorB; // Aqui estamos comparando tipo e valor

// Operadores lógicos:
// AND, OR e NOT
// &&, ||, !


// Operadores de incremento e decremento:
$num = 5;
$resultado = ++$num; // Estamos incrementando o num para 6 e depois atribuindo ao resultado.
echo $num; // Vai retornar 6
echo $resultado; // vai retornar 6

$num = 6; //  Estamos definindo num como 6
$resultado = $num++; // Estmamos dizendo que o resultado vai ser num incrementado
echo $num; // vai imprimir 6
echo $resultado; // vai imprimir 7
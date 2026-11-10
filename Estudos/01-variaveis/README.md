# 01 · VARIÁVEIS

Primeiro contato com a linguagem: como o PHP guarda valores em variáveis, faz contas, compara coisas e recebe dados do terminal.

## Ordem de estudo

| # | Arquivo | O que você aprende |
|---|---------|--------------------|
| 1 | [`operadores.php`](operadores.php) | Operadores aritméticos, de atribuição, de comparação, lógicos e de incremento |
| 2 | [`string-numerica.php`](string-numerica.php) | Por que `"5" + "10"` dá `15` no PHP |
| 3 | `argv.php` *(próximo)* | Como receber dados pelo terminal com `$argv` |

## Resumo dos conceitos

### Operadores

| Tipo | Operadores | Exemplo |
|------|-----------|---------|
| Aritméticos | `+ - * / % **` | `5 ** 2` → `25` |
| Atribuição | `= += -= *= /= .=` | `$a += 2` é o mesmo que `$a = $a + 2` |
| Comparação | `== != > < >= <=` | compara só o **valor** |
| Comparação estrita | `=== !==` | compara **valor e tipo** |
| Lógicos | `&& \|\| !` (ou `and or not`) | `$prime \|\| $ano < 2020` |
| Incremento | `++$a  $a++  --$a  $a--` | ver abaixo |

**`==` x `===`:**

```php
var_dump(5 == "5");   // true  → o PHP converte e compara só o valor
var_dump(5 === "5");  // false → int e string são tipos diferentes
var_dump(5 !== "5");  // true  → diferente em valor OU em tipo
```

**Pré-incremento x pós-incremento:**

```php
$num = 5;
$resultado = ++$num; // primeiro soma, depois entrega → $num = 6, $resultado = 6

$num = 5;
$resultado = $num++; // primeiro entrega, depois soma → $num = 6, $resultado = 5
```

### Strings numéricas

O PHP tem **tipagem dinâmica**. Quando você usa `+` com duas strings que *parecem* números, ele converte para número antes de somar:

```php
echo "5" + "10";  // 15
echo "5" . "10";  // 510 → o ponto (.) é o operador de CONCATENAÇÃO no PHP
```

> Diferente do Java, onde `"5" + "10"` dá `"510"`. No PHP, `+` é sempre soma e `.` é sempre concatenação.

Se a string não for numérica (`"abc" + 1`), o PHP 8 lança um `TypeError`.

### Entrada de dados com `$argv`

`$argv` é um array com os argumentos digitados depois do nome do arquivo:

```bash
php screenmatch.php 2019
```

```php
$argv[0]; // "screenmatch.php" → sempre o nome do script
$argv[1]; // "2019"            → primeiro argumento (chega como string!)

$ano = $argv[1] ?? 2022; // ?? usa 2022 se nenhum argumento for passado
```

## Onde isso foi aplicado

- Exercícios: [`Exercicios/01-variaveis`](../../Exercicios/01-variaveis/README.md)
- Projeto: [`Projetos/01-screenmatch-cli`](../../Projetos/01-screenmatch-cli/README.md)

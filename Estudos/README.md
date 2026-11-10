# ESTUDOS

**Primeiro passo de cada tópico:** entender o conceito. Os estudos são separados **por tópico**, uma pasta para cada,
e cada arquivo `.php` foca em um assunto, com comentários explicando o que está acontecendo.
Aqui ficam o índice e **o que aprendi / decidi** em cada estudo.

### TÓPICOS
| # | Tópico | Assuntos | Exercícios | Status |
|---|---|---|---|---|
| 01 | [Variáveis](01-variaveis/README.md) | Tipos, operadores, strings numéricas, `$argv` | [ver](../Exercicios/01-variaveis/README.md) | 🟡 |
| 02 | [Condicionais](02-condicionais/README.md) | `if`/`elseif`/`else`, ternário, `??`, `switch`, `match` | [ver](../Exercicios/02-condicionais/README.md) | ⚪ |
| 03 | [Loops](03-loops/README.md) | `for`, `while`, `do-while`, `foreach`, `break`/`continue` | [ver](../Exercicios/03-loops/README.md) | ⚪ |
| 04 | [Funções](04-funcoes/README.md) | Parâmetros, retorno, tipagem, escopo, arrow functions | [ver](../Exercicios/04-funcoes/README.md) | ⚪ |
| 05 | [Manipulação de arquivos](05-manipulacao-de-arquivos/README.md) | `file_get_contents`, `fopen`, CSV, JSON | [ver](../Exercicios/05-manipulacao-de-arquivos/README.md) | ⚪ |
| 06 | [Tratamento de erros](06-tratamento-de-erros/README.md) | `try`/`catch`/`finally`, `throw`, exceções | [ver](../Exercicios/06-tratamento-de-erros/README.md) | ⚪ |

### ÍNDICE DE ESTUDOS
| Tópico | Estudo | Arquivo | Assunto |
|---|---|---|---|
| 01 · Variáveis | Operadores | `01-variaveis/operadores.php` | Aritméticos, atribuição, comparação (`==` x `===`), lógicos e incremento |
| 01 · Variáveis | String numérica | `01-variaveis/string-numerica.php` | Por que `"5" + "10"` dá `15` no PHP |
| 01 · Variáveis | `$argv` | `01-variaveis/argv.php` | Receber dados pelo terminal *(próximo)* |

### COMO RODAR
Pelo PhpStorm, abra o arquivo e use *Run*. Pelo terminal (na raiz do repositório):
```bash
php Estudos/01-variaveis/operadores.php
php Estudos/01-variaveis/string-numerica.php
```

Depois de rodar, mude valores e quebre o código para ver o que acontece. Em seguida, vá para [`Exercicios/`](../Exercicios/README.md).

---

## Aprendizados e decisões

### `+` soma, `.` concatena (`string-numerica.php`)
No Java, `"5" + "10"` dá `"510"`. No PHP, o mesmo código imprime `15`: o `+` é **sempre** soma, e quando as
duas strings parecem números o PHP converte antes de somar. Para juntar textos o operador é o ponto (`"5" . "10"` → `510`).
Se a string não for numérica (`"abc" + 1`), o PHP 8 lança um `TypeError`.
**Decisão:** usar `.` (ou interpolação) para texto e nunca contar com a conversão automática para fazer contas com strings.

### `==` x `===` (`operadores.php`)
`==` compara só o **valor** (o PHP converte os tipos antes), enquanto `===` compara **valor e tipo**.
`5 == "5"` é `true`, mas `5 === "5"` é `false`.
**Decisão:** preferir `===` e `!==`, que não têm surpresas de conversão. É também o que o `match` usa por baixo.

### Pré x pós-incremento (`operadores.php`)
`++$num` incrementa **antes** de entregar o valor; `$num++` entrega o valor atual e só **depois** incrementa.
Com `$num = 5`, `$r = $num++` deixa `$r = 5` e `$num = 6`. Só faz diferença quando o incremento está dentro de uma expressão.

### `echo` não quebra linha sozinho (`operadores.php`)
Ao rodar `operadores.php`, todos os resultados saem grudados (`15-5500.5...`). Diferente do `System.out.println`,
o `echo` não adiciona quebra de linha. É preciso concatenar `"\n"` (ou `PHP_EOL`) no final.

---

## Padrão dos arquivos
- Nome em `kebab-case`, descrevendo o assunto: `operadores.php`, `string-numerica.php`.
- Começa com um comentário de bloco explicando o tema.
- Cada trecho tem um comentário dizendo **o que** faz e **o que vai aparecer** no terminal.

<!--
MODELO PARA NOVO ESTUDO (adicione uma linha no ÍNDICE e, se houver algo importante, uma seção abaixo)

### Título do aprendizado (`nome-do-arquivo.php`)
O que eu esperava, o que aconteceu e qual regra/decisão tirei disso.
-->

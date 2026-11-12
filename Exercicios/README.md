# EXERCÍCIOS

**Segundo passo de cada tópico:** praticar. Os exercícios usam **as mesmas pastas de [`Estudos/`](../Estudos/README.md)**:
`Exercicios/02-condicionais` pratica o que foi visto em `Estudos/02-condicionais`, e assim por diante.
Aqui ficam o enunciado resumido, como rodar e, principalmente, **as decisões tomadas** durante a resolução.

> **Tente resolver sozinho antes** de abrir a minha solução. Existe mais de um jeito certo.

### TÓPICOS
| # | Tópico | Teoria | Status |
|---|---|---|---|
| 01 | [Variáveis](01-variaveis/README.md) | [`Estudos/01-variaveis`](../Estudos/01-variaveis/README.md) | 🟡 |
| 02 | [Condicionais](02-condicionais/README.md) | [`Estudos/02-condicionais`](../Estudos/02-condicionais/README.md) | 🟡 |
| 03 | [Loops](03-loops/README.md) | [`Estudos/03-loops`](../Estudos/03-loops/README.md) | ⚪ |
| 04 | [Funções](04-funcoes/README.md) | [`Estudos/04-funcoes`](../Estudos/04-funcoes/README.md) | ⚪ |
| 05 | [Manipulação de arquivos](05-manipulacao-de-arquivos/README.md) | [`Estudos/05-manipulacao-de-arquivos`](../Estudos/05-manipulacao-de-arquivos/README.md) | ⚪ |
| 06 | [Tratamento de erros](06-tratamento-de-erros/README.md) | [`Estudos/06-tratamento-de-erros`](../Estudos/06-tratamento-de-erros/README.md) | ⚪ |

### ÍNDICE DE EXERCÍCIOS
| Exercício | Arquivo | O que pratica | Status |
|---|---|---|---|
| [MediaNotas](#medianotas) | `01-variaveis/MediaNotas.php` | Operadores aritméticos, interpolação e `if`/`elseif`/`else` (também listado em `02-condicionais`) | ✅ |
| [Nome](#nome) | `01-variaveis/Nome.php` | Atribuição e impressão de variáveis | ✅ |
| [MetrosECentimetros](#metrosecentimetros) | `01-variaveis/MetrosECentimetros.php` | Conversão de unidades | ⚪ |
| [Celsius&Fahrenheit](#celsiusfahrenheit) | `01-variaveis/Celsius&Fahrenheit.php` | Fórmula de conversão de temperatura | ⚪ |
| [AnoBissexto](#anobissexto) | `01-variaveis/AnoBissexto.php` | Resto da divisão (`%`) e operadores lógicos | ⚪ |
| [manipulandoDados](#manipulandodados) | `01-variaveis/manipulandoDados.php` | Variáveis do filme, média, lógicos e interpolação | 🟡 |
| [Lista de loops](03-loops/README.md) | `03-loops/loop1.php` a `loop10.php` | `for`, `while`, contadores, acumuladores e sentinelas | 🟡 |

### COMO RODAR
Pelo PhpStorm, abra o arquivo e use *Run*. Pelo terminal (na raiz do repositório):
```bash
php Exercicios/01-variaveis/MediaNotas.php

# o & no nome do arquivo precisa de aspas no terminal
php "Exercicios/01-variaveis/Celsius&Fahrenheit.php"
```

---

## MediaNotas
**Arquivo:** `01-variaveis/MediaNotas.php`

**Enunciado:** crie um programa em PHP que calcule a média de três notas e exiba o resultado.

**Conceitos praticados:** variáveis `int` e `float`, operadores aritméticos, precedência com parênteses,
interpolação de strings e `if`/`elseif`/`else`.

**Saída:**
```
A média das notas 10, 8, 7.5 é: 8.5
Aluno aprovado!
```

### Decisão: parênteses na soma antes da divisão
`($nota1 + $nota2 + $nota3) / 3`. Sem os parênteses, a divisão tem precedência e só a última nota seria dividida por 3.

### Decisão: ir além do enunciado e classificar o aluno
O enunciado pede só a média, mas acrescentei uma situação final para praticar condicionais:

| Média | Situação |
|---|---|
| `>= 7` | Aprovado |
| `>= 5` e `< 7` | Recuperação |
| `< 5` | Reprovado |

### Próximos passos
- [ ] Receber as notas pelo terminal com `$argv` em vez de deixar fixas no código
- [ ] Formatar a média com duas casas decimais (`number_format($media, 2)`)
- [ ] Simplificar o `elseif`: o `$media < 7` é redundante, porque o primeiro `if` já tratou `>= 7`

---

## Nome
**Arquivo:** `01-variaveis/Nome.php`

**Enunciado:** escreva um programa em PHP que exiba seu nome na tela.

**Conceitos praticados:** atribuição de variável e `echo`.

*(resolução já iniciada no arquivo)*

---

## MetrosECentimetros
**Arquivo:** `01-variaveis/MetrosECentimetros.php`

**Enunciado:** elabore um programa em PHP que receba um valor em metros e converta para centímetros.

**Conceitos praticados:** `$argv`, operadores aritméticos (`* 100`).

O arquivo contém objetivo, relação entre as unidades, roteiro de raciocínio,
exemplos, requisitos e desafio opcional, sem entregar a solução.

---

## Celsius&Fahrenheit
**Arquivo:** `01-variaveis/Celsius&Fahrenheit.php`

**Enunciado:** converter uma temperatura de Celsius para Fahrenheit (`F = C × 1,8 + 32`).

**Conceitos praticados:** operadores aritméticos e precedência.

O arquivo explica a fórmula, a ordem das operações e casos de teste úteis,
incluindo temperaturas negativas, sem entregar a solução.

---

## AnoBissexto
**Arquivo:** `01-variaveis/AnoBissexto.php`

**Enunciado:** desenvolva um programa em PHP que verifique se um ano é bissexto ou não.

**Conceitos praticados:** resto da divisão (`%`), `&&`, `||` e `if`/`else`.
Regra: divisível por 4 **e** não divisível por 100, **ou** divisível por 400.

O arquivo divide a regra em perguntas booleanas e propõe testes para anos comuns,
divisíveis por 4, por 100 e por 400, sem entregar a solução.

---

## Lista de loops
**Arquivos:** `03-loops/loop1.php` a `03-loops/loop10.php`

O primeiro exercício é o exemplo resolvido de números ímpares. Os demais formam
uma progressão com quatro exercícios de `for` e cinco de `while`. Cada enunciado
explica por que aquela estrutura é adequada e orienta o raciocínio sem fornecer
o código pronto. Veja a [lista completa e o guia de escolha](03-loops/README.md).

---

## manipulandoDados
**Arquivo:** `01-variaveis/manipulandoDados.php`

**Enunciado:** desafio da Alura aplicando os fundamentos ao ScreenMatch:
1. Definir variáveis com informações do filme (nome, ano de lançamento, nota e se está incluído no plano).
2. Usar soma e divisão para chegar à média de várias notas.
3. Usar operadores lógicos para definir se o filme está incluído no plano.
4. Usar concatenação e interpolação para formatar a exibição dos dados.

**Conceitos praticados:** `$argv`, `??`, operadores aritméticos e lógicos, concatenação (`.`) e interpolação.

### Decisão: nome do filme vindo de `$argv[1] ?? "Filme de Ação"`
O nome pode ser passado ao rodar o script (`php manipulandoDados.php "Duna"`). Se nada for passado,
o `??` usa um valor padrão em vez de gerar o aviso *Undefined array key 1*.

### Próximos passos
- [ ] Calcular a média de várias notas (passo 2)
- [ ] Definir `$inclusoNoPlano` com operadores lógicos (passo 3)
- [ ] Exibir os dados formatados (passo 4)
- [ ] Remover o `echo "Digite o nome do filme"`: com `$argv` o nome é passado **antes** de rodar, o programa não espera digitação

---

<!--
MODELO PARA NOVO EXERCÍCIO (copie o bloco abaixo, preencha e adicione uma linha no ÍNDICE)

## NomeDoExercicio
**Arquivo:** `pasta/NomeDoExercicio.php`

**Enunciado:** resumo do que o exercício pede.

**Conceitos praticados:** ...

### Decisão: título curto da decisão
O que foi feito, o que foi tentado antes (se houver) e por que essa escolha foi melhor.

### Próximos passos
- [ ] ...
-->

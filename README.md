# APRENDIZADO EM PHP - INICIANDO E AVANÇANDO

<p align="left">
  <img src="https://img.shields.io/badge/PHP-8.5-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.5"/>
  <img src="https://img.shields.io/badge/PhpStorm-000000?style=for-the-badge&logo=phpstorm&logoColor=white" alt="PhpStorm"/>
  <img src="https://img.shields.io/badge/CLI-Terminal-4D4D4D?style=for-the-badge&logo=gnometerminal&logoColor=white" alt="PHP CLI"/>
  <img src="https://img.shields.io/badge/Alura-Formação_PHP-051933?style=for-the-badge" alt="Alura - Formação PHP"/>
  <img src="https://img.shields.io/badge/status-em_aprendizado-blueviolet?style=for-the-badge" alt="Status: em aprendizado"/>
</p>

<p align="left">
  <img src="https://img.shields.io/github/last-commit/pauloqueirozz01/php?style=flat-square" alt="Último commit"/>
  <img src="https://img.shields.io/github/commit-activity/m/pauloqueirozz01/php?style=flat-square" alt="Commits por mês"/>
  <img src="https://img.shields.io/github/languages/top/pauloqueirozz01/php?style=flat-square" alt="Linguagem principal"/>
  <img src="https://img.shields.io/github/repo-size/pauloqueirozz01/php?style=flat-square" alt="Tamanho do repositório"/>
</p>

No repositório atual, você conseguirá visualizar parte da minha trilha de aprendizado de PHP e sua sintaxe,
junto com listas de exercícios separadas por tópico e o **ScreenMatch**, um catálogo de filmes e séries
que evolui em versões conforme eu avanço na linguagem.
É o mesmo formato do meu [repositório de Java](https://github.com/pauloqueirozz01/java), agora com PHP.

### INTUITO DO REPOSITÓRIO
Este repositório registra o início e a evolução da minha jornada com PHP: do primeiro `echo` até uma
aplicação web com API, banco de dados e Docker. A ordem dos assuntos segue a **Formação/Carreira de PHP da Alura**,
com o método **estudar o conceito → praticar com exercícios → aplicar no projeto**.
A ideia é que qualquer pessoa (inclusive eu no futuro) consiga ver o caminho percorrido e seguir o mesmo trajeto.

### ESTRUTURA DO REPOSITÓRIO
```
ScreenMatch/
├── README.md                   → você está aqui (visão geral)
├── docs/                       → trilha de estudos, roadmap e convenções do repositório
├── Estudos/                    → 1º PASSO: uma pasta por tópico, um arquivo por conceito + README
│   ├── 01-variaveis/                 → variáveis, tipos, operadores e strings numéricas
│   ├── 02-condicionais/              → if/elseif/else, ternário, switch e match
│   ├── 03-loops/                     → for, while, do-while e foreach
│   ├── 04-funcoes/                   → declaração, parâmetros, retorno e tipagem
│   ├── 05-manipulacao-de-arquivos/   → leitura e escrita de arquivos, CSV e JSON
│   └── 06-tratamento-de-erros/       → try/catch/finally, throw e exceções
├── Exercicios/                 → 2º PASSO: mesmas pastas de Estudos/, com as resoluções + README
│   └── 01-variaveis/ ... 06-tratamento-de-erros/
└── Projetos/                   → 3º PASSO: o ScreenMatch evoluindo em versões + README
    └── 01-screenmatch-cli/     → primeira versão, roda no terminal
```

A **mesma pasta em `Estudos/` e `Exercicios/`** significa o mesmo assunto: primeiro você estuda em
`Estudos/02-condicionais`, depois pratica em `Exercicios/02-condicionais`. A numeração indica a ordem sugerida.

Cada versão do projeto dentro de `Projetos/` é uma **pasta separada que nunca é apagada**,
então dá para comparar a primeira com a última e ver como o código evoluiu.

### COMO RODAR NA SUA MÁQUINA

**Pré-requisitos:** [PHP 8.x](https://www.php.net/downloads) (uso o 8.5; confira com `php -v`) e, opcionalmente, o [PhpStorm](https://www.jetbrains.com/phpstorm/).

```bash
git clone https://github.com/pauloqueirozz01/php.git
cd php
```

**Pelo PhpStorm:** abra a pasta do projeto, abra o arquivo `.php` desejado e use **Run** (clique direito no arquivo → *Run*).
Na primeira vez, configure o interpretador em *Settings → PHP → CLI Interpreter*.
Para passar argumentos (`$argv`), edite a Run Configuration e preencha o campo *Arguments*.

**Pelo terminal (na raiz do repositório):**
```bash
# um arquivo de estudo
php Estudos/01-variaveis/string-numerica.php

# um exercício
php Exercicios/01-variaveis/MediaNotas.php

# o projeto, passando o ano de lançamento como argumento ($argv)
php Projetos/01-screenmatch-cli/screenmatch.php 2019
```

> Diferente do Java, o PHP é **interpretado**: não existe etapa de compilação, basta rodar `php arquivo.php`.

### TRAJETÓRIA ATÉ AQUI
| # | Tópico | Estudos | Exercícios | Status |
|---|---|---|---|---|
| 01 | Variáveis: tipos, operadores, strings numéricas, `$argv` | [ver](Estudos/01-variaveis/README.md) | [ver](Exercicios/01-variaveis/README.md) | 🟡 Em andamento |
| 02 | Condicionais: `if`/`elseif`/`else`, ternário, `switch`, `match` | [ver](Estudos/02-condicionais/README.md) | [ver](Exercicios/02-condicionais/README.md) | ⚪ Não iniciado |
| 03 | Loops: `for`, `while`, `do-while`, `foreach` | [ver](Estudos/03-loops/README.md) | [ver](Exercicios/03-loops/README.md) | ⚪ Não iniciado |
| 04 | Funções: parâmetros, retorno, tipagem, escopo | [ver](Estudos/04-funcoes/README.md) | [ver](Exercicios/04-funcoes/README.md) | ⚪ Não iniciado |
| 05 | Manipulação de arquivos: leitura, escrita, CSV, JSON | [ver](Estudos/05-manipulacao-de-arquivos/README.md) | [ver](Exercicios/05-manipulacao-de-arquivos/README.md) | ⚪ Não iniciado |
| 06 | Tratamento de erros: `try`/`catch`, `throw`, exceções | [ver](Estudos/06-tratamento-de-erros/README.md) | [ver](Exercicios/06-tratamento-de-erros/README.md) | ⚪ Não iniciado |

O projeto [01-screenmatch-cli](Projetos/01-screenmatch-cli/README.md) já aplica os tópicos 01 e 02.

A trilha completa (o que vem depois) está em [`docs/TRILHA.md`](docs/TRILHA.md).
Legenda: ✅ Concluído · 🟡 Em andamento · ⚪ Não iniciado

### EXERCICIOS PARA QUEM SE INTERESSAR EM PRATICAR E SUAS RESOLUÇÕES
As resoluções ficam em `Exercicios/`, organizadas por tópico.
O enunciado e as decisões de cada um estão em [`Exercicios/README.md`](Exercicios/README.md).

| Exercício | Caminho | O que pratica | Status |
|---|---|---|---|
| MediaNotas | `Exercicios/01-variaveis/MediaNotas.php` | Operadores aritméticos, interpolação de strings e `if`/`elseif`/`else` | ✅ |
| Nome | `Exercicios/01-variaveis/Nome.php` | Atribuição e impressão de variáveis com `echo` | ⚪ |
| MetrosECentimetros | `Exercicios/01-variaveis/MetrosECentimetros.php` | Conversão de unidades com operadores aritméticos | ⚪ |
| Celsius&Fahrenheit | `Exercicios/01-variaveis/Celsius&Fahrenheit.php` | Fórmula de conversão de temperatura | ⚪ |
| AnoBissexto | `Exercicios/01-variaveis/AnoBissexto.php` | Resto da divisão (`%`) e operadores lógicos | ⚪ |
| manipulandoDados | `Exercicios/01-variaveis/manipulandoDados.php` | Variáveis do filme, média de notas, operadores lógicos e interpolação | 🟡 |

### PROJETOS DESENVOLVIDOS DENTRO DO REPOSITÓRIO
| Projeto | Tipo | Caminho | Arquivo principal | Status |
|---|---|---|---|---|
| ScreenMatch CLI | Terminal | `Projetos/01-screenmatch-cli` | `screenmatch.php` | 🟡 |

**Para criar uma nova versão:** copie a pasta da versão anterior, renomeie com o próximo número
(`02-screenmatch-funcoes`...) e atualize o README dela. O passo a passo está em [`Projetos/README.md`](Projetos/README.md).

### TECNOLOGIAS, RECURSOS DA LINGUAGEM E DECISÕES TOMADAS DURANTE O APRENDIZADO
#### Ferramentas
| Tecnologia | Para que serve | Por que escolhi |
|---|---|---|
| **PHP 8.5 (CLI)** | Linguagem e interpretador usados no repositório | Versão mais recente: recursos modernos como `match` e erros mais claros (`TypeError`) |
| **PhpStorm** | IDE para escrever, rodar e depurar o código | Mesma família do IntelliJ que uso no Java: autocompletar, inspeções e Run Configurations |
| **Git + GitHub** | Versionar e publicar a trilha de estudos | Deixa o histórico de evolução visível para qualquer pessoa |

#### Recursos nativos utilizados
Tudo abaixo já vem no PHP, então não é preciso instalar nenhuma dependência externa (o Composer só entra na fase de orientação a objetos).

| Recurso | Onde é usado | O que faz | Por que escolhi |
|---|---|---|---|
| `echo` | todos os arquivos | Imprime texto no terminal | Forma mais simples de mostrar resultados, equivalente ao `System.out.println` |
| Interpolação (`"Nome: $nomeFilme"`) | `screenmatch.php`, `MediaNotas.php` | Coloca o valor da variável direto dentro da string com aspas duplas | Mais legível do que concatenar com `.` várias vezes |
| `$argv` | `screenmatch.php`, `manipulandoDados.php` | Array com os argumentos digitados depois do nome do arquivo | Jeito mais simples de receber dados no terminal sem ler o teclado interativamente |
| `??` (null coalescing) | `screenmatch.php`, `manipulandoDados.php` | Usa um valor padrão quando o argumento não existe | Evita o aviso *Undefined array key* quando o script roda sem argumentos |
| `\|\|` e `&&` | `screenmatch.php` | Operadores lógicos OU / E | Decidir se o filme está incluso no plano a partir de duas condições |
| `if` / `elseif` / `else` | `screenmatch.php`, `MediaNotas.php` | Executa blocos diferentes conforme faixas de valores | Ideal para faixas (ano de lançamento, média de notas) |
| `match` | `screenmatch.php` | Associa um valor a um resultado, com `default` | Mais curto que `switch`, compara com `===` e devolve um valor |

> **Por que `$argv` e não `readline()`/`fgets(STDIN)`?** `$argv` não deixa o programa parado esperando digitação,
> então dá para rodar e testar o script com vários valores rapidamente (`php screenmatch.php 2019`).
> A leitura interativa do teclado fica para quando o projeto precisar de um menu.

#### Decisões de cada exercício, estudo e projeto
As decisões específicas ficam documentadas no README de cada pasta:

- [`Estudos/README.md`](Estudos/README.md) → índice dos estudos e o que aprendi em cada um (ex.: por que `"5" + "10"` dá `15`)
- [`Exercicios/README.md`](Exercicios/README.md) → enunciado e decisões de cada exercício (ex.: faixas de média no `MediaNotas`)
- [`Projetos/README.md`](Projetos/README.md) → objetivo e decisões de cada versão do ScreenMatch (ex.: por que `match`)
- [`docs/CONVENCOES.md`](docs/CONVENCOES.md) → padrões de nomes, pastas, código e commits

### REFERÊNCIA
Trilha de conteúdo baseada na **Carreira/Formação PHP da [Alura](https://www.alura.com.br/)**.
Os códigos e anotações são meus, escritos enquanto estudava.

### AUTOR
**Paulo André Santos Queiroz**

[![GitHub](https://img.shields.io/badge/GitHub-pauloqueirozz01-181717?style=flat-square&logo=github)](https://github.com/pauloqueirozz01)

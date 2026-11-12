# 03 · EXERCÍCIOS DE LOOPS

Praticando nesta primeira lista: `for`, `while`, contadores, acumuladores,
validação de entrada e valores sentinela.
Teoria do tópico: [`Estudos/03-loops`](../../Estudos/03-loops/README.md)

### COMO ESCOLHER ENTRE `for` E `while`

Use `for` quando a quantidade de repetições ou o intervalo já estiver claro antes
do loop começar: contar de 1 a 10, percorrer de 0 a 100 ou repetir uma ação 5 vezes.

Use `while` quando a repetição depender de uma condição e você não souber quantas
tentativas serão necessárias: aguardar a senha correta, validar uma nota ou manter
um menu aberto até o usuário escolher sair.

> Pergunta prática: **"Eu já sei quantas vezes vou repetir?"** Se sim, `for`
> costuma expressar melhor a intenção. Se não, pense em `while` e identifique o
> que precisa mudar para a condição se tornar falsa.

### LISTA
| # | Exercício | Estrutura indicada | Conceitos | Arquivo | Status |
|---|---|---|---|---|---|
| 01 | Números ímpares de 0 a 100 | `for` | Intervalo, contador e módulo | [`loop1.php`](./loop1.php) | ✅ Exemplo resolvido |
| 02 | Contagem regressiva | `for` | Contador decrescente | [`loop2.php`](./loop2.php) | ⚪ |
| 03 | Tabuada de um número | `for` | Contador usado no cálculo | [`loop3.php`](./loop3.php) | ⚪ |
| 04 | Soma de 1 até N | `for` | Acumulador | [`loop4.php`](./loop4.php) | ⚪ |
| 05 | Múltiplos em um intervalo | `for` | Módulo e dois contadores | [`loop5.php`](./loop5.php) | ⚪ |
| 06 | Solicitar a senha correta | `while` | Condição de parada e entrada | [`loop6.php`](./loop6.php) | ⚪ |
| 07 | Validar uma nota | `while` | Validação de intervalo | [`loop7.php`](./loop7.php) | ⚪ |
| 08 | Somar até digitar zero | `while` | Sentinela e acumulador | [`loop8.php`](./loop8.php) | ⚪ |
| 09 | Alcançar uma meta | `while` | Estado, contador e acumulador | [`loop9.php`](./loop9.php) | ⚪ |
| 10 | Menu interativo | `while` | Repetição controlada pelo usuário | [`loop10.php`](./loop10.php) | ⚪ |

### COMO RODAR
```bash
php Exercicios/03-loops/NomeDoExercicio.php
```

Os arquivos ainda não resolvidos contêm apenas o enunciado orientado. Leia as
perguntas, escreva sua solução abaixo do comentário e teste os casos sugeridos.

<!--
MODELO PARA NOVO EXERCÍCIO: adicione uma linha na LISTA acima e a seção completa
(Enunciado, Conceitos praticados, Decisões, Próximos passos) em Exercicios/README.md.
-->

# 01 · ScreenMatch CLI

Primeira versão do ScreenMatch: um script que roda no terminal, mostra os dados de um filme e decide se ele está incluso no plano do usuário.

## Como rodar

```bash
php Projetos/01-screenmatch-cli/screenmatch.php          # usa o ano padrão (2022)
php Projetos/01-screenmatch-cli/screenmatch.php 2019     # informa o ano de lançamento
```

## O que o código faz

1. Define os dados do filme em variáveis (`$nomeFilme`, `$notaFilme`...).
2. Lê o ano de lançamento do terminal com `$argv[1]`. Se nada for passado, usa `2022` (operador `??`).
3. Mostra os dados com `echo` e interpolação de string (`"Nome: $nomeFilme"`).
4. Usa operadores lógicos para decidir se o filme está incluso no plano:
   - `||` (OU): incluso se o usuário for Prime **ou** o filme for anterior a 2020.
   - `&&` (E): incluso só se as duas condições forem verdadeiras.

## Conceitos aplicados

- Variáveis e tipos (string, int, float, bool)
- Interpolação de strings
- Entrada de dados com `$argv` e o operador `??`
- Operadores de comparação e lógicos

Teoria: [`Estudos/01-fundamentos`](../../Estudos/01-fundamentos/README.md)

## Próxima versão

`02-screenmatch-funcoes`: guardar várias notas em arrays, calcular a média com laços e organizar o código em funções.

# 01 · SCREENMATCH CLI

Primeira versão do ScreenMatch: um script que roda no terminal, mostra os dados de um filme,
decide se ele está incluso no plano do usuário e descobre o gênero pelo nome.

### COMO RODAR
```bash
php Projetos/01-screenmatch-cli/screenmatch.php          # usa o ano padrão (2022)
php Projetos/01-screenmatch-cli/screenmatch.php 2019     # informa o ano de lançamento
```

**Saída com `2019`:**
```
Nome do Filme: Se beber, não case!
Nota do Filme: 9.7
Ano de Lançamento: 2019
Incluso no plano: Sim.
Este filme é um pouco antigo. Ano de Lançamento do Se beber, não case!: 2019
Os clássicos são sempre os melhores...
Genero: Comédia
```

### O QUE O CÓDIGO FAZ
1. Define os dados do filme em variáveis (`$nomeFilme`, `$notaFilme`, `$planoPrime`...).
2. Lê o ano de lançamento do terminal com `$argv[1]`. Se nada for passado, usa `2022` (operador `??`).
3. Mostra os dados com `echo` e interpolação de string (`"Nome do Filme: $nomeFilme"`).
4. Usa operadores lógicos para decidir se o filme está incluso no plano.
5. Classifica o filme por ano com `if`/`elseif`/`else`: lançamento (`>= 2022`), novo (2021) ou clássico.
6. Descobre o gênero pelo nome com `match`.

### CONCEITOS APLICADOS
| Conceito | Trecho |
|---|---|
| Variáveis e tipos (string, int, float, bool) | `$notaFilme = 9.7;` · `$planoPrime = true;` |
| Interpolação de strings | `"Nome do Filme: $nomeFilme \n"` |
| Entrada com `$argv` e `??` | `$anoLancamento = $argv[1] ?? 2022;` |
| Operadores lógicos | `$planoPrime \|\| $anoLancamento < 2020` |
| Condicionais | `if` / `elseif` / `else` por ano de lançamento |
| `match` | gênero a partir do nome do filme, com `default` |

Teoria: [`Estudos/01-variaveis`](../../Estudos/01-variaveis/README.md)

---

## Decisões

### `$argv[1] ?? 2022` para o ano
O ano é o dado que mais muda nos testes, então ele vem do terminal. O `??` garante um valor padrão quando
o script roda sem argumentos. O valor de `$argv` chega como **string** (`"2019"`), mas a comparação
`$anoLancamento < 2020` funciona porque o PHP converte strings numéricas (ver [`string-numerica.php`](../../Estudos/01-variaveis/string-numerica.php)).

### `||` x `&&` para o plano
Testei as duas regras:
- `$planoPrime || $anoLancamento < 2020` → incluso se o usuário for Prime **ou** o filme for antigo.
- `$planoPrime && $anoLancamento < 2020` → incluso só se as **duas** condições forem verdadeiras.

No código atual a linha com `&&` vem depois e sobrescreve a anterior, então é ela que vale
(por isso com `2022` a saída é "Incluso no plano: Não").

### `match` em vez de `switch` para o gênero
O `match` devolve um valor direto para a variável (`$genero = match (...)`), compara com `===`
(sem conversões surpresa), não precisa de `break` e obriga a pensar no `default`, usado aqui para
"Gênero Desconhecido".

### Reatribuir `$nomeFilme` para testar o `match`
`$nomeFilme` recebe três filmes seguidos e só o último vale ("Se beber, não case!"). Foi a forma rápida de
testar cada braço do `match` trocando a ordem das linhas.

---

## Próximos passos
- [ ] Remover o `echo $inclusoNoPlano;`: `echo` de um `bool` imprime `1` (true) ou nada (false), e o `1` sai grudado na linha seguinte
- [ ] Escolher uma regra só (`||` ou `&&`) para o plano e apagar a outra
- [ ] Remover o comentário `/** @var TYPE_NAME */` gerado pela IDE
- [ ] Ajustar a faixa do `elseif` (`> 2020 && < 2022` só pega 2021) e adicionar `\n` no fim da mensagem
- [ ] Receber também o nome do filme pelo terminal (`$argv[2]`)

## Próxima versão
`02-screenmatch-funcoes`: guardar várias notas em arrays, calcular a média com laços e organizar o código em funções.

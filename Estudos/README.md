# 📖 Estudos

Aqui fica o **primeiro passo de cada módulo**: entender o conceito.

Cada arquivo `.php` cobre **um assunto**, com comentários que explicam o que o código faz e **por que** o PHP se comporta assim. A ideia é você conseguir abrir o arquivo, ler os comentários, rodar e entender sem precisar de mais nada.

## Como estudar por aqui

1. Escolha o módulo (as pastas são numeradas na ordem da trilha).
2. Leia o `README.md` do módulo: ele resume os conceitos e indica a ordem dos arquivos.
3. Abra o arquivo, leia os comentários e **rode**:
   ```bash
   php Estudos/01-fundamentos/operadores.php
   ```
4. Mude valores, quebre o código, veja o que acontece. É assim que fixa.
5. Depois vá para a pasta correspondente em [`Exercicios/`](../Exercicios/README.md).

## Módulos

| # | Módulo | Assuntos | Status |
|---|--------|----------|--------|
| 01 | [Fundamentos](01-fundamentos/README.md) | Operadores, strings numéricas, entrada de dados com `$argv` | 🟡 |

## Padrão dos arquivos

- Nome em `kebab-case`, descrevendo o assunto: `operadores.php`, `string-numerica.php`.
- Começa com um comentário de bloco explicando o tema.
- Cada trecho tem um comentário dizendo **o que** faz e **o que vai aparecer** no terminal.

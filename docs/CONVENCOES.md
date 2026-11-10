# 📐 Convenções do repositório

Padrões para tudo continuar organizado conforme o repositório cresce.

## Pastas

- Pastas principais com inicial maiúscula: `Estudos/`, `Exercicios/`, `Projetos/` (sem acento, para evitar problemas no terminal e no Git).
- Subpastas numeradas com dois dígitos + `kebab-case`: `01-fundamentos/`, `02-estruturas-de-controle/`.
- **O mesmo número de módulo em `Estudos/` e `Exercicios/`** significa o mesmo assunto.
- **Toda pasta tem um `README.md`** explicando o que tem nela.

## Arquivos

| Onde | Padrão | Exemplo |
|------|--------|---------|
| Estudos | `kebab-case.php` com o nome do assunto | `string-numerica.php` |
| Exercícios | `NN-kebab-case.php` | `01-media-de-notas.php` |
| Classes (a partir da fase OO) | `PascalCase.php`, um por classe (PSR-4) | `src/Modelo/Filme.php` |

## Código

- Sempre começar com `<?php` e **não** fechar com `?>` em arquivos só de PHP.
- Variáveis e funções em `camelCase`: `$nomeFilme`, `calculaMedia()`.
- Classes em `PascalCase`, constantes em `MAIUSCULAS`.
- A partir da fase OO: `declare(strict_types=1);` no topo e estilo de código **PSR-12**.
- Comentários em português, explicando **o porquê**, não só o quê.

## Status nas tabelas

✅ Concluído · 🟡 Em andamento · ⚪ Não iniciado

## Commits (quando versionar com Git)

Formato: `tipo(escopo): descrição`

```
estudo(fundamentos): adiciona exemplos de $argv
exercicio(fundamentos): resolve exercício 01 - média de notas
projeto(cli): calcula inclusão no plano com operadores lógicos
docs: atualiza trilha
```

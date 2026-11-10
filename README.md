# 🎬 ScreenMatch — Minha trajetória com PHP

Repositório onde registro **como estou aprendendo PHP**, do primeiro `echo` até uma aplicação web com API, banco de dados e Docker.

A ordem dos assuntos segue a **Formação/Carreira de PHP da Alura**. O método é o deles: **estudar o conceito → praticar com exercícios → aplicar num projeto que evolui junto comigo**.
É o mesmo formato do meu ScreenMatch em Java, agora com PHP.

> **Para quem é este repositório?**
> Para mim (como prova do que estudei) e para **qualquer pessoa que queira aprender PHP sozinha** seguindo o mesmo caminho. Cada pasta tem um `README.md` que explica o que você vai encontrar ali e em que ordem estudar.

---

## 🗺️ Como navegar

```
ScreenMatch/
├── README.md            ← você está aqui (visão geral)
├── docs/                ← trilha de estudos, roadmap e convenções do repositório
├── Estudos/             ← 1º PASSO: anotações e códigos de cada conceito
├── Exercicios/          ← 2º PASSO: listas de exercícios da Alura resolvidas
└── Projetos/            ← 3º PASSO: o ScreenMatch evoluindo em versões
    └── 01-screenmatch-cli/
```

| Pasta | O que tem | Quando usar |
|-------|-----------|-------------|
| [`Estudos/`](Estudos/README.md) | Um arquivo por conceito, com comentários explicando o "porquê" | Para **entender** um assunto |
| [`Exercicios/`](Exercicios/README.md) | Enunciado + minha solução de cada exercício | Para **praticar** o que estudou |
| [`Projetos/`](Projetos/README.md) | Versões do ScreenMatch, da mais simples à mais completa | Para ver o conceito **aplicado de verdade** |
| [`docs/`](docs/README.md) | Trilha, roadmap e padrões do repositório | Para se **orientar** e manter o padrão |

**Sugestão de ordem:** para cada módulo (`01-fundamentos`, `02-...`), leia `Estudos/` → resolva `Exercicios/` → veja o que mudou em `Projetos/`.

---

## 📈 Trajetória até aqui

| # | Módulo | Estudos | Exercícios | Projeto | Status |
|---|--------|---------|------------|---------|--------|
| 01 | Fundamentos: variáveis, operadores, strings numéricas, `$argv` | [ver](Estudos/01-fundamentos/) | [ver](Exercicios/01-fundamentos/) | [01-screenmatch-cli](Projetos/01-screenmatch-cli/) | 🟡 Em andamento |

A trilha completa (o que vem depois) está em [`docs/TRILHA.md`](docs/TRILHA.md).

Legenda: ✅ Concluído · 🟡 Em andamento · ⚪ Não iniciado

---

## ▶️ Como rodar os códigos

**Pré-requisito:** PHP 8.x instalado (`php -v` para conferir).

Os arquivos de estudo e os projetos de terminal rodam direto no PHP CLI:

```bash
# Um arquivo de estudo
php Estudos/01-fundamentos/string-numerica.php

# O projeto, passando argumentos pela linha de comando ($argv)
php Projetos/01-screenmatch-cli/screenmatch.php 2019
```

Quando os projetos virarem web (API + banco + Docker), cada um terá seu próprio passo a passo no `README.md` da pasta dele.

---

## 🧰 Tecnologias

- **Agora:** PHP 8 (CLI)
- **Depois:** Composer, Programação Orientada a Objetos, PDO + banco de dados, API REST, Docker / Docker Compose

---

## 📚 Referência

Trilha de conteúdo baseada na **Carreira/Formação PHP da [Alura](https://www.alura.com.br/)**. Os códigos e anotações são meus, escritos enquanto estudava.

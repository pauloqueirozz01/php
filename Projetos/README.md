# 🚀 Projetos

**Terceiro passo:** aplicar. Aqui o ScreenMatch (um catálogo de filmes e séries) é construído e **reescrito em versões**, cada uma usando o que foi aprendido até ali.

**Cada versão é uma pasta separada e nunca é apagada.** Assim dá para comparar a `01` com a `04` e ver exatamente como o código evoluiu: de um script de terminal até uma API com banco de dados rodando em Docker.

## Versões

| # | Pasta | O que é | Conceitos novos | Status |
|---|-------|---------|-----------------|--------|
| 01 | [`01-screenmatch-cli`](01-screenmatch-cli/README.md) | Script de terminal | variáveis, operadores, `$argv` | 🟡 |
| 02 | `02-screenmatch-funcoes` | Terminal, código organizado | arrays, condicionais, laços, funções | ⚪ |
| 03 | `03-screenmatch-oo` | Terminal, orientado a objetos | classes, herança, interfaces, Composer, autoload | ⚪ |
| 04 | `04-screenmatch-web` | Aplicação web | HTTP, rotas, MVC, PDO, banco de dados | ⚪ |
| 05 | `05-screenmatch-api` | API REST containerizada | JSON, API REST, Docker, Docker Compose, testes | ⚪ |

> Os nomes e a ordem das versões 02–05 são um plano. Ajuste conforme a trilha da Alura avançar (veja [`docs/TRILHA.md`](../docs/TRILHA.md)).

## Quando criar uma nova versão?

Quando um módulo novo muda **a forma** do projeto (ex.: virar orientado a objetos, ganhar banco, virar web).
Mudanças pequenas continuam na versão atual.

Para criar: copie a pasta da versão anterior, renomeie com o próximo número e atualize o `README.md` dela (seção **"O que mudou em relação à versão anterior"**).

## Estrutura padrão de cada fase

**Fase terminal (01–02):** simples, só scripts.

```
01-screenmatch-cli/
├── README.md
└── screenmatch.php
```

**Fase orientada a objetos (03):** entra o Composer e o autoload PSR-4.

```
03-screenmatch-oo/
├── README.md
├── composer.json
├── bin/
│   └── screenmatch          ← ponto de entrada no terminal
├── src/                     ← classes (namespace ScreenMatch\)
│   ├── Modelo/
│   └── Calculo/
├── tests/
└── vendor/                  ← gerado pelo Composer (não versionar)
```

**Fase web / API (04–05):** mesma base, com pasta pública, configuração por ambiente e Docker.

```
05-screenmatch-api/
├── README.md
├── composer.json
├── .env.example             ← modelo das variáveis (o .env real não vai pro Git)
├── docker-compose.yml       ← sobe PHP + servidor web + banco com um comando
├── docker/
│   ├── php/Dockerfile
│   └── nginx/default.conf
├── public/
│   └── index.php            ← único arquivo acessível pelo navegador
├── src/
│   ├── Controller/          ← recebe a requisição HTTP e devolve a resposta
│   ├── Model/               ← entidades (Filme, Serie, Episodio)
│   ├── Repository/          ← acesso ao banco via PDO
│   └── Service/             ← regras de negócio
├── config/
├── database/
│   └── migrations/          ← scripts SQL que criam as tabelas
└── tests/
```

Por que essa estrutura:

- **`public/` separado** → o navegador só enxerga o `index.php`; o resto do código fica protegido.
- **`src/` com PSR-4** → o Composer carrega as classes sozinho, sem `require` espalhado.
- **`.env`** → senha do banco e configurações ficam fora do código.
- **Docker por projeto** → cada versão roda isolada com `docker compose up`, sem instalar banco na máquina.

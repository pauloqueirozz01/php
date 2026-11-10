# PROJETOS

**Terceiro passo:** aplicar. Aqui o ScreenMatch (um catálogo de filmes e séries) é construído e **reescrito em versões**,
cada uma usando o que foi aprendido até ali. Cada versão é uma pasta com seu próprio arquivo principal e README.

### ÍNDICE
| # | Projeto | Tipo | Pasta | Arquivo principal | Conceitos novos | Status |
|---|---|---|---|---|---|---|
| 01 | [ScreenMatch CLI](01-screenmatch-cli/README.md) | Terminal | `01-screenmatch-cli/` | `screenmatch.php` | variáveis, operadores, `$argv`, `if`, `match` | 🟡 |
| 02 | ScreenMatch Funções | Terminal | `02-screenmatch-funcoes/` | `screenmatch.php` | arrays, laços, funções | ⚪ |
| 03 | ScreenMatch OO | Terminal | `03-screenmatch-oo/` | `bin/screenmatch` | classes, herança, interfaces, Composer, autoload | ⚪ |
| 04 | ScreenMatch Web | Web | `04-screenmatch-web/` | `public/index.php` | HTTP, rotas, MVC, PDO, banco de dados | ⚪ |
| 05 | ScreenMatch API | API REST | `05-screenmatch-api/` | `public/index.php` | JSON, API REST, Docker, testes | ⚪ |

> As versões 02–05 são um plano. Ajuste conforme a trilha da Alura avançar (veja [`docs/TRILHA.md`](../docs/TRILHA.md)).

### COMO RODAR
Pelo PhpStorm, abra o arquivo principal e use *Run* (argumentos em *Edit Configurations → Arguments*).
Pelo terminal (na raiz do repositório):
```bash
php Projetos/01-screenmatch-cli/screenmatch.php 2019
```
As versões web/API terão o passo a passo próprio (com `docker compose up`) no README de cada pasta.

### COMO CRIAR UMA NOVA VERSÃO
1. Copie a pasta da versão anterior e renomeie com o próximo número (`02-screenmatch-funcoes`).
2. Atualize o README dela, incluindo a seção **"O que mudou em relação à versão anterior"**.
3. Adicione a versão no ÍNDICE acima e uma seção com o modelo do final deste arquivo.

---

## Decisões gerais

### Uma pasta por versão, nenhuma é apagada
Em vez de reescrever o mesmo arquivo, cada etapa vira uma pasta nova. Assim dá para comparar a `01` com a `05`
e ver exatamente como o código evoluiu: de um script de terminal até uma API com banco rodando em Docker.

### Quando criar uma nova versão
Só quando um módulo muda **a forma** do projeto (virar orientado a objetos, ganhar banco, virar web).
Mudanças pequenas continuam na versão atual.

### Estrutura planejada por fase
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
├── bin/screenmatch          → ponto de entrada no terminal
├── src/                     → classes (namespace ScreenMatch\)
│   ├── Modelo/
│   └── Calculo/
├── tests/
└── vendor/                  → gerado pelo Composer (não versionar)
```

**Fase web / API (04–05):** mesma base, com pasta pública, configuração por ambiente e Docker.
```
05-screenmatch-api/
├── README.md
├── composer.json
├── .env.example             → modelo das variáveis (o .env real não vai pro Git)
├── docker-compose.yml       → sobe PHP + servidor web + banco com um comando
├── docker/
│   ├── php/Dockerfile
│   └── nginx/default.conf
├── public/index.php         → único arquivo acessível pelo navegador
├── src/
│   ├── Controller/          → recebe a requisição HTTP e devolve a resposta
│   ├── Model/               → entidades (Filme, Serie, Episodio)
│   ├── Repository/          → acesso ao banco via PDO
│   └── Service/             → regras de negócio
├── config/
├── database/migrations/     → scripts SQL que criam as tabelas
└── tests/
```

| Decisão | Por quê |
|---|---|
| **`public/` separado** | O navegador só enxerga o `index.php`; o resto do código fica protegido |
| **`src/` com PSR-4** | O Composer carrega as classes sozinho, sem `require` espalhado |
| **`.env`** | Senha do banco e configurações ficam fora do código e fora do Git |
| **Docker por projeto** | Cada versão roda isolada com `docker compose up`, sem instalar banco na máquina |

---

## ScreenMatch CLI
**Pasta:** `01-screenmatch-cli/` · **Tipo:** programa de terminal

**Objetivo:** mostrar os dados de um filme, decidir se ele está incluso no plano e descobrir o gênero pelo nome.

**Recursos usados:** `echo`, interpolação, `$argv`, `??`, `||`/`&&`, `if`/`elseif`/`else`, `match`

### Decisões
- **Ano pelo terminal com `$argv[1] ?? 2022`:** testa vários anos sem editar o código e tem valor padrão.
- **`match` em vez de `switch`:** devolve valor, compara com `===`, não precisa de `break` e tem `default`.
- **Testar `||` e `&&` lado a lado:** para ver na prática a diferença entre "uma das condições" e "as duas".

Detalhes, saída de exemplo e próximos passos: [`01-screenmatch-cli/README.md`](01-screenmatch-cli/README.md)

---

<!--
MODELO PARA NOVA VERSÃO (copie o bloco abaixo, preencha e adicione uma linha no ÍNDICE)

## NomeDaVersao
**Pasta:** `NN-nome/` · **Tipo:** terminal | web | api

**Objetivo:** o que essa versão faz.

**O que mudou em relação à versão anterior:** ...

**Recursos usados:** ...

### Decisões
- **Decisão tomada:** por que essa escolha e quais alternativas foram consideradas.

### Próximos passos
- [ ] ...
-->

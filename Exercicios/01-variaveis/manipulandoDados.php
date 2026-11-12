<?php
/*
DESAFIO: MANIPULANDO DADOS DE UM FILME

Complete o cadastro abaixo transformando dados separados em informações úteis
para o catálogo ScreenMatch. Parte das variáveis já foi criada para você.

ETAPA 1: DADOS DO FILME
- Confira as variáveis de nome, ano, gênero e nota já existentes.
- Acrescente outras notas dadas ao filme. Use valores diferentes para conseguir
  perceber se o cálculo da média está correto.

ETAPA 2: MÉDIA DAS AVALIAÇÕES
- Some todas as notas e divida pela quantidade de avaliações.
- Use parênteses para garantir que a soma aconteça antes da divisão.
- Guarde o resultado em uma variável; não exiba uma média escrita manualmente.

ETAPA 3: INCLUSÃO NO PLANO
Considere que um filme será incluído quando tiver sido lançado a partir de 2020
OU quando sua média for maior ou igual a 8. Transforme essas duas perguntas em
comparações e una-as com um operador lógico.

ETAPA 4: EXIBIÇÃO
Mostre nome, ano, gênero, média e situação no plano de maneira organizada. Use
interpolação em pelo menos uma linha e concatenação com o operador . em outra,
para praticar as duas formas.

SAÍDA DE REFERÊNCIA
Nome: Duna
Ano: 2021
Gênero: Ficção científica
Média: 8.5
Incluído no plano: sim

PERGUNTAS PARA REVISAR ANTES DE TERMINAR
- A quantidade usada na divisão é igual ao número de notas somadas?
- A variável de inclusão guarda um booleano ou apenas o texto "sim"/"não"?
- O programa continua funcionando se o nome for recebido por $argv[1]?

DESAFIO OPCIONAL
Formate a média com uma casa decimal somente no momento de exibi-la.
*/
echo "Digite o nome do filme: \n";
$nomeFilme = $argv[1] ?? "Filme de Ação";
$anoFilme = 2022;
$generoFilme = "Ação";
$notaFilme = 9.0;


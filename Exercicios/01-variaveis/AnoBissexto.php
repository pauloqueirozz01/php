<?php
/*
EXERCÍCIO: ANO BISSEXTO

Desenvolva um programa que receba um ano e informe se ele é bissexto ou não.

CONTEXTO
Um ano bissexto possui 366 dias. A regra não consiste apenas em verificar se o
ano é divisível por 4, pois os anos terminados em 00 exigem um cuidado especial.

REGRAS
- Se o ano for divisível por 400, ele é bissexto.
- Se o ano for divisível por 4, mas não por 100, ele também é bissexto.
- Nos demais casos, o ano não é bissexto.

COMO PENSAR NA RESOLUÇÃO
1. Crie uma variável para armazenar o ano que será analisado.
2. Use o operador de módulo (%) para descobrir se uma divisão possui resto zero.
3. Transforme cada regra acima em uma comparação booleana.
4. Una as comparações com os operadores lógicos && (E) e || (OU).
5. Use uma estrutura condicional para exibir apenas uma das duas respostas.

EXEMPLOS ESPERADOS
- 2024 -> "2024 é um ano bissexto."
- 2023 -> "2023 não é um ano bissexto."
- 1900 -> não é bissexto, embora seja divisível por 100.
- 2000 -> é bissexto, porque é divisível por 400.

TESTES IMPORTANTES
Teste pelo menos um ano de cada tipo: comum, divisível por 4, divisível por 100
e divisível por 400. Assim você não valida apenas o caso mais fácil.

DICA
Uma expressão como $ano % 4 === 0 responde à pergunta: "o ano é divisível
por 4?". Monte primeiro as perguntas menores e só depois combine-as.
*/

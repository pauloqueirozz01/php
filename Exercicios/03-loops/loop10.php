<?php
/*
EXERCÍCIO 10: MENU INTERATIVO COM WHILE

Crie um menu com as opções:
1 - Exibir uma saudação
2 - Exibir a data atual
0 - Sair

O menu deve reaparecer depois de cada ação e encerrar somente quando o usuário
escolher 0. Uma opção desconhecida deve produzir uma mensagem de erro.

POR QUE USAR WHILE?
Não se sabe quantas ações o usuário realizará. O programa permanece ativo até
uma escolha explícita alterar a condição de continuidade.

COMO PENSAR
1. Crie uma variável para a opção atual.
2. Repita o menu enquanto essa opção for diferente de 0.
3. Leia a escolha dentro do loop.
4. Use uma condicional, switch ou match para decidir qual ação executar.
5. Garanta que a opção 0 não execute outra ação antes de encerrar.

CUIDADO
Se a opção nunca for atualizada dentro do loop, o menu se tornará infinito.

DESAFIO OPCIONAL
Conte quantas ações válidas foram executadas antes da saída.
*/

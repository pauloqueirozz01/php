<?php
/*
EXERCÍCIO 06: SENHA CORRETA COM WHILE

Peça uma senha ao usuário e continue solicitando-a enquanto o valor informado
for diferente da senha cadastrada. Ao acertar, exiba "Acesso permitido".

POR QUE USAR WHILE?
Não é possível saber antecipadamente quantas tentativas serão necessárias.
A repetição depende de uma condição que poderá deixar de ser verdadeira.

COMO PENSAR
1. Defina uma senha esperada.
2. Leia a primeira tentativa antes ou dentro do loop.
3. Enquanto a tentativa estiver incorreta, informe o erro e leia novamente.
4. Ao sair do loop, confirme o acesso.

CUIDADO COM LOOP INFINITO
A tentativa precisa ser atualizada dentro do while. Se a condição nunca puder
mudar, o programa continuará repetindo para sempre.

DESAFIO OPCIONAL
Conte quantas tentativas foram feitas, sem limitar a quantidade.
*/

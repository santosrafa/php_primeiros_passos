<?php
$idade = 15;
$mensagem = $idade < 18 ? "Você é menor de idade" : "Você é maior de idade";
echo $mensagem;

/* Se precisamos, atribuir o valor a uma variável nos baseando em alguma condição, 
podemos utilizar o que é chamado de operador ternário. Sua sintaxe é a seguinte:
$variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso; */
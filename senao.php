<?php

$idade = 17;

echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos" . PHP_EOL;
    echo "Você pode entrar!";
}else{
    echo "Você não pode entrar, olha a sua idade $idade.";
}

/* UTILIZANDO A ESTRUTURA COMPLETA DO IF COM ELSE */
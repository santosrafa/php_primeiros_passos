<?php

$alunos2021 = [
    'Vinicius',
    'Rafael',
    'Ana',
    'Carol',
];

$novos_alunos = [
    'Patricia',
    'Nico',
    'Daiane',
];

$alunos2022 = [...$alunos2021, ...$novos_alunos];                                //... SIGNIFICA DESEMPACOTAMENTO, ELE PEGA O ARRAY E TRAZ CADA UM DOS VALORES SEPADAMENTE
var_dump($alunos2022);                                                           //TAMBEM CHAMADO DE SPREAD OPERATOR

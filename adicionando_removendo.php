<?php

$alunos2021 = [
    'Vinicius',
    'Rafael',
];

$novos_alunos = [
    'Patricia',
    'Nico',
];

$alunos2022 = [...$alunos2021, $novos_alunos];
array_push($alunos2022, 'Rafael', 'Carla');                     //ARRAY_PUSH VAI ADICIONAR OS ELEMENTOS AO FINAL DO ARRAY

array_unshift($alunos2022, "Marcos");                           //ARRAY_UNSHIFT VAI ADICIONAR O ELEMENTO NO INCIO DO ARRAY

var_dump($alunos2022);



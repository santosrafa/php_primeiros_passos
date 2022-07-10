<?php

$idade = 16;
$numero_de_pessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou";
echo " a partir de 16 anos acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos" . PHP_EOL;
    echo "Você pode entrar!";
}else if ($idade >= 16 && $numero_de_pessoas >1){
    echo "Você tem $idade anos, está acompanhado (a), então pode entrar!";
}else{
    echo "Você só tem $idade anos. Você não pode entrar!";
}

echo PHP_EOL;
echo "Adeus!!";

/* <!-- UTILIZAND O ELESEIF --> */
<?php

$animals = array('Panthera leo', 'Hippotigris', 'Tigris', 'Lupus', 'Castor canadensis', 'Grizzly',
    'Myrmecophaga tridactyla', 'Dasyprocta', 'Phascolarctos cinereus', 'Notoryctes',
    'Arctocephalus gazella', 'Procellariidae');

$firstName = [];
$secondName = [];

    foreach ($animals as $animal)
    {
        $nameOfAnimal = str_word_count($animal, 1);
            if (count($nameOfAnimal) > 1)
            {
                $firstName[] = array_shift($nameOfAnimal);
                $secondName[] = array_pop($nameOfAnimal);
            }
    }
        foreach ($firstName as $name) {
        $rand_keys = array_rand($firstName, 2);
        echo $firstName[$rand_keys[1]] . "\n";
        $rand_keys = array_rand($secondName, 2);
        echo $secondName[$rand_keys[0]] . "\r" . "<br/>";
    }

<?php

//$animals = array('Panthera leo', 'Hippotigris', 'Tigris', 'Lupus', 'Castor canadensis', 'Grizzly',
    //'Myrmecophaga tridactyla', 'Dasyprocta', 'Phascolarctos cinereus', 'Notoryctes',
    //'Arctocephalus gazella', 'Procellariidae');

$fantasticAnimals = array('Panthera leo', 'Castor canadensis','Myrmecophaga tridactyla',
    'Phascolarctos cinereus','Arctocephalus gazella');
//$firstName = array('Pathera', 'Castor', 'Myrmecophaga', 'Phascolarctos', 'Arctocephalus');

//$secondName = array('leo', 'canadensis', 'tridactyla', 'cinereus', 'gazella');

foreach ($fantasticAnimals as $name) {
    $rand_keys = array_rand($fantasticAnimals, 2);
    echo $fantasticAnimals[$rand_keys[0]] . "\n";
    $rand_keys = array_rand($fantasticAnimals, 2);
    echo $fantasticAnimals[$rand_keys[1]] . "\r" . "<br/>";
}

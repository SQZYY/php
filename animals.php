<?php

$animals = array('Panthera leo', 'Hippotigris', 'Tigris', 'Lupus', 'Castor canadensis', 'Grizzly', 
				'Myrmecophaga tridactyla', 'Dasyprocta', 'Phascolarctos cinereus', 'Notoryctes', 
				'Arctocephalus gazella', 'Procellariidae');

		
$firstName = array('Pathera', 'Castor', 'Myrmecophaga', 'Phascolarctos', 'Arctocephalus');

$secondName = array('leo', 'canadensis', 'tridactyla', 'cinereus', 'gazella');


		$rand_keys = array_rand($firstName, 2);
		echo $firstName[$rand_keys[0]] . "\n";

		$rand_keys = array_rand($secondName, 2);
		echo $secondName[$rand_keys[0]];
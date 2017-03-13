<?php

//// НАСТОЯЩИЕ ЖИВОТНЫЕ
//$animals = array(
	//'africa' => array('Panthera leo', 'Loxodonta africana'),
	//'eurasia' => array('Tigris', 'Lupus'),
	//'north america' => array('Castor canadensis', 'Dasypus novemcinctus'),
	//'south america' => array('Myrmecophaga tridactyla', 'Leopardus geoffroyi'),
	//'australia' => array('Phascolarctos cinereus', 'Canis lupus dingo'),
	//'antarctida' => array('Arctocephalus gazella', 'Hydrurga leptonyx'),
	//);

//// ФАНТАСТИЧЕСКИЕ ЖИВОТНЫЕ
$africa = array('Africa');
$na = array('North America');
$sa = array('South America');
$au = array('Australia');
$an = array('Antarctida');
$aanim = array('Panthera', 'Loxodonta');
$nanim = array('Castor', 'Dasypus');
$sanim = array('Myrmecophaga', 'Leopardus');
$aunim = array('Phascolarctos',  'Canis');
$annim = array('Arctocephalus', 'Hydrurga');
$mystik = array('leo', 'africana', 'canadensis', 'novemcinctus', 'tridactyla', 'geoffroyi', 'cinereus', 'lupus', 'dingo', 'gazella','leptonyx'); 


		foreach ($africa as $aname) {
			echo "<h2>$aname</h2>";
			echo '<br/>';
		}

		$rand_keys = array_rand($aanim, 2);
		echo $aanim[$rand_keys[0]] . "\n";

		$rand_keys = array_rand($mystik, 2);
		echo $mystik[$rand_keys[0]] . ',' . "\n";

		$rand_keys = array_rand($aanim, 2);
		echo $aanim[$rand_keys[1]] . "\n";

		$rand_keys = array_rand($mystik, 2);
		echo $mystik[$rand_keys[0]] . "\n";

		foreach ($na as $nname) {
			echo "<h2>$nname</h2>";
			echo '<br/>';
		}

		$rand_keys = array_rand($nanim, 2);
		echo $nanim[$rand_keys[0]] . "\n";

		$rand_keys = array_rand($mystik, 2);
		echo $mystik[$rand_keys[0]] . ',' . "\n";

		$rand_keys = array_rand($nanim, 2);
		echo $nanim[$rand_keys[1]] . "\n";

		$rand_keys = array_rand($mystik, 2);
		echo $mystik[$rand_keys[0]] . "\n";

		foreach ($sa as $sname) {
			echo "<h2>$sname</h2>";
			echo '<br/>';
		}

		$rand_keys = array_rand($sanim, 2);
		echo $sanim[$rand_keys[0]] . "\n";

		$rand_keys = array_rand($mystik, 2);
		echo $mystik[$rand_keys[0]] . ',' . "\n";

		$rand_keys = array_rand($sanim, 2);
		echo $sanim[$rand_keys[1]] . "\n";

		$rand_keys = array_rand($mystik, 2);
		echo $mystik[$rand_keys[0]] . "\n";

		foreach ($au as $auname) {
			echo "<h2>$auname</h2>";
			echo '<br/>';
		}

		$rand_keys = array_rand($aunim, 2);
		echo $aunim[$rand_keys[0]] . "\n";

		$rand_keys = array_rand($mystik, 2);
		echo $mystik[$rand_keys[0]] . ',' . "\n";

		$rand_keys = array_rand($aunim, 2);
		echo $aunim[$rand_keys[1]] . "\n";

		$rand_keys = array_rand($mystik, 2);
		echo $mystik[$rand_keys[0]] . "\n";

		foreach ($an as $anname) {
			echo "<h2>$anname</h2>";
			echo '<br/>';
		}

		$rand_keys = array_rand($annim, 2);
		echo $annim[$rand_keys[0]] . "\n";

		$rand_keys = array_rand($mystik, 2);
		echo $mystik[$rand_keys[0]] . ',' . "\n";

		$rand_keys = array_rand($annim, 2);
		echo $annim[$rand_keys[1]] . "\n";

		$rand_keys = array_rand($mystik, 2);
		echo $mystik[$rand_keys[0]] . "\n";

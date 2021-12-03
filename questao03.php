<?php
$clientes = array(
	"josé"=> array("idade"=>25 , "CPF"=>087883456-18 , "RG"=>2006089107117),
	"maria"=>array("idade"=>18 , "CPF"=>057825456-15 , "RG"=>2001089097112),
	"Ana"=>array("idade"=>24 , "CPF"=>037825445-30 , "RG"=>2019089097118),

);
foreach ($pessoa as $nomes =>) {
	echo $nomes. "<br>";
	foreach ($dados as $key => $valeu) {
		echo $key. "-".$valeu."<br>";
	}
}

<?php
$pessoa = array (
     "Nome: Maria clara" => array("CPF"=>"087883456-18","RG"=>2006089107117, "Idade"55,"Altura"=>1.75),
   );

foreach ($pessoa as $info=> $dados){
	echo $info. "<br>";
	 foreach ($dados as $key=> $valeu){
	 	echo $key." : ".$valeu. "<br>";
      }
}

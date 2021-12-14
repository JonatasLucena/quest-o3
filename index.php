<?php
$clientes = array(
	"José" => array("idade"=>25, "CPF"=> "088345618", "RG"=>"20008917117"),
    "Maria" => array("idade"=>18, "CPF"=> "05825456-15", "RG"=>"2001089097112"),
    "Ana" => array("idade"=>24, "CPF"=> "03825445-30", "RG"=>"2019089097118")
);

echo "RG de Maria"." = ".$clientes['Maria']['RG']."<br>";
echo "Idade de Ana"." = ".$clientes['Ana']['idade']."<br>";


echo "<br>";

 foreach ($clientes as $association => $vetor) {
      echo $association."<br>";
      foreach ($vetor as $key => $valor) {
      	   echo $key. " - " .$valor.	"<br>";
      }
 }
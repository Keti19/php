<?php

//kod

echo "<h1> Zdravo! </h1>" ;

$ime = 'Keti'; //string
$godini = 27;  //integer
$polnoleten = true; //boolean
$tezina = 60.2;  //float

echo $ime; 
echo "</br>";
echo $godini;
echo "</br>";
echo $polnoleten;
echo "</br>";
echo $tezina;
echo "</br>";


$grad = 'New Yourk';
echo "Jas ziveam vo $grad";
echo "</br>";
echo 'Jas ziveam vo '.$grad.' od 1990 godina';

$p = 'drzava';
$$p = 'France'; //  

echo  $drzava;

echo "</br>";

echo 10 * 23;
echo "</br>";
echo 13/12;
echo "</br>";
echo 234 % 22;
echo "</br>";
echo 23 + 82374;
echo "</br>";
echo 234 - 99822;
echo "</br>";
echo 23  * (12 - 11) / 27;

echo "</br>";

$text = 'Jas ziveam vo Skopje';
echo str_replace( 'Skopje' , 'Veles' , $text);

function pozdrav(){
	echo "</br>";
	echo "Zdravo";
	
}
pozdrav();

function pozdrav2(){
	return "Zdravo";
}

echo pozdrav2(); 


?>
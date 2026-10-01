<p> Dodanie elementów </p>
<?php
$wiek1=array("Ala"=>"1","Ola"=>"2");
$wiek2=array("Kasia"=>"5","Agata"=>"6");
array_splice($wiek1,1,0,$wiek2);
print_r($wiek1);
?>
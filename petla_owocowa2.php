//Program tworzący tablicę zawierająca nazwy 4 owoców. Wypisz w postaci listy niennumerowanej - nazwa i wartosc

<?php 

$owoce = array("Banan"=>"10","Arbuz"=>"5","Jabłko"=>"4","Truskawka"=>"20");
echo "<ul>"; 
foreach($owoce as $nazwa => $ilość) {
    echo "<li>" . $nazwa .  ":" . $ilość . "</li>";
  
}
  echo "</ul>";
?>








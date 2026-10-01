//Program tworzący tablicę zawierająca nazwy 4 owoców. Wypisz w postaci listy numerowanej.

<?php 

$owoce = array("Banan","Arbuz","Jabłko","Truskawka");
echo "<ol>"; 
foreach($owoce as $owoc) {
    echo "<li>" . $owoc . "</li>";
  
}
  echo "</ol>";
?>








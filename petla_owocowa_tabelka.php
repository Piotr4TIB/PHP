//Napisz program tworzący tablice zawierajaca nazwy czterech owocow wraz z cenami. Wypisz je w posteci tabeli table. <tr><td>owoce[0]</td><td>owoce['banan']</td>

<?php 

$owoce = array("Banan"=>"10","Arbuz"=>"5","Jabłko"=>"4","Truskawka"=>"20");
echo "<table>"; 
foreach($owoce as $nazwa => $ilość) {
    echo "<tr>";
    echo "<td>" .$nazwa . "</td>";
    echo "<td>". $ilość  . " zł</td>";
    echo "</tr>";
}
echo "</table>"
?>








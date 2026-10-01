<?php
$owoce = [
    "banan" => 10,
    "arbuz" => 5,
    "jabłko" => 4,
    "truskawka" => 20
    ];    
echo "<table border='1'>";
echo "<tr><th>Owoc</th><th>Cena</th></tr>";
    foreach ($owoce as $owoc => $cena) {
        echo "<tr>";
        echo "<td>$owoc</td>";
        echo "</tr>";
    }
echo "</table>";
?>
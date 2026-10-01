<?php
$owoce = [
    "banan" => 10,
    "arbuz" => 5,
    "jabłko" => 4,
    "truskawka" => 20
    ];
echo "<ul>";
foreach ($owoce as $owoc => $liczba) {
    echo "<li>$owoc $liczba</li>";
}
echo "</ul>"
?>

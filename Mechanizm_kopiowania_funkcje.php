//Do funkcji przekazywana jest kopia zmiennej i jest ona tylko wewnątrz funkcji.

<?php 
    $value=5;
    function functionValue($value) {
        $value++
        echo $value. "<br>";
    }
    functionValue($value);
    echo $value;
    ?>
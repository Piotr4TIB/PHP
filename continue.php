<?php
//Instrukcja continue powoduje wykonanie kolejnej iteracji.

for( $i =0; $i<10; $i++){
    if($i==5)
        continue;
    echo "liczba: $i <br>";
}
echo "Koniec petli";
//Break przerywa działanie pętli.

<?php
for( $i=0; $i<10; $i++){
    echo "liczba: $i <br>";
    if($i == 5)
        break;
}
echo "Koniec pętli";
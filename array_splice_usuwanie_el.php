
<p> Usuwanie elementów </p>
<?php
$a1=array(0,1,2,3);
$a2=array(5,6);
array_splice($a1,0,1,$a2);
//1 okresla ile elementow usuwamy
print_r($a1);
?>

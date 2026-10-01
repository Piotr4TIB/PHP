
<p> Dodanie elementów </p>
<?php
$a1=array(0,1,2,3);
$a2=array(5,6);
array_splice($a1,1,0,$a2);
print_r($a1);
?>
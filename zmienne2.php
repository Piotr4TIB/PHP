<?php
$foo = 'Bob';
$bar = &$foo;
$bar = 'Andy';
echo $bar;
echo $foo;
?>
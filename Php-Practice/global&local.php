<?php
//declaring global variable
$x = 20;
$y = 10;
$z;

function sum(){
    global $x,$y,$z;
    $z=$x+$y;

}
sum();
echo"<h1>Final Result is : $z </h1>";
?>
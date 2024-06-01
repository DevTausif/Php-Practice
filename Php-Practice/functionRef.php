<?php
    function first(&$num){
        $num += 9;
    }

    function second(&$num){
        $num += 7;
    }

    $number = 10;
    first($number);
    echo "The Value is : $number <br>";

    second($number);
    echo "The Value is : $number";
?>
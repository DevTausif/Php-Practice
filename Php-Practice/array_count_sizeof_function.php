<?php
    //count 
    $name = array("Kabir","John","Mike","Lee");
    echo count($name). "<br>";

    //Sizeof
    echo sizeof($name). "<br>";

    //size of array 
    echo "<pre>";
    print_r($name);
    echo "</pre>";

    //using for loop 

    $len = count($name);
    for ($i = 0; $i < $len; $i++) {
        echo "<h1>".$name[$i]."<br> </h1>";
    }
?>
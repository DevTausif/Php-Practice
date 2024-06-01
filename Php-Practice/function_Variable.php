<?php
    function hi($lang){
        echo "My Name is $lang <br>";
    }

    $nam = "hi";
    $nam("Tausif");

    /*another way to declare function*/

    $ag= function ($g){
        echo "I am $g years old";
    };

    $ag(25);
?>
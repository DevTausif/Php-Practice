<?php
    $age = [
        "Alen"=> 20,
        "Lee"=> 30,
        "Hulk"=> 40,
    ];
    echo"<ul>";
        foreach ($age as $key => $value) {
            echo "<h1><li>$key = $value</li></h1>";
        }
    echo"</ul>";
?>
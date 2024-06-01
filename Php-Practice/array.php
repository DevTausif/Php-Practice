<?php
    $colors = ["red", "blue","black","white"];

    echo "<ul>";
     for ($i = 0; $i < 4; $i++) 
     {
        echo "<h1>";
        echo "<li>$colors[$i] </li>";
        echo "</h1>";
     }
    echo "</ul>";
?>
<?php
    $age = [
        "Bill"=> 25,
        "Stan"=> 40,
        "Lee"=> 35,
    ];
    //checking data type & array 
    echo"<pre>";
    echo "<h1>";
       print_r( $age );
       var_dump( $age);
    echo  "</h1>";
    echo"</pre>";
    //print array's value
    echo "<h1>".$age["Bill"]."</h1></br>";
    echo "<h1>".$age["Stan"]."</h1></br>";
    echo "<h1>".$age["Lee"]."</h1></br>";
?>
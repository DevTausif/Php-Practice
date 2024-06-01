<?php
    //declaring array
    $result = [
        "Jack"=> [
            "Pyshics"=>80,
            "Math"=> 90,
            "English"=> 95,
        ],

        "John"=> [
            "Pyshics"=>70,
            "Math"=> 90,
            "English"=> 75,
        ],

        "Johnny"=> [
            "Pyshics"=>75,
            "Math"=> 65,
            "English"=> 85,
        ],
    ];
    //declaring foreach loop for the array
    echo"<table border='2px' cellpadding='5px' cellspacing='0px'>";
    echo "<tr>
        <th>Student Name</th>
        <th>Physics</th>
        <th>Math</th>
        <th>English</th>
    </tr>";
    foreach ( $result as $key => $value ) {
        echo "<tr>
            <td>$key</td>";
            foreach ( $value as $key2){
            echo"<td> $key2 </td>";
            }
        echo "</tr>";
    }
    echo "</table>";

    //space between loops and testing
    echo "<br>";
    //testing array
    echo"<pre>";
     print_r( $result );
     echo "<br>";
     echo var_dump( $result);
    echo"</pre>";
?>
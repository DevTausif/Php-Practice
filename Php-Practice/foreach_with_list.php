<?php
    //declaring associative array
    $result = [
         [
            "Name"=>"Jack",
            "Subject1"=>"Pyshics",
            "Mark1"=> 90,
            "Mark2"=>95
         ],
   
         [
            "Name"=>"Johnny",
            "Subject1"=>"Math",
            "Mark1"=> 90,
         ],

         [
            "Name"=>"John",
            "Subject1"=>"Science",
            "Mark1"=> 86,
         ],
   
         [
            "Name"=>"Karl",
            "Subject1"=>"Programming Language 1",
            "Mark1"=> 90,
         ],
    ];

    //declaring foreachloop
    echo "<table border ='1px' cellpadding = '10px' cellspacing = '0px'>
                <tr>
                <th>Name</th>
                <th>Subject</th>
                <th>Marks</th>
                </tr>";
    foreach($result as list("Name"=>$name,"Subject1"=>$sub1,"Mark1"=>$mark1)) {
        echo "<tr>
                <td>$name</td>
                <td>$sub1</td>
                <td>$mark1</td>       
            </tr>";
    }
    echo "</table>";
?>
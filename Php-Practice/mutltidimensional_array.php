<?php
   
    $emp= [
        [1,"Kabir","Soft.Eng",200000],
        [2,"Shafi","Soft.Eng",150000],
        [3,"Rafi","Civil.Eng",450000],
        [4,"Neer","Arch.",550000]
    ];
   

//using for loop for multidimensional array
for ($row= 0; $row< 4; $row++){
    for ($col= 0; $col< 4; $col++){
        echo"<strong>";
            echo  $emp [$row][$col] . " ";
        echo"</strong>";
       
    }
    echo "<br>";
}

//space between two loops
echo "<br>";

//using foreach loop for multidimensional array
foreach ($emp as $row) {
    foreach ($row as $col) {
        echo "<strong>";
        echo $col. " ";
        echo "</strong>";
    }
    echo "<br>";
}

//space between loops and test result
echo "<br>";
//testing array & datatype
    echo "<strong>";
    echo "<pre>";
        echo print_r($emp);
        echo var_dump($emp);
    echo "</pre>";
    echo "</strong>";
?>
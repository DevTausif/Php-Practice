<?php
   
    $emp= [

        [1,"Kabir","Soft.Eng",200000],
        [2,"Shafi","Soft.Eng",150000],
        [3,"Rafi","Civil.Eng",450000],
        [4,"Neer","Arch.",550000]
    ];
   

//using for loop for multidimensional array
echo"<table border='2px' cellpadding='5px' cellspacing='0px'>";
echo "<tr>
    <th>Employee ID</th>
    <th>Employee Name</th>
    <th>Employee Job</th>
    <th>Employee Salary</th>
</tr>";
for ($row= 0; $row< 4; $row++){
    echo "<tr>";
    for ($col= 0; $col< 4; $col++){
        echo "<td>". $emp [$row][$col]. "</td>";      
    }
    echo "<tr>";
}
echo"</table>";

//space between two loops
echo "<br>";

//using foreach loop for multidimensional array
echo"<table border='2px' cellpadding='5px' cellspacing='0px'>";
echo "<tr>
    <th>Employee ID</th>
    <th>Employee Name</th>
    <th>Employee Job</th>
    <th>Employee Salary</th>
</tr>";
foreach ($emp as $row) {
    echo "<tr>";
    foreach ($row as $col) {       
        echo "<td> $col </td>";
    }
    echo "<tr>";
}
echo "</table>";

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
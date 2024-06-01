<?php
function yourResult(){
    echo"<h1>Your Result is :</h1>";
}

function resultPosition($result){
 
    if($result>=80 && $result <=100){
    echo "<h1>Merit Position</h1>";
    }
    elseif($result>=60 && $result <80){
    echo "<h1>First Position</h1>";
    }
    elseif($result>=50 && $result <60){
    echo "<h1>Second Position</h1>";
    }
    elseif($result>=40 && $result <50){
    echo "<h1>Third Position</h1>";
    }
    elseif($result<=33){
    echo "<h1>Last Position</h1>";
    }
    else{
    echo "<h1>Invalid Result</h1>";
    }
}

yourResult();
resultPosition(80);

?>

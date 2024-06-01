<?php
$result = 20;
if($result>=80 && $result <=100){
    echo "Merit Position";
}
elseif($result>=60 && $result <80){
    echo "First Position";
}
elseif($result>=50 && $result <60){
    echo "Second Position";
}
elseif($result>=40 && $result <50){
    echo "Third Position";
}
elseif($result<=33){
    echo "Last Position";
}
else{
    echo "Invalid Result";
}
?>
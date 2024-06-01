<?php
$age = 15; //declare variable

//declare switch case with logical operator 
switch(true){
    case ($age >=18 && $age <=20):
        echo "You are an Adult";
    break;
        
    case($age >= 12 && $age <=17):
        echo "You are a Teenager";
    break;

    default : 
        echo "Enter Valid Age";
    
}
?>
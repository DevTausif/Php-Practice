<?php
    function amountTotal($value1,$value2){
        $amount=$value1 + $value2;
        return $amount;
    }

    function percentage($tp){
        $at = $tp/2;
        return $at;
    }

    $ans= amountTotal(25,26);
    echo percentage($ans);
?>
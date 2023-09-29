<?php
    $num1 = 5;
    $num2 = 5.5;
    $num3 = "Pedro";
    $result = $num1 * 2;

    if (is_int($num1)) {
        if($num1 > 100){
            echo "$num1 é maior que 100 <br>";
        }else{
            echo "$num1 é menor que 100 <br>";
        }
    } else {
        echo"$num1 não é um numero <br>";
    }


    if (is_int($num2)) {
        if($num2 > 100){
            echo "$num2 é maior que 100 <br>";
        }else{
            echo "$num2 é menor que 100 <br>";
        }
    } else {
        echo"$num2 não é um numero <br>";
    }


    if (is_int($num3)) {
        if($num3 > 100){
            echo "$num3 é maior que 100 <br>";
        }else{
            echo "$num3 é menor que 100 <br>";
        }
    } else {
        echo"$num3 não é um numero <br>";
    }
?>



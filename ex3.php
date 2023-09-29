<?php
    $num1 = 5;
    $num2 = 5.5;
    $num3 = "Pedro";
    $result = $num1 * 2;

    if (is_int($num1)) {
        if($num1 > 100){
            echo "$num1 é maior que 100";
        }else{
            echo "$num1 é menor que 100";
        }
    } else {
        echo"$num1 não é um numero";
    }
?>



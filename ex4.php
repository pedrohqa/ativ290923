<?php
    // $num = 51;
    $num = rand(0,100);

    if($num <= 40 ){
        echo "$num Atenção Acelere";
    }elseif($num > 40 && $num < 51){
        echo "$num Velocidade Certa";
    }else{
        echo" $num Recebeu uma Multa";
    }
        
?>
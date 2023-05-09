<?php

    $str="X / 8 = 6";

    $arr=explode(" ", $str);

    if ($arr[0] == "X"){
        if ($arr[1] == '+'){
            $otv=$arr[4]-$arr[2];
            echo "Оператор  +\n";
        }
        if ($arr[1] == '-'){
            $otv=$arr[4]+$arr[2];
            echo "Оператор  -\n";
        }
        if ($arr[1] == '*'){
            $otv=$arr[4]/$arr[2];
            echo "Оператор  *\n";
        }
        if ($arr[1] == '/'){
            $otv=$arr[4]*$arr[2];
            echo "Оператор  /\n";
        }
        echo "X - первй элемент\n";
    }else {
        if ($arr[1] == '+'){
            $otv=$arr[4]-$arr[0];
            echo "Оператор  +\n";
        }
        if ($arr[1] == '-'){
            $otv=$arr[0]-$arr[4];
            echo "Оператор  -\n";
        }
        if ($arr[1] == '*'){
            $otv=$arr[4]/$arr[0];
            echo "Оператор  *\n";
        }
        if ($arr[1] == '/'){
            $otv=$arr[0]/$arr[4];
            echo "Оператор  /\n";
        }
        echo "X - второй элемент\n";
    }
        
    
    echo $otv;
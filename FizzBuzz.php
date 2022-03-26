<?php
//FizzBuzz問題
for ($a = 1; $a <= 100; $a++) {           //変数aの初期値を1として、1から100まで繰り返す。変数aを1ずつ増やす。
    if ($a % 3 === 0 && $a % 5 === 0) {   //3と5で割り切れる場合
        echo 'FizzBuzz';                  //FizzBuzzを出力
    } elseif ($a % 5 === 0) {             //上記のif式に当てはまらない場合で、5だけで割り切れる場合
        echo 'Buzz';                      //Buzzを出力
    } elseif ($a % 3 === 0) {             //上記のelseif式に当てはまらない場合で、3だけで割り切れる場合
        echo 'Fizz';                      //Fizzを出力
    } else {                
        echo $a;                          //どの条件にも当てはまらない場合、その時の変数aを出力 
    }
        echo '<br>';                      //改行
}
?>
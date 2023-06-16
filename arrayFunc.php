<?php


// function make_array_r(array $ar)
// {
//     echo '<pre>';
//     print_r($ar)  ;
//     echo '</pre>';
// }

// $arr = ['a' => 1 , 'b' => 2 , 'c' => 3 , 4 , 5] ;
// $arr2 = ['a2' => 21 , 'b2' => 22 , 'c2' => 32] ;

// make_array_r(array_chunk($arr, 2));
// make_array_r(array_combine($arr, $arr2));
// make_array_r(array_filter($arr, fn ($num) => $num % 2 == 0));
// make_array_r(array_values($arr));
// make_array_r(array_keys($arr));


$arr = [1,2,3,4];

list($a, $b, $c, $d) = $arr ;
echo $a , $b , $c ;

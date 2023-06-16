<?php

// Function ==>  block of code will not run till revoke func

// function name (){

// }

// name();

// function prnt_nam($first, $last)
// {
//     echo 'my name is :: ' . $first . ' ' . $last;
// }

// prnt_nam('ahmed' , 'sayed');

// $r = prnt_nam('ahmed', 'sayed');

// function prnt_nam($first, $last)
// {
//     return;
// }
// x();

// if(true == true) {
//     function x()
//     {
//         echo "ssssssssssss";
//     }
// }

// Y();
// x();

// function x()
// {
//     echo "xxxxx";
//     function y()
//     {
//         echo "yyyyy";
//     }
// }

// declare(strict_types=1);


// require_once "data.php";

// function test(): int
// {
//     return "1";
// }

// var_dump(test());

// function test()
// {
//     return false;
// }

// var_dump(test());
// function test(): void
// {
//     echo "ahmed";
// }

// var_dump(test());

// function test(int | float $x, int | float $y): int|float
// {
//     return $x + $y ;
// }

// echo test(5, 10);
// echo test(5.3, 10.8);


// function test2($x, $y)
// {
//     return"yyy";
// }
// echo test2(2, 5, 20);

// function test2($y , $r , $i, $x = 1 )
// {
//     return"yyy";
// }
// echo test2(5,6 , 8);

// function trytest(&$a, $b)
// {
//     if($a % 2  != 0) {
//         $a /= 2 ;
//     }

//     return $a + $b ;
// }

// $aa = 7 ;
// $bc = 3 ;

// echo trytest($aa, $bc);

// function sum($x, $y, ...$otherNum)
// {
//     $total = 0 ;

//     foreach($otherNum as $num) {

//         $total += $num ;

//     }

//     return $total + $x + $y ;
// }

// echo sum(10, 20, 1, 2);

// function test($x, $y = 10)
// {
//     return $x - $y ;
// }

// echo test(y : 30 , x : 50);


// setcookie(name :'mydata' , domain : 'localhost');

// function test2($x = 1, $y = 2, $z = 5)
// {
//     return $x + $y - $z ;

// }
// $arr = ['y' => 10 , 'z' => 6 , 'x' => 2];
// var_dump(test2(...$arr));// test2(y:10 , z:6 , x:2)
// $x = 100 ;
// function x()
// {
//     global $x;
//     echo $GLOBALS['x'];
//     echo $x ;
// }

// x();

// echo $x ;
// $num = 200 ;
// $x = function (int $x, int $y) use (&$num) {
//     echo $x+$y * $num;
//     $num = 10 ;
// };

// $x(10, 20);
// echo "<br> $num";

// $arr = [1,2,3,4];
// // // [2 , 4 , 6 , 8 ]
// // $arrAfterMap = array_map(function ($elm) {
// //     return $elm * 2 ;
// // }, $arr);

// // var_dump($arr);

// $arrAfterMap = array_map(fn ($elm) => $elm * 2, $arr);

// $current_time = time();// 1-1-1970 => seconds

// echo $current_time ;
// echo "<br>" ;

// $after3dayes = $current_time + 3 *24 *60 * 60;
// echo $after3dayes ;
// echo "<br>" ;

// echo date('m/d/y  g:ia', $after3dayes);

// echo date_default_timezone_get();
// echo date_default_timezone_set('Africa/Cairo');
// echo date_default_timezone_get();

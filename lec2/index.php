<?php

// Array  =>  variable multi Values



// $allLangs = ['php' ,'js' , 'pyth'] ; //  indexed array

// echo $allLangs[] = 'us';

// array_push($allLangs, 's', 'a');

// var_dump($allLangs);
// echo "<pre>";
// print_r($allLangs);
// echo "</pre>";

// Associative Array   =>   assoc

// $allProgLangs = ['laravel' => 'php' , 'spring' => 'java' , 'rails' => 'ruby'];

// $allProgLangs['js'] = 'nextJs';
// var_dump($allProgLangs);
// echo $allProgLangs ;

// $allUsers = ['un' => 'ahmed' , 'pw' => '123' , 'email' => 'ahmed@gmail.com'];

// multidimintion Array
// $product = [
//   ['proName' => 'aa' , 'price' => 1200],
//   ['proName' => '1' , 'price' => 12100]
// ];

// $employee = [
//   'ahmed' => [
//     'name' => 'ahmed sayed',
//     'phones' => [123,22,55]
//   ],
//   'mohamed' => [
//     'name' => 'mohamed sayed',
//     'phones' => [777,888,96]
//   ]
//   ];


// $arrTest = [10 , 20 , 30 , 0 => 11 , 40 , 50];

// //echo $arrTest[0] ; // 11 -  10

// $arrTest = ['a' => 'ahmed' , 'b' => 'moh' , 'a' => 'ayman'];

// var_dump($arrTest['a']);

// $arr = [true => 'sayed' , null => 'ahmed' , 1 => '1' , '1' => 'string 1' , 1.8 => 'floatNumber'];

// echo $arr[''] ; // ahmed

// echo $arr[null]; // ahmed

// echo $arr[true]; // float  -  string 1  - sayed

// $arr = [ 1 , 2 , 3 , 40 => 4 , 5 , 6 , 100 => 55 , 6];

// // $val = array_pop($arr);
// // $arr[] = 7;
// // $val = array_shift($arr);
// // unset($arr[2] , $arr[40]);
// // var_dump($arr);

// var_dump(array_key_exists(0, $arr));

// var_dump(isset($arr[0]));


// operators    Arithmetic operators  +

// $x = 10 ;
// $y = 2 ;

// var_dump($x + $y);
// var_dump($x - $y);
// var_dump($x * $y);
// var_dump($x / $y);
// var_dump($x % $y);
// var_dump($x ** $y);

// $a = 10.2 ;
// $b = 2.8 ;

// var_dump($a + $b);
// var_dump($a - $b);
// var_dump($a * $b);
// var_dump($a / $b);
// var_dump($a % $b);
// var_dump($a ** $b);

// $x = '10';
// $x3 = -'10';
// $x2 = +'10';
// $x4 = +'h110ahmed';

// var_dump($x, $x3, $x2, $x4);

// $x = 10.6 ;
// $y = 2.8 ;
// // $y1 = 2.0 ;
// // $y2 = '2';
// // $y3 = 0 ;

// var_dump(fmod($x, $y));

// Assignment operators  = += -= **=
// $x = 10 ;

// $x = $y = 100 ;

// $x = ($y = 11) + 50;

// $y = 5 ;
// $y = $y + 5 ; // $y += 5

// $x = 'ahmed' ;

// $x .= ' this is my name';

// var_dump($x);


// comparison operators  == ===  !=  !==  <>  > >=   <  <=      <=>     -1    0    1
// <=>
//-1 0 1

// var_dump(10 <=> 10);


// $is_user_logged_in = false ;

// if($is_user_logged_in == true) {
//     echo "<button> logout </button>" ;
// } else {
//     echo "<button> login </button>" ;
// }
// $user = 'guest';
// $status = $is_user_logged_in == true ?
//     (
//         $user != 'guest' ?
//     "<button> logout guest </button> <button> complete your profile </button>"
//     : '<button> register guest </button>'
//     )

//     : "<button> login </button>" ;

// echo $status ;
// $status = $is_user_logged_in == true ?
//       "<button> logout </button>"
//       : "<button> login </button>" ;
// echo $status ;


// null coalescing   vs   ?:


// $path = null ;

// $url = $path ?? '/' ;

// echo $url ;

// $x = 5 ;
// echo $x++ ;// post increment  5
// echo $x ; // 6
// echo ++$x ;// pre increment  7
// echo $x ; // 7

// $j = null ;
// echo ++$j ;

// $n = 'ahmed';
// echo ++$n ;

// logical operators &&  and  =>   must be true   &   &&
// ||   or   => one true is enough  |   ||
// xor  one true buto not both

//  0    =>    0000  0000
//  1    =>    0000  0001

// bitwise example

$add_permission  = 8 ;
$read_permission = 4 ;
$edit_permission = 2 ;
$delete_permission = 2 ;

$my_permissions = 0 ;  // no permission yet
$my_permissions = $add_permission | $edit_permission  ;  // can add and edit now
$msg = ($my_permissions & $delete_permission) ? 'yes i have this permission' : 'no i can\'t' ;
$msg = ($my_permissions & $read_permission) ? 'yes i have this permission' : 'no i can\'t' ;
$msg = ($my_permissions & $add_permission) ? 'yes i have this permission' : 'no i can\'t' ;
$msg = ($my_permissions & $edit_permission) ? 'yes i have this permission' : 'no i can\'t' ;

var_dump($msg);




// var_dump(5 & 6);//  0000 0101   &   0000  0110  =>        0000   0100
// var_dump(5 | 9);//  0000 0101   |   0000  1001  =>        0000   1101
// var_dump(5 ^ 9);//  0000 0101   ^   0000  1001  =>        0000   1100
// $x = 6 ;//    011
// $y = 1 ;
// var_dump($x >> $y);
// $x = 6 ;//    0011 0000
// $y = 3 ;
// var_dump($x << $y);

// array operators

// $x = ['a' , 'b' , 'c'];
// $y = ['e' , 'f' , 'g' , 'h' , 'l'];

// var_dump($x + $y);

// $x = [0 => 1 , 'b' => 2 , 'c' => 3];
// // $y = ['a' => 10 , 'b' => 20 , 'c' => 30];
// $y = ['0' => 1 , 'b' => 2 , 'c' => 3];

// var_dump($x === $y) ;

// if( condition ){

// }


// if( condition ){

// }else{

// }


// if( condition ){

// }elseif(){

// }else{

// }

// if( condition ){

// }else if(){

// }else{

// }
$r = 60 ;

// if($r > 90) {
//     echo "a";
// } elseif($r <=90  && $r > 50) {
//     echo 'b';
// } else {
//     echo "f";
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php if($r > 90) : ?>

    <h1> A </h1>

<?php else if($r <= 90  && $r > 50) : ?>

<h1 style="background-color: red;" > B </h1>

<?php else : ?>

  <h1> faaaaaaaaaaaaail </h1>

<?php endif ?>

</body>
</html>

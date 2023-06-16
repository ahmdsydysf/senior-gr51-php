<?php


// loop

// While

// $i = 1 ;

// while(true) {
//     while($i < 10) {
//         echo "<h1> number is $i </h1>" ;
//         $i++ ;
//         break 2;
//     }
// }

// while($i < 10) {

//     if($i == 3) {
//         $i++ ;
//         continue ;
//     }
//     echo $i ;
//     $i++ ;
// }

// do {
//     echo $i ;
//     $i++ ;
// } while($i > 10);

// for( $var  ;  Condition   ;  inc dec ){

// }

// for($i = 0 ; $i < 10 ; print $i , $i++) {
//     echo "num is : ahmed";
// }

// $txt = 'php group';
// for($i = 0 ; $i < strlen($txt) ; $i++) {
//     echo $txt[$i] ;
//     echo "<br>";
// }

// $data = ['z' , 'a' , 'b'];

// // $len = count($data);

// for ($i=0 , $len = count($data) ; $i < $len ; $i++) {
//     echo $data[$i] ;
// }

// $progLangs = [ 'java' , 'c' ,'php'] ;

// foreach($progLangs as $user => $data) {
//     echo $user . '::' . $data . '<br>';
// }


// $langs_fram = ['php' => 'laravel' , 'java' => 'spring' , 'ruby' => 'rails'];

// $user = [
//   'name' => 'ahmed sayed' ,
//   'email' => 'ahmed@gmail.com',
//   'pass' => 'ahmed123',
//   'skills' => ['js' , 'php' , 'css']
// ];

// foreach($user as $x => $y) {
//     if(is_array($y)) {
//         foreach($y as $k => $v) {
//             echo $k+1 . "---> $v";
//         }
//     } else {
//         echo $y ;
//     }
// }
// echo "<h1> $user[name] </h1> ";
// echo "<h1> my skills is ::  </h1> ";

// foreach($user['skills']  as $key => $val) {
//     echo $val ;
// }

// $todatIs = 'fri';

// switch($todatIs) {
//     case 'fri':
//     case 'sat':
//         echo 'we are closed';
//         break;
//     case 'mod':
//     case 'ddd':
//     case 'sddsun':
//     case 'sssun':
//         echo 'we are open';
//         break;
//     default:
//         echo "no match plz check day value";
// }

// $day_is = 1 ;

// $r = match($day_is) {
//     0 => 'day Off',
//     1 => 'day Off',
//     2,3,4,5=> 'working normally',
//     default => 'errrror'
// };

// echo $r ;

require_once "data.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php

include "navbar.php";

?>

<h1> <?= $name ?> </h1>
</body>
</html>

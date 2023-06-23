<?php

var_dump($_POST);
var_dump($_FILES);


// $_FILES = [
//   'myimg' => [
//     'name' => ''
//     'size' => ''
//     'name' => ''
//     'name' => ''
//     'name' => ''
//   ]
// ]
$myimg = $_FILES['myimg'] ;
$ext = ['jpg' , 'png' , 'jpeg'];

$tmp_name = $myimg['tmp_name'];
$img_erro = $myimg['error'];
$img_size = $myimg['size'];// byte  / 1024 / 1024
$imgname = uniqid() . $myimg['name'];
$expload = explode('.', $imgname); //array
$end_of  = end($expload);
$final_ext = strtolower($end_of);


if(isset($_FILES['myimg'])) {
    if($img_erro != 4) {
        if($img_size < 1027175) {
            if(in_array($final_ext, $ext)) {
                move_uploaded_file($tmp_name, 'uploads/profileimags/' . $imgname);
            } else {
                echo "exxxxxxxtintion";
            }
        } else {
            echo "size errorrrrrr";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data" >

    <input type="file" name="myimg" id="">

    <button>upload</button>
  </form>
</body>
</html>
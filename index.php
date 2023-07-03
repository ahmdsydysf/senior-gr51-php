
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>multi Files</title>
</head>
<body>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="text" name="test">
    <input type="file" name="myimages[]" id="" multiple >
    <button>upload</button>
  </form>
</body>
</html>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $all_Errors = [];
    $file_Count = count($_FILES['myimages']['name']);
    $allowed_ext = ['jpg' , 'png' , 'jpeg'];
    for($i = 0 ; $i < $file_Count  ; $i++) {
        $explod = explode('.', $_FILES['myimages']['name'][$i]);//jahsdh8.456df.gdg.PNG []
        $endOf = end($explod); // png
        $file_ext = strtolower($endOf);
        $fileName = uniqid() . $_FILES['myimages']['name'][$i];
        $tmpPath = $_FILES['myimages']['tmp_name'][$i];
        if($_FILES['myimages']['error'][$i] == 4) {
            $all_Errors['noFile'] = '<div> plz choose File </div>';
        } else {
            if($_FILES['myimages']['size'][$i] > 2097152) {
                $all_Errors['fileSize'] = '<div> plz choose File less than 2 miga </div>';
            } else {
                if(! in_array($file_ext, $allowed_ext)) {
                    $all_Errors['fileExt'] = '<div> plz choose File is png , jpg , jpeg </div>';
                } else {
                    move_uploaded_file($tmpPath, $_SERVER['DOCUMENT_ROOT'] . '/senior-gr51-php/upload/' . $fileName);
                }
            }
        }
    }
}
var_dump($_REQUEST);
var_dump($all_Errors);
var_dump($_FILES['myimages']['error'][0]);
if(isset($all_Errors) && !empty($all_Errors)) {
    foreach ($all_Errors as $value) {
        echo $value ;
    }
}


// $file_Count = count($_FILES['myimages']['name']);//2
// for($i = 0 ; $i < $file_Count  ; $i++) {
//     move_uploaded_file($_FILES['myimages']['tmp_name'][$i], 'upload/' . $_FILES['myimages']['name'][$i]);
// }
// move_uploaded_file($_FILES['myimages']['tmp_name'][$i])
?>
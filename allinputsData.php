<?php

var_dump($_POST);

$courses = $_POST['course'];

if(isset($_POST['email'])) {

    var_dump($_POST['course']);

    foreach($courses as $course) {
        echo $course ;
    }
}
?>

<!-- http://localhost/senior-gr51-php/allinputsData.php?username=qefyq&email=moxevenywu%40mailinator.com&password=Pa%24%24w0rd%21&clr=%23c1c172&dt=1983-04-18&gender=female&course%5B%5D=html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>inputs</title>
</head>
<body>
  <form action="" method="post" id="myform" >
    <input type="text" name="username" placeholder="username">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="color" name="clr">
    <input type="date" name="dt"> 

    <input type="radio" name="gender" value="male" id="">male
    <input type="radio" name="gender" value="female" id="">female 

    <input type="checkbox" name="course[]" value="html" id="">html
    <input type="checkbox" name="course[]" value="css" id="">css
    <input type="checkbox" name="course[]" value="js" id="">js

    <select name="cars[]" id="" required multiple >
      <option value="ert"></option>
      <option value="eeee" selected >b</option>
      <option value="ee">m</option>
      <option value="erger">s</option>
      <option value="erge">e</option>
      <option value="0111">r</option>
    </select>

    <textarea name="msg" id="" cols="30" rows="10">

    </textarea>


  

    <button>login</button>
  </form>

</body>
</html>
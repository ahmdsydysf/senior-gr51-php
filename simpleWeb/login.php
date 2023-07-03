<?php
session_start();


$users = [
  ['username' => 'ahmed' , 'pass' => 123],
  ['username' => 'ali' , 'pass' => 123],
  ['username' => 'mohamed' , 'pass' => 123],
];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $un = $_POST['username'];
    $pw = $_POST['password'];

    foreach ($users as $key => $value) {
        if($value['username'] == $un && $value['pass'] == $pw) {
            $_SESSION['name'] = $un ;
            $_SESSION['password'] = $pw ;

            header('location:index.php');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="username">
    <input type="text" name="password">
    <button>login</button>
  </form>
</body>
</html>
<?php

$data = stripslashes(file_get_contents('php://input'));
$myReadableData = json_decode($data, true);
$name = $myReadableData['name'];
$email = $myReadableData['email'];
$password = $myReadableData['pass'];
$id = intval($myReadableData['id']);

$con = mysqli_connect('localhost', 'root', '', 'group51ajax');
$stat = "insert into students (id , name , email , password) values ($id , '$name' ,'$email' , '$password') on Duplicate key update name='$name' , email='$email' , password='$password'";
mysqli_query($con, $stat);
if(! mysqli_error($con)) {
    echo "add success";
} else {
    echo "fail to add";
}

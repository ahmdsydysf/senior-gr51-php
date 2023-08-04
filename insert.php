<?php

$data = stripslashes(file_get_contents('php://input'));
$myReadableData = json_decode($data, true);
$name = $myReadableData['name'];
$email = $myReadableData['email'];
$password = $myReadableData['pass'];

$con = mysqli_connect('localhost', 'root', '', 'group51ajax');
$stat = "insert into students (name , email , password) values ('$name' ,'$email' , '$password')";
mysqli_query($con, $stat);
if(! mysqli_error($con)) {
    echo "add success";
} else {
    echo "fail to add";
}

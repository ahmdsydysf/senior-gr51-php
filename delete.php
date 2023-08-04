<?php

$data = stripslashes(file_get_contents('php://input'));
$myReadableData = json_decode($data, true);

$studentID = $myReadableData['id'];

$con = mysqli_connect('localhost', 'root', '', 'group51ajax');

$stat = "delete from students where id = $studentID";

mysqli_query($con, $stat);

if(! mysqli_error($con)) {
    echo "delete success";
} else {
    echo "fail to delete";
}

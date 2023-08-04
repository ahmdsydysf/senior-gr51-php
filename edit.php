<?php

$data = stripslashes(file_get_contents('php://input'));
$myReadableData = json_decode($data, true);

$studentID = $myReadableData['id'];

$con = mysqli_connect('localhost', 'root', '', 'group51ajax');

$stat = "select * from students where id = $studentID";

$query = mysqli_query($con, $stat);

if(! mysqli_error($con)) {
    $r = mysqli_fetch_assoc($query);
    echo json_encode($r);
} else {
    echo "eeeeeeeeeeror";
}

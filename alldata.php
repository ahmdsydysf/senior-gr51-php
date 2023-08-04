<?php



$con = mysqli_connect('localhost', 'root', '', 'group51ajax');
$stat = "select * from students";
$query = mysqli_query($con, $stat);

$allStudents = [];

while($std = mysqli_fetch_assoc($query)) {
    $allStudents[] = $std ;
}


if(! mysqli_error($con)) {
    echo json_encode($allStudents);
} else {
    echo "fail to read";
}

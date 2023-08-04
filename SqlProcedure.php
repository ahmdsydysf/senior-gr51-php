<?php

$con = mysqli_connect('localhost', 'root', '', 'storage_procedure_test_51');
$id = 1 ;
// $stat = "CALL getFullData($id)";

$stat = "select name , email , Role_name(role) AS RoleName from users";

$q = mysqli_query($con, $stat);

var_dump(mysqli_fetch_assoc($q));

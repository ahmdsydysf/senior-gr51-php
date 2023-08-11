<?php



require_once "Database.php";

$newuser= new Database();
var_dump($newuser->select('users', 'id , name')->selectWhere('id', '=', 8)->whereAnd('name', '=', 'seniorahmedsenior')->allData());

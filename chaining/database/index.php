<?php



require_once "Database.php";

$newuser= new Database();

$newuser->dataToInsert('moaz', 'youssemail', '123654')->insert('users', $newuser->insertedData)->excut();

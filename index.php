<?php

require_once "Agent.php";
require_once "TestAbsEmp.php";
require_once "Emp.php";
require_once "Car.php";


$bm = new Car();
$bm->model = 'x8';
$bm->setCode(123);
var_dump($bm->openCar(123));

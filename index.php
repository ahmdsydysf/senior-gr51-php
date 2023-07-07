<?php

// import & export
// create schema

// select  => read  => r from CRUD
// select اسم العمود from اسم الجدول

// select * from users
// select id , name , email from users
// select * from user where id = 10
// select * from user where id > 10
// select * from user where id < 10
// select * from user where id >= 10
// select * from user where id <= 10

// select * from user where id != 10
// select * from user where id <> 10

// SELECT concat(first_name , ' ' , last_name) from users
// SELECT concat(first_name , ' ' , last_name) AS fullName from users

// SELECT concat(first_name , ' ' , last_name) as fullname ,salary as egy_salary, salary / 10 as sudi_alary, employee_id , department_id FROM employees where department_id = 90 ORDER BY employee_id;
// SELECT * FROM `employees` where employee_id > 125 and employee_id < 150 OR first_name = 'Adam';
// SELECT first_name , last_name , department_id FROM `employees` WHERE `department_id` in (30 , 90);
// SELECT first_name , last_name , department_id FROM `employees` WHERE `department_id` BETWEEN 30 and 90;

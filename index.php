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

// SELECT * FROM `employees` where first_name like 'amr';
// SELECT * FROM `employees` where first_name like '%d';
// SELECT * FROM `employees` where first_name like '%d%';
// SELECT * FROM `employees` where first_name like 'd%';
// SELECT * FROM `employees` where first_name like 'a%d';
// SELECT * FROM `employees` where first_name like '%e_';
// SELECT * FROM `employees` where first_name like '%e%e%';


// SELECT * FROM `employees` where phone_number is Null;
// SELECT * FROM `employees` where phone_number is not Null;

// upper , sum , min , max , number , date agrgation functions
// SELECT last_name , trim(last_name ) FROM `employees` WHERE employee_id = 101;
// SELECT last_name , trim( Both from last_name ) FROM `employees` WHERE employee_id = 101;
// SELECT last_name , trim( LEADING from last_name ) FROM `employees` WHERE employee_id = 101;
// SELECT last_name , trim( TRAILING from last_name ) FROM `employees` WHERE employee_id = 101;
// SELECT last_name , trim(last_name) , trim('$' from last_name ) FROM `employees`;


// SELECT salary , ceil(salary) FROM `employees`;
// SELECT salary , floor(salary) FROM `employees`;
// SELECT salary , round(salary) FROM `employees`;
// SELECT salary , TRUNCATE(salary , 1) FROM `employees`;
// SELECT salary , TRUNCATE(salary , 2) FROM `employees`;
// SELECT salary , TRUNCATE(salary , 0) FROM `employees`;


// SELECT CURRENT_TIME();
// SELECT CURRENT_TIME;

// SELECT curdate();
// SELECT CURRENT_DATE();
// SELECT CURRENT_DATE;

// SELECT now();
// SELECT CURRENT_TIMESTAMP;
// SELECT CURRENT_TIMESTAMP();

// SELECT dayname(now());
// SELECT dayofmonth(now());
// SELECT dayofweak(now());
// SELECT dayofyear(now());


// SELECT datediff(now() , '1990-07-07') / 365;
// SELECT first_name , gender , if(gender = 0 , 'male' , 'female') as redableGender FROM `employees`;
// SELECT department_id , sum(salary) FROM employees GROUP BY department_id;
// SELECT count(*) , gender ,job_id , CASE gender when '0' then 'Male' when '1' then 'Female' ELSE 'not defined' end AS namedGender FROM employees GROUP BY gender , job_id;

<?php

// SELECT `first_name` , `email` , department_name from employees , departments WHERE departments.department_id = employees.department_id;
// SELECT `first_name` , departments.department_name FROM `employees` JOIN departments on departments.department_id = employees.department_id;

// SELECT `first_name` , departments.department_name FROM `employees` left JOIN departments on departments.department_id = employees.department_id;
// SELECT `first_name` , departments.department_name FROM
// 	`employees` right JOIN departments
// 	on departments.department_id = employees.department_id;

// SELECT `first_name` , departments.department_name FROM `employees` right JOIN departments on departments.department_id = employees.department_id UNION SELECT `first_name` , departments.department_name FROM `employees` left JOIN departments on departments.department_id = employees.department_id;


// SELECT emps.first_name , emps.employee_id , managers.first_name , managers.employee_id FROM employees as emps , employees as managers
// SELECT emps.first_name , emps.employee_id , managers.first_name , managers.employee_id FROM employees as emps , employees as managers WHERE emps.manager_id = managers.employee_id;


// SELECT emps.first_name , emps.employee_id , managers.first_name as managerName , managers.employee_id as Manager_id FROM employees as emps , employees as managers WHERE emps.manager_id = managers.employee_id;
// DML => insert => C in CRUD
// insert into اسم الجدول  (اسماء الاعمدة) values (القيمة لكل عمود)
//INSERT INTO `employees`( `first_name`, `last_name`, `email`, `phone_number`, `hire_date`, `job_id`, `salary`, `commission_pct`, `gender`) VALUES ('aaaaa0' , 'bbbbb' ,'ddsdfs', 5468456464 , '1999-05-06' , 'AD_PRES' , 55644 , 0.03 , 0)


// DML => update => U in CRUD
// update اسم الجدول  set  اسم العمود  = القيمة الجديده  , اسم العمود  =  القيمة  where id = 1


//DML => delete => D in CRUD
// Delete from اسم الجدول  where الشرط

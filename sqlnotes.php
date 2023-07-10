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

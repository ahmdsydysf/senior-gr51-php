<?php

// 1- connection
// 2- statment
// 3- excute
// 4- result

$myConn = mysqli_connect('localhost', 'root', '', 'hr_db');
$statme = "SELECT * FROM `employees` where first_name = 'amr'; ";
// $statme = "SELECT * FROM `employees` where first_name like '%e%e%' ";
// $statme = "SELECT * FROM employees WHERE employee_id > 100 AND employee_id < 120";

$employess = mysqli_query($myConn, $statme);
// $final_emps = mysqli_fetch_assoc($employess);
// $final_emps1 = mysqli_fetch_assoc($employess);
$erooo = mysqli_error($myConn);

// var_dump($final_emps);

// var_dump($final_emps1);

// while($emp = mysqli_fetch_assoc($employess)) {
//     var_dump($emp);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

</head>
<body>
  <?php while($row = mysqli_fetch_assoc($employess)): ?>
    <div class="card" style="width: 18rem;background-color:greenyellow;margin:15px">
      <div class="card-body">
        <h5 class="card-title"><?= $row['first_name'] ?></h5>
        <h6 class="card-subtitle mb-2 text-body-secondary">email</h6>
        <p class="card-text">phonenumber</p>
        <a href="#" class="card-link">salary</a>
        <a href="#" class="card-link">id : <?= $row['employee_id'] ?> </a>
      </div>
    </div>
<?php endwhile ;?>
</body>
</html>

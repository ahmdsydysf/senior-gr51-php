<?php
session_start();
require_once 'config.php';
$adminflag = false;

$query = mysqli_query($con, 'select * from users');

while ($user = mysqli_fetch_assoc($query)) {
    if ($user['is_admin'] == 'admin') {
        $adminflag = true;
    }
}
if($adminflag == false) {
    $query = mysqli_query($con, "insert into users (email,password,is_admin) values ('Admin@gmail.com','Admin12345','admin')");
}

$flag = 0 ;
$redirectflag = 0;
$all_errors = [];
if(isset($_POST['email'])) {

    $password = $_POST['password'] ;
    $email    = $_POST['email'] ;

    if(! empty($password)) {
        if(strlen($password) > 8) {
            if(preg_match('@[A-Z]@', $password)) {
                $flag++ ;
            } else {
                $all_errors['passRegx'] = 'plz ';
            }
        } else {
            $all_errors['passlen'] = 'plz len > 8';
        }
    } else {
        $all_errors['passf'] = 'plz enter';
    }
    if(! empty($email)) {

        if(preg_match('/.com$/', $email)) {
            $flag++;
        } else {
            $all_errors['emailRegx'] = 'plz end us with senior';
        }
    } else {
        $all_errors['emailf'] = 'plz enter';
    }
    if($flag == 2) {
        $sql = "select email , password from users";
        $result = mysqli_query($con, $sql);
        while ($user = mysqli_fetch_assoc($result)) {
            if ($user['email'] == $email && $user['password'] == $password) {
                $redirectflag = 1;
            }
        }

    }
    if($redirectflag == 1) {
        if ($_SESSION['email'] == 'Admin@gmail.com') {
            $_SESSION['email'] == $email;
            header('location:dashboard.php');
        } else {
            $_SESSION['email'] == $email;
            header('location:index.php');
        }
    } else {
        echo'user is not found';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign in</p>

                <form class="mx-1 mx-md-4" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input name="email" type="email" id="form3Example3c" class="form-control" required/>
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input name="password" type="password" id="form3Example4c" class="form-control" required/>
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>


                  

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" class="btn btn-primary btn-lg">sign in</button>
                  </div>

                </form>
                <div class="overlay-panel overlay-right">
            <?php if(! empty($all_errors)):?>
<?php foreach($all_errors as $error):?>
    <h5><?= $error?></h5><br>
    <?php endforeach?>
    <?php endif?>

			</div>
              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="./images/draw1.webp"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="./JS/bootstrap.bundle.min.js"></script>
</body>
</html>
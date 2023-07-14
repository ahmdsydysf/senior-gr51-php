<?php
session_start();
require_once 'config.php';

$query = mysqli_query($con, 'select * from users');
while($users = mysqli_fetch_assoc($query)) {
    if($users['name'] == 'senioradmin' && $users['email'] == 'admin@senior.com') {
        $adminFlag = true ;
    } else {
        $adminFlag = false ;
    }
}
if($adminFlag == false) {
    $query = mysqli_query($con, "insert into users (name , email , password) values ('senioradmin' , 'admin@senior.com' , 'Admin123')");
}


if(isset($_POST['email'])) {

    $password = $_POST['password'] ;
    $email    = $_POST['email'] ;
    $flag = 0 ;
    $redirectflag = 0 ;
    $all_errors = [];


    if(! empty($password)) {
        if(strlen($password) >= 8) {
            if(preg_match('@[A-Z]@', $password)) {
                $flag++ ;
            } else {
                $all_errors['passRegx'] = 'plz end us with senior';
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

        $q = 'select email , password from users';
        $result =  mysqli_query($con, $q);
        while($user = mysqli_fetch_assoc($result)) {
            if($user['email'] == $email && $user['password'] == $password) {
                $redirectflag = 1 ;
                // $_SESSION['email'] = $user['email'];
                $_SESSION['email'] = $email;
            }
        }

        // header('location:login.php');
    }

    if($redirectflag == 1) {
        if($_SESSION['email'] == 'admin@senior.com') {

            header('location:dashboard/index.php');
        } else {

            header('location:mainWeb/index.php');
        }
    } else {
        echo ' user is not exist';
    }

}



?>


<!doctype html>
<html lang="en">
  <head>
  	<title>login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign up</h3>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>

							<?php if(! empty($all_errors)) : ?>
								<?php foreach($all_errors as $error) : ?>
									<div class="alert alert-danger">
										<?= $error ?>
									</div>
								<?php endforeach ?>
							<?php endif ?>
							<form method="post" class="signin-form">
			  
			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" name="email" required>
			      			<label class="form-control-placeholder" for="email">email</label>
			      		</div>
		            <div class="form-group">
		              <input id="password-field" type="password" name="password" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">login</button>
		            </div>
		            
		            </div>
		          </form>
		           <a href="reg.php">register</a>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>


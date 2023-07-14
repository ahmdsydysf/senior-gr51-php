<?php
require_once 'config.php';

if(isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = $_POST['password'] ;
    $email    = $_POST['email'] ;


    $flag = 0 ;
    $all_errors = [];

    if(! empty($username)) {
        if(strlen($username) > 8) {
            if(preg_match('/^senior/', $username)) {
                $flag++ ;
            } else {
                $all_errors['usernameRegx'] = 'plz end us with senior';
            }
        } else {
            $all_errors['usernamelen'] = 'plz len > 8';
        }
    } else {
        $all_errors['usernamef'] = 'plz enter';
    }
    if(! empty($password)) {
        if(strlen($password) > 8) {
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


    if($flag == 3) {
        // header('location:index.php');
        $sat = "insert into users (name , password , email) values ('$username' , '$password' , '$email')";
        mysqli_query($con, $sat);
        header('location:login.php');
    } else {
        echo "try agaaaaaain";
    }

}



?>


<!doctype html>
<html lang="en">
  <head>
  	<title>register</title>
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
					<h2 class="heading-section">Login #05</h2>
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
			      			<input type="text" class="form-control" name="username" required>
			      			<label class="form-control-placeholder" for="username">Username</label>
			      		</div>
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
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">register</button>
		            </div>
		            
		            </div>
		          </form>
		           <a href="login.php">login</a>
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


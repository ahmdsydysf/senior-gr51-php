<?php

require_once "data.php";
var_dump($_GET);
var_dump($_POST);
var_dump(isset($_POST['username1']));


if(isset($_POST['username1'])) {

    $username = $_POST['username1'];
    $password = $_POST['password1'] ;
    $email    = $_POST['email1'] ;


    $flag = 0 ;
    $all_errors = [];

    $users = [
      'user1' => ['name' => 'mohamed' , 'email' => 'a@g.com' , 'password' => 'red123'],
      'user2' => ['name' => 'kamal' , 'email' => 'a@g.com' , 'password' => 'blue123'],
      'user3' => ['name' => 'ahmed1' , 'email' => 'ahmed@gmail.com' , 'password' => 'ahmed123'],
      'user4' => ['name' => 'sayed' , 'email' => 'a@g.com' , 'password' => 'green123'],
    ];

    if(! empty($username)) {
        if(strlen($username) > 8) {
            if(preg_match('/senior$/', $username)) {
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
        if(strlen($email) > 8) {
            if(preg_match('/.com$/', $email)) {
                $flag++;
            } else {
                $all_errors['emailRegx'] = 'plz end us with senior';
            }
        } else {
            $all_errors['emaillen'] = 'plz len > 8';
        }
    } else {
        $all_errors['emailf'] = 'plz enter';
    }


    // foreach($users as $user) {
    // }


    if($flag == 3) {
        header('location:index.php');
    } else {
        echo "try agaaaaaain";
    }

}
// $_GET
// $_POST

?>


<!doctype html>

<html lang="en"> 

 <head> 

  <meta charset="UTF-8"> 

  <title>CodePen - Animated Login Form using Html &amp; CSS Only</title> 

  <link rel="stylesheet" href="./style.css"> 
  
 </head> 

 <body> <!-- partial:index.partial.html --> 

  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

   <div class="signin"> 

    <div class="content"> 

     <h2>Sign In</h2> 


<form  method="post" >




<div class="form"  > 

<div class="inputBox"> 

 <input type="text"  name="username1" id="" class=""> <i>Username</i> 

</div> 
<div class="inputBox"> 

 <input  name="email1" type="text"> <i>email</i> 

</div> 

<div class="inputBox"> 

 <input  name="password1" type="password" > <i>Password</i> 
<input type="checkbox" name="" id="">
<input type="checkbox" name="" id="">

<input type="radio" name="" id="">
<input type="radio" name="" id="">
<input type="radio" name="" id="">

<textarea name="" id="" cols="30" rows="10"></textarea>

<select name="" id="">
  <option value="">eg</option>
  <option value="">eee</option>
  <option value="">sss</option>
</select>
</div> 

</div> 

<div class="inputBox"> 

 <!-- <input type="submit" value="Login" name="log_btn">  -->
 <button name="login_btn"> login </button>

</div> 


</form>
  

     </div> 

    </div> 

   </div> 

  </section> <!-- partial --> 

 </body>

</html>
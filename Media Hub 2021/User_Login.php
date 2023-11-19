<?php
//lets call the user function page 
include_once('lib/functions/userFunctions.php');

if(isset($_POST['btnLogin'])){
    
//now we needs to call the Authentication function

$result = Authentication($_POST['userName'],$_POST['userPwd']);

echo($result);

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    
    <!-- Link booststap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Link Jquery and java script -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>                                                                                     

</head>

<!-- background image -->

 <body style="background-image: url('image/back_ground.jpg'); 
     background-size: cover;">
<div class="bg-dark bg-opacity-50" style="height: 100vh;"> 



<!-- Top navigtion -->


<nav class="navbar navbar-dark text-white">
		<div class="container">
			<a class="navbar-brand text-warning" href="index.php">
				<img src="image/logo2.png" width="30" height="30" class="d-inline-block align-top" alt="">Media Hub
			</a>
			<a class="form-inline" href="User_register.php"> 
				<button class="btn btn-outline-warning fw-bold" type="button">Sign Up</button>
			</a>
		</div>
	</nav>


<!-- LogIN form  -->
<form action="" method="post">
<div class="container">
  <div class="container py-5 h-100 ">

    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-5 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white bg-success p-2 bg-opacity-75" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-1 mt-md-1 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-warning mb-4">Please enter your login and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="email" id="userName" name="userName" class="form-control form-control-lg" />
                <label class="form-label" for="userName">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="userPwd" name="userPwd" class="form-control form-control-lg" />
                <label class="form-label" for="userPwd">Password</label>
              </div>
      </form>
              <p class="small mb-5 pb-lg-2"><a class="text-warning" href="#">Forgot password?</a></p>

              <button class="btn btn-outline-warning btn-lg mb-5 px-5 fw-bold" type="submit" name="btnLogin">Login</button>

              <div>
                <p class="mb-0">Don't have an account? <a href="User_register.php" class="text-warning fw-bold">Sign Up</a></p>
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  </div>
  </div>

  <!-- BOttom navigtion -->

     

          <div class="fixed-bottom">
		<div class="col-12 col-md-12-p-1 col-lg-12 col-xl-12">
		<div class="text-center">
			<footer style="background-color: #262626">
				<div class="text-white p-2 "> © 2021 Copyright:
					<a class="link" href="#">Media Hub</a>
				</div>
			</footer>
		</div>
	    </div>
    </div>
          
</body>
</html>
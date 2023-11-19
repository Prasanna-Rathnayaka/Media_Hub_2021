



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register Page</title>
   
   <!-- Link Css,Js-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>


<!-- Body Image-->
<body style="background-image: url('image/back_ground.jpg'); 
     background-size: cover;">
<div class="bg-dark bg-opacity-50" style="height: 100vh;">



	<!-- Navigation bar-->
	<nav class="navbar navbar-dark text-white">
		<div class="container">
			<a class="navbar-brand text-warning" href="index.php">
				<img src="image/logo2.png" width="30" height="30" class="d-inline-block align-top" alt="">Media Hub
			</a>
			<a class="form-inline" href="User_Login.php"> 
				<button class="btn btn-warning fw-bold" type="button">Login</button>
			</a>
		</div>
	</nav>



	<!-- Form Start-->
	<form action="lib/route/users/registration.php" method="post">
	<div class="container mt-5">
	   <div class="row justify-content-center">
	      <div class="col-10 col-md-8 col-lg-6 col-xl-5">
	        <div class="card bg-dark text-white bg-opacity-75" style="border-radius: 1rem;">
	          <div class="card-body text-center" >
	            <div class="mb-4 mx-4">

	              	<h2 class="fw-bold mb-2 mt-2 text-uppercase ">Sign Up</h2>
	              	<p class="mb-4 text-warning">! Please Enter Your Details !</p>

	              		<!-- Form Inout Filed Start-->
	            
	               		<div class="form-white mb-2">
	                		<input type="text" name="userName" id="userName" placeholder="Enter Your First Name" class="form-control">
	                		<label class="form-label" for="firstName">First Name</label>
	             		</div>

		               	<div class="form-white mb-2">
		                	<input type="text" name="lastName" id="lastName" placeholder="Enter Your Last Name" class="form-control">
		                	<label class="form-label" for="lastName"  >Last Name</label>
		                </div>

		              	<div class="form-white mb-2">
			                <input type="email" name="userEmail" id="userEmail" placeholder="Enter Your Email" class="form-control">
			                <label class="form-label" for="userEmail" >Email</label>
		             	</div>

			  			<div class="form-white mb-2">
			                <input type="password" name="userPwd" id="userPwd" placeholder="Enter Your Password" class="form-control">
			                <label class="form-label" for="userPwd" placeholder="Enter Your Password" >Password</label>
			            </div>

			  			<div class="form-white mb-2">
			                <input type="password" name="userComPwd" id="userComPwd" placeholder="Enter confirm Password" class="form-control">
			                <label class="form-label" for="useComPwd" >confirm Password</label>
			            </div>

	              		<button class="btn btn-outline-warning" style="width: 150px" type="submit" id="submit">Sign Up</button>


						<!-- Social media Login Icon-->
		              	<div class="d-flex justify-content-center mt-3">

				</form>
		                <!-- Facebook -->
						<a class="btn btn-primary" style="background-color: #3b5998;" href="#" role="button"><i class="fab fa-facebook-f"></i></a>
						<!-- Twitter -->
						<a class="btn btn-primary mx-3" style="background-color: #55acee;" href="#" role="button"><i class="fab fa-twitter"></i></a>
						<!-- Google -->
						<a class="btn btn-primary" style="background-color: #dd4b39;" href="#" role="button"><i class="fab fa-google"></i></a>
		              	</div>


			            <div class="mt-3">
			              	<p class="text-white">have an account ? <a href="User_Login.php" class=" fw-bold text-warning" >Login</a></p>
			            </div>
					</div>
	          	</div>
	        </div>
	      </div>
	   </div>
	</div>

	<!-- Footer -->
	<div class="fixed-bottom">
		<div class="col-12 col-md-12-p-1 col-lg-12 col-xl-12">
		<div class="text-center">
			<footer style="background-color: #262626">
				<div class="text-white p-2 "> © 2021 Copyright:
					<a class="link" href="#">Media Hub</a>
				</div>
			</footer>
		</div>
	</div></div>
	<!-- Footer -->
</div>
</body>
</html>

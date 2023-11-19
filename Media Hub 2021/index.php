<!DOCTYPE html>
<html lang="en">
<head>
    <title>Index Page</title>
    
    <!-- Link bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Link Jquery and java script -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>                                                                                     

</head>


<!-- background image -->
<body style="background-image: url('image/back_ground.jpg'); 
     background-size: cover;">
<div class="bg-dark bg-opacity-50" style="height: 100vh;">




<!-- Top navigation -->
<nav class="navbar   text-white " style="background-color:rgba(1, 1, 1, 0.0)">
  <a class="navbar-brand text-warning" href="index.php">
  <div class="container">
    <img src="image/logo2.png" width="30" height="30" class="d-inline-block align-top " alt="">
    Media Hub
  </a>
  <form class="form-inline">
    <div class="btn">

    <!-- login page link -->  
    <a href="User_Login.php" class= "btn btn-outline-warning fw-bold pl-5 " role="button" aria-pressed="true">Login</a>
    </div>
    <div class="btn">
     <!-- Sign Up page link -->  
    <a href="User_Register.php" class="btn btn-outline-warning fw-bold pl-5" type="button" aria-pressed="true">Sign Up</a>
    </div>
  </form>
  </div>
</nav>



<!-- welcome form  -->
<div class="container">
  <div class="col-md-12 " style="margin-top:80px; width:100%; height: 500px;">
        <div class="card text-center" style="background-color:rgba(1,1,1, 0)">
               <h1 class="fw-bold mb-2 mt-5 text-uppercase text-white">Welcome</h1>
              <p class="h3 text-warning mb-5 mt-3"> Media Hub is the e-learning community of Swiss Higher Education Institutions.<br>
The goal of eduhub is to exchange experiences and promote <br> collaboration within the Swiss academic <br> e-learning community.</p> 
        </div>
  </div>
</div>
</div>

  <!-- BOttom navigation -->

          
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
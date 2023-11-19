<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Page</title>
    
    <!-- Link booststap CSS-->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/sidebar.css">
    <link rel="stylesheet" href="../../css/dropdown.css">


    <!-- Link Jquery and java script -->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>   
    
    <!-- Link Externel CSS-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<!-- Top navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container">
      <a href="index.php" class="navbar-brand text-warning" href="#">
				<img src="../../image/logo2.png" width="30" height="30" class="d-inline-block align-top" alt=""> Media Hub
			</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
   
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
<!-- 
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>-->
      </ul> 
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>




<!-- Side navigation -->
<div class="sidebar-container">
  <div class="sidebar-logo">
    Admin Panel
  </div>
  <ul class="sidebar-navigation">
    <br>
            <li class="header">MAIN MENU</li>
            
            <li><a href="#">
                <i class="fa fa-home" aria-hidden="true"></i> Homepage </a></li>

            <li> <a href="#">
                <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard </a></li>
            

                   

                <br><br><br>
      
                <li class="header"> ADMIN</li>
              
                <li> 
                    <button class="dropdown-btn">Admin Managment  
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container">     
                  <a href="#"> <i class="fa fa-users" aria-hidden="true"></i> Add Admin</a>
                  <a href="#"><i class="fa fa-users" aria-hidden="true"></i> View Admin</a>
                  <a href="#"><i class="fa fa-cog" aria-hidden="true"></i> Login Managment</a>
                </div>
                </li> 






                <br><br><br>
                <li class="header">OTHER</li>
            

                <!--
                <li><a href="#">
                <i class="fa fa-users" aria-hidden="true"></i> Add </a></li>
            
              <li> <a href="#">
                <i class="fa fa-users" aria-hidden="true"></i> Delete </a></li> -->

            <li> <a href="#">
                <i class="fa fa-cog" aria-hidden="true"></i> Settings </a></li>

            <li> <a href="#">
                <i class="fa fa-info-circle" aria-hidden="true"></i> Information </a> </li></li>  
                
             







                </ul>
              </div>







<div class="content-container">

  <div class="container-fluid">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
      <h1>lorem loremloremloremlorem</h1>
      <p>This example is a quick exercise to illd HTML, so it also adapts to your viewport and device.</p>
      <p>To see the difference between static and fixed top , just scroll.</p>
    


      
    </div>
  </div>
</div>




<!-- java script -->
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>





</body>
</html>


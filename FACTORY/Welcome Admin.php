<html>
<head>
<title>Welcome Admin</title>
<link rel="stylesheet" href="Welcome Admin.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<body>
  <style>
  .dropdown:hover>.dropdown-menu
  {
  	display:block;
  }
  </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="Welcome Admin.php"><img src="Images/FMS/logo_transparent(1).png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Raw Material
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Add Raw material.php">Add Raw Material</a>
            <a class="dropdown-item" href="Update Raw material.php">Update/Delete Raw Material</a>
          </div>
        </li>
  	  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Product
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Add Product.php">Add Product</a>
            <a class="dropdown-item" href="Update Product.php">Update/Delete Product</a>
          </div>
        </li>
  	   <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Employee
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="Add Employee.php">New Employee</a>
            <a class="dropdown-item" href="Update Employee.php">Update/Delete Employee</a>
          </div>
        </li>
      </ul>
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>
  <!--Slider-->
  <div id="Slider">
  <div id="headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
  <li data-target="#headerSlider" data-slide-to="1"></li>
  <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  <div class="carousel-item active">
  	<img class="d-block w-100" src="Images/Plastic injection molding service.jpg">
  <div class="carousel-caption">
  	<h5>Plastic injection service</h5>
  </div>
  </div>
  <div class="carousel-item">
  	<img  class="d-block w-100" src="Images/Plastic injection molding service(2).jpg">
  <div class="carousel-caption">
  	<h5>Plastic molding service</h5>
  </div>
  </div>
  <div class="carousel-item">
  	<img class="d-block w-100" src="Images/Workers.jpg">
  <div class="carousel-caption">
  	<h5>Human resources</h5>
  </div>
  </div>
  <div class="carousel-item">
  	<img class="d-block w-100" src="Images/Working(1).png">
  <div class="carousel-caption">
  	<h5>Machineries</h5>
  </div>
  </div>
  <div class="carousel-item">
  	<img class="d-block w-100" src="Images/Recycling.jpg">
  <div class="carousel-caption">
  	<h5>Recycle</h5>
  </div>
  </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
  </a>
  </div>
  </div>
  <!--About-->
  <section id="about">
  <div class="container">
  <div class="row">
  <div class="col-md-6">
  	<h2>About Us</h2>
  	<div class="about-content">
  		We are a small but rising company trying to come up
  		with a solution of using plastic products while through
  		recycling reducing the damage in the environment.
  	</div>
  	<!-- <button type="button"class="btn btn-primary">Read more>>
  	</button> -->
  </div>
  </div>
  </div>
  </section>
  <!--Footer-->
  <section id="Footer">
  <div class="container text-center">
  		<a class="footer-brand" href="#"><img src="Images/FMS/logo_transparent(1).png"></a>
  			Made by FMS team.
  		<!-- <button type="button"class="btn btn-primary">Read more>>
  		</button> -->
  	</div>
  </section>
</body>
</head>
</html>

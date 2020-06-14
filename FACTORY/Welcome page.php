<html>
  <head>
    <title>Welcome Page</title>
    <link rel="stylesheet" href="Welcome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

  </head>


  <body>
    <!--Navigation Bar-->
    <section id="nav-bar">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="Welcome page.php"><img src="Images/FMS/logo_transparent(1).png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Login.php">Login </a>
      </li>
    </ul>
  </div>
</nav>
    </section>
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
</html>

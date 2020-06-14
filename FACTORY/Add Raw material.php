<html>
<head>
<title>Add Raw Material</title>
<link rel="stylesheet" href="Add Raw material.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

</head>
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
  <div style="overflow-x:auto;">
    <!-- <img src="Images/avatar.png" class ="avatar"> -->
    <h1>Please Fill out the Form</h1>
    <form action="addRawmat.php" method="POST">
      <table>
        <tr>
        <td>Raw Material ID</td>
      <td><input type="number" id="name1" name="name1" placeholder="Enter Raw Material Name"></td>
    </tr>
      <tr>
        <td>Raw Material Name</td>
      <td><input type="text" id="name2" name="name2" placeholder="Enter Raw Material Name"></td>
    </tr>

<tr>
  <td>Amount in Inventory</td>
  <td><input type="number"   id="name3" name="name3" placeholder="Enter Amount"></td>
</tr>
<tr>
  <td>Cost</td>
  <td><input type="number"  id="name4" name="name4" placeholder="Enter Costing"></td>
</tr>
<tr>
  <td><button type="submit" name="submit" value="submit">Submit</button></td>
<td><button type="reset" name="reset "value="reset">Reset</button></td>
</tr>
</table>
      </form>
    </div>

</body>
</html>

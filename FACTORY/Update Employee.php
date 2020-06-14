<html>
<head>
<title>Update Employee</title>
<link rel="stylesheet" href="Update Employee.css">
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
  <div class="add_employee">
    <!-- <img src="Images/avatar.png" class ="avatar"> -->
    <h1>Employee information</h1>
    <form action= "Update Employee.php" method="POST" >
      <table>
      <tr>
        <td>Employee NID</td>
      <td><input type="text" id='name1e' name ="name1e" placeholder="Enter NID"></td>
    </tr>
    <tr>

      <td>Present Address</td>
      <td><input type="textarea" id="name2" name="name2" style="width:200px; height:150px;"></td>
    </tr>
    <tr>
      <td>Permanent Address</td>
      <td><input type="textarea" id="name3" name="name3" style="width:200px; height:150px;"></td>
    </tr>

  <td>Salary</td>
  <td><input type="number"id="name4" name="name4" placeholder="Enter Salary"></td>
</tr>
<tr>
  <td>Role</td>
  <td><input type="text"id="name5" name="name5" placeholder="Enter Role"></td>
</tr>
<tr>
  <td>Mobile No.</td>
  <td><input type="number"id="name6" name="name6" placeholder="Enter mobile number"></td>
</tr>
<tr>
  <td>Email</td>
  <td><input type="email"id="name7" name="name7" placeholder="Enter Email"></td>
</tr>
<tr>
  <td><button type="submit" name="submit" value="submit">Update</button></td>
<td><button type="reset" value="Reset">Reset</button></td>
</tr>
</table>
      </form>

      <?php
       $user='root';
$pass='';
$db='login';
$db=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
  if(isset($_POST['submit'])){
$name1q=$_POST['name1e'];
if(isset($_POST['name2']) && $_POST['name2'] != ""){

 $name2=$_POST['name2'];
 $sql= "UPDATE employee SET Paddress='$name2' WHERE Employee_NID='$name1q'";
 mysqli_query($db,$sql) or die(mysqli_error($db));


}
if(isset($_POST['name3']) && $_POST['name3'] != ""){

 $name3=$_POST['name3'];
 $sql= "UPDATE employee SET Peraddress='$name3' WHERE Employee_NID='$name1q'";
 mysqli_query($db,$sql) or die(mysqli_error($db));


}
if(isset($_POST['name4']) && $_POST['name4'] != ""){

 $name4=$_POST['name4'];
 $sql= "UPDATE employee SET Salary='$name4' WHERE Employee_NID='$name1q'";
 mysqli_query($db,$sql) or die(mysqli_error($db));


}
if(isset($_POST['name5']) && $_POST['name5'] != ""){

 $name5=$_POST['name5'];
 $sql= "UPDATE employee SET Role='$name5' WHERE Employee_NID='$name1q'";
 mysqli_query($db,$sql) or die(mysqli_error($db));


}
if(isset($_POST['name6']) && $_POST['name6'] != ""){

 $name6=$_POST['name6'];
 $sql= "UPDATE employee SET Contact_no='$name6' WHERE Employee_NID='$name1q'";
 mysqli_query($db,$sql) or die(mysqli_error($db));


}
if(isset($_POST['name7']) && $_POST['name7'] != ""){

 $name7=$_POST['name7'];
 $sql= "UPDATE employee SET Email='$name7' WHERE Employee_NID='$name1q'";
 mysqli_query($db,$sql) or die(mysqli_error($db));
}

echo "Successfully Updated!!";
}







?>
    <h3>Delete Employee</h3>

      <form action="Update Employee.php" method="POST">
<tr>
    <td><input type="number" id="name12" name ="name12" placeholder="Employee NID"></td>
<tr>
  <td><button type="submit" name="submit" value="submit">Delete</button></td>

  </tr>
</tr>
<?php
       $user='root';
$pass='';
$db='login';
$db=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

if(isset($_POST['submit'])){
$name1x=$_POST['name12'];
$sql="DELETE FROM employee WHERE Employee_NID='$name1x'";
mysqli_query($db,$sql);
echo "Deleted successfully!";
}
?>






    </div>
</body>
</html>

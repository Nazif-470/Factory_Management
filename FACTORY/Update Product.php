<html>
<head>
<title>Update Product</title>
<link rel="stylesheet" href="Update Product.css">
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
  <h1>Product List</h1>


<div style="overflow-x:auto;">
  <table>

  <tr>
    <th>Product ID</th>
    <th>Product type</th>
    <th>Name</th>
    <th>Price</th>
    <th>Amount</th>
  </tr>
   <?php
$user='root';
$pass='';
$db='login';
$db=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
  $sql = "SELECT Product_id, Product_Type, Product_Name, Price, Amount FROM product";
  $result = mysqli_query($db,$sql) or die(mysqli_error($db));
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Product_id"]. "</td><td>" . $row["Product_Type"] . "</td><td>"
. $row["Product_Name"]. "</td><td>" . $row["Price"] . "</td><td>" . $row["Amount"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }

?>
<h1> Update Product Information</h1>

<form action="Update Product.php" method="POST">

<tr>
    <td><input type="number" id="name1" name ="name1" placeholder="Prodct ID"></td>
    <td><input type="text" id="name2" name ="name2" placeholder="Product Type"></td>
    <td><input type="text" id="name3" name ="name3" placeholder="Name"></td>
    <td><input type="number" id="name4"  name ="name4" placeholder="Price"></td>
    <td><input type="number" id="name5" name ="name5" placeholder="Amount"></td>
     <td><button type="submit" name="submit" value="submit">Update</button></td>
  </tr>

</form>

<?php
$user='root';
$pass='';
$db='login';
$db=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

if(isset($_POST['submit'])){
$name1=$_POST['name1'];
$name2=$_POST['name2'];
$name3=$_POST['name3'];
$name4=$_POST['name4'];
$name5=$_POST['name5'];

$sql= "UPDATE product SET Product_Type='$name2',Product_Name='$name3',Price='$name4',Amount='$name5' WHERE Product_id='$name1'" ;
mysqli_query($db,$sql) or die(mysqli_error($db));
echo "Successfully Updated!!";



}
?>


  </table>
</div>
</body>
</html>

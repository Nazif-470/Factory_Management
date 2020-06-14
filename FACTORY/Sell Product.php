<html>
<head>
<title>Sell Product</title>
<link rel="stylesheet" href="Sell Product.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<body>

  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="Welcome Employee.php"><img src="Images/FMS/logo_transparent(1).png"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="nav-link" href="Sell Product.php">Sell Product </a>
    </li>
 
  </ul>
</div>
</nav>
  </section>
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
<h1>Sell Product</h1>

<form action="sellProd.php" method="POST">
  
<tr>
    <td><input type="number" id="name1" name ="name1" placeholder="Prodct ID"></td>
    
    <td><input type="text" id="name3" name ="name3" placeholder="Name"></td>
    
    <td><input type="number" id="name5" name ="name5" placeholder="Amount"></td>
     <td><button type="submit" name="submit" value="submit">Sell</button></td>
  </tr>

</form>


  
  
  </table>
</div>
</body>
</head>
</html>

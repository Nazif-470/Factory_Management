
<html>
<body>
<?php

$user='root';
$pass='';
$db='login';
$db=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

if(isset($_POST['submit'])){
   $name0=$_POST['name0'];
   $name1=$_POST['name1'];
   $name2=$_POST['name2'];
   $name3=$_POST['name3'];
   $name4=$_POST['name4'];

   $query= "INSERT INTO product VALUES ('name0','$name1','$name2','$name3','$name4')";
   mysqli_query($db,$query) or die(mysqli_error($db));
   echo "Product added successfully!!!";
}	

?>
</body>
</html>

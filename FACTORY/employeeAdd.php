
<html>
<body>
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
 $name6=$_POST['name6'];
 $name7=$_POST['name7'];
 $name8=$_POST['name8'];
 $name9=$_POST['name9'];
 $name10=$_POST['name10'];




              $query="INSERT INTO employee VALUES ( '$name1','$name2','$name3','$name4','$name5','$name6','$name7','$name8','$name9','$name10')";
              mysqli_query($db,$query) or die(mysqli_error($db));
              echo "Employee record added successfully!!";
}
 ?>
</body>
</html>

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

   $query= "INSERT INTO rawmat VALUES ('$name1','$name2','$name3','$name4')";
   mysqli_query($db,$query) or die(mysqli_error($db));
   echo "Raw material added successfully!!!";
}
?>
</body>
</html>

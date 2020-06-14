<html>
<body>
<?php
$user='root';
$pass='';
$db='login';
$db=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

if(isset($_POST['submit'])){
$name1=$_POST['name1'];

$name3=$_POST['name3'];

$name5=$_POST['name5'];
$sq= "SELECT Amount from product WHERE Product_id='$name1'";
$res= mysqli_query($db,$sq);


$row = mysqli_fetch_array($res,MYSQLI_NUM);

$res1= $row[0];




if($name5>$res1){
  echo "Amount exceeds that is in inventory sorry!";
  exit();

}
else{
 $res2= $res1-$name5;

$sql= "UPDATE product SET Amount='$res2' WHERE Product_id='$name1'" ;
mysqli_query($db,$sql) or die(mysqli_error($db));
echo "Successfully Updated!!";



}

}
?>
</body>
</html>
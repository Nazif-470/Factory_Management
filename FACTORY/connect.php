 
 <html>
<body>
 <?php
$user='root';
$pass='';
$db='login';
$db=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");


if(isset($_POST['username'])){
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    echo "HELLO!";

    if($username=="admin"){
        if($password=="12345"){

        	echo "YOU ARE AN ADMIN!";
        	include 'Welcome Admin.php';
        	 
        }
     }

     else{

    $query="SELECT * FROM logintable WHERE user='$username' AND pass='$password'";
    
    $result=mysqli_query($db,$query);

    
    if(mysqlI_num_rows($result)==1){
        echo " You Have Successfully Logged in as an Employee!";

        include 'Welcome Employee.php';
        
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
}







?> 
</body>
</html>

<?php

$cn=mysqli_connect("localhost","root","");
mysqli_select_db($cn,"ufeedback");
include 'functions.php';
if(isset($_POST['t5']))
{
$name = protect($cn,$_POST["t1"]);
$email = protect($cn,$_POST["t2"]);
$contact = protect($cn,$_POST["t3"]);
$password = protect($cn,$_POST["t4"]);


$x=mysqli_query($cn,"select * from reguser where email='$email'");
$n=mysqli_num_rows($x);
	
	if ($n>0) 
			{
		echo '<script type="text/javascript">'; 
		echo 'alert("The username you entered already exist please try with another username");'; 
		echo 'window.location.href = "uregg.php";';
		echo '</script>';
			}
			
		
	else 
	{
	   
		$x=mysqli_query($cn,"insert into reguser(fullname,email,phoneno,password)values('$name','$email','$contact','$password')");
		mysqli_query($cn,$x);
		$_SESSION['name']=$name;
        echo '<script type="text/javascript">'; 
		echo 'alert("You\'ve been successfully registered, please login with your emailID and password");'; 
		echo 'window.location.href = "ulogin1.php";';
		echo '</script>';
	
	}
     
 
}		
?>
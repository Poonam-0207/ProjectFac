<?php

$cn=mysqli_connect("localhost","root","");
mysqli_select_db($cn,"ufeedback");
//include 'functions.php';
if(isset($_POST["reg"]))
{
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t3"];
$d=$_POST["t4"];

$x=mysqli_query($cn,"select * from registeration where Email='$b'");
$n=mysqli_num_rows($x);
	
	if ($n>0) 
			{
		echo '<script type="text/javascript">'; 
		echo 'alert("The username you entered already exist please try with another username");'; 
		echo 'window.location.href = "regg.php";';
		echo '</script>';
			}
			
		
	else 
	{
	   
		$x=mysqli_query($cn,"insert into registeration(FullName,Email,PhoneNo,Password)values('$a','$b','$c','$d')");
		mysqli_query($cn,$x);
	//	$_SESSION['FullName']=$FullName;
        echo '<script type="text/javascript">'; 
		echo 'alert("You\'ve been successfully registered, please login with your emailID and password");'; 
		echo 'window.location.href = "loginn.php";';
		echo '</script>';
	
	}
     
 
}		
?>
<?php
$cn=mysqli_connect("localhost","root","");
mysqli_select_db($cn,"ufeedback");
include 'functions.php';
if(isset($_POST['feed']))
{
$name = protect($cn,$_POST["t1"]);
$email = protect($cn,$_POST["t2"]);
$phone = protect($cn,$_POST["t3"]);
$message = protect($cn,$_POST["t4"]);
$radio = protect($cn,$_POST["a1"]);
$x=mysqli_query($cn,"insert into feedback(rate,FullName,Email,PhoneNumber,Message)values('$radio','$name','$email','$phone','$message')");
		mysqli_query($cn,$x);
		$_SESSION['FullName']=$name;
        echo '<script type="text/javascript">'; 
		echo 'alert("feedback successfull");'; 
		echo 'window.location.href = "feedback1.php";';
		echo '</script>';
	
}
     
 
		
?>
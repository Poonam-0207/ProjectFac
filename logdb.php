<?php
session_start();
include 'functions.php';
$cn=mysqli_connect("localhost","root","");
mysqli_select_db($cn,"ufeedback");
if(isset($_POST["login"]))	
{
$a=protect($cn,$_POST["t1"]);
$b=protect($cn,$_POST["t2"]);
$x=mysqli_query($cn,"select * from registeration where Email='$a' and Password='$b'");
$n=mysqli_num_rows($x);
if($n>0)
{
	while($row=mysqli_fetch_array($x))
	{
		$_SESSION["id"]=$row["id"];
		$_SESSION["FullName"]=$row["FullName"];
		$login_session=$row["FullName"];
	}
}
if($n>0){
	header("location:home.php");
}
else
{
        echo '<script type="text/javascript">'; 
		echo 'alert("Invalid username or password");'; 
		echo 'window.location.href = "loginn.php";';
		echo '</script>';
}
}
?>

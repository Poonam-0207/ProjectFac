<html>
<head>
<title>View page</title>
<style>
.c{
margin-left:18%;
margin-right:auto;
margin-bottom:45%;

}
.bg-img{
margin:auto;
width:60%;
padding:10px;

}
.B{
margin-top:12%;
color:white;
font-size:50px;
font-style:italic;
font-family:arial;
margin-left:10%;

}
.name{
margin-right:50%;

}
.D{
margin:auto;
margin-left:164%;
font-size:120%;
border-radius:3%;
}
.E{
font-size:40px;
border-radius:15px;
margin-right:10%;

}
input[type=file]::file-selector-button {
  margin-right: 15px;
  border: black;
  background: cadetblue;
  padding: 15px 20px;
  border-radius: 20px;
  color: #fff;
  cursor: pointer;
  transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
  background: #0d45a5;
}
.menu
{

gap:1em;
font-size:20px;
background-color:crimson;
height:5%;
width:100%;
color:gainsboro;
}
.C{
text-decoration:none;
color:white;

width:50px;
}
</style>
</head>

<body style="background-color:darkcyan">
<div class="menu">
<a href="home.php" class="C">Home</a>
 <a href="view.php" class="C">Fruits</a>
  <a href="Veg.php" class="C">Vegetables</a>
   <a href="Skin.php" class="C">Skin-Care</a>
   <a href="logout.php" class="C">Logout</a>
   </nav>
   <?php

session_start();
 if(!isset($_SESSION['name']))	{
	session_destroy(); 
	
	header('Location:loginn.php');
}

echo '<br> Hello ' .$_SESSION['name'];
?>
<form method="POST" action="updateproductdb.php" enctype="multipart/form-data">
<?php
			
		$cn=mysqli_connect("localhost","root","");
		mysqli_select_db($cn,"student");
		if(isset($_GET['id'])){
		$id=$_GET['id'];
		
		$res=mysqli_query($cn,"select * from product  where id=$id");
        
					while($data=mysqli_fetch_array($res))
					{
					
				?>
<div class="bg-img">
<center><h1 class="B">PRODUCT DETAILS</h1></center>
<b>
<div class="C">
<input type="hidden" name="t13" height="20px" width="20px" value='<?php echo $data['id']; ?>'>
 <input type="hidden" class="E" name="t1" value="fruit"  size="30"/> 
<h5>Product Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" class="E" name="t2"  size="30" value='<?php echo $data['pname']; ?>'/>
<br>
Product Information:<input type="text" name="t3" class="E" size="30" value='<?php echo $data['pdescription']; ?>'/>
<br>
Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="t4" class="E" size="30" value='<?php echo $data['pprice']; ?>'/>
<br>
<br>


File Upload:<input type="file" name="t5" value='<?php echo $data['pimg']; ?>'/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<br>
<br>
<input type="submit" class="D" value="Save" name="ufruit"/>


</div>
<?php
}
}


?>
</form>
</div>
</body>
</html>
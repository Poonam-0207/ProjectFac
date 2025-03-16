<?php
$cn=mysqli_connect("localhost","root","");
mysqli_select_db($cn,"ufeedback");
include 'functions.php';
if(isset($_POST['fruit']))
{

$target_path = "product/";
$target_filepath = $target_path . basename($_FILES["t5"]["name"]);
$imageFileType = strtolower(pathinfo($target_filepath,PATHINFO_EXTENSION));
$a = protect($cn,$_POST["t1"]);
$b = protect($cn,$_POST["t2"]);
$c = protect($cn,$_POST["t4"]);
$d = protect($cn,$_POST["t3"]);

 
 //$barcode = "";  
 
 //foreach($barcode1 as $chkNew1)  
   //{  
     // $barcode .= $chkNew1 . ",";  
   //}  ......
$allowedTypes = array("jpg","png","jpeg");
$filesize=$_FILES["t5"]["size"];
$maxsize = 3 * 1024 * 1024; 
 if ($filesize>$maxsize)  
{
echo '<script type="text/javascript">'; 
echo 'alert("product has been successfully insereted");'; 
echo 'window.location.href = "view.php";';
echo '</script>';   

}else{
move_uploaded_file($_FILES["t5"]["tmp_name"],$target_filepath);
$x=mysqli_query($cn,"insert into product(ptype,pname,pprice,pdescription,pimg)values('$a','$b','$c','$d','$target_filepath')");
if($x==1){
	
	echo '<script type="text/javascript">'; 
echo 'alert("product has been successfully insereted");'; 
echo 'window.location.href = "view.php";';
echo '</script>';    
}
}
}
?>
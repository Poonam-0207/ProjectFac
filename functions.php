<?php
function input_value($cn,$str){
if($str!=''){
$str=trim($str);
return mysqli_real_escape_string($cn,$str);
	}
}
function protect($cn,$string){
if($string!=''){

$string=trim($string);
$string=strip_tags($string);
$string=addslashes($string);
return mysqli_real_escape_string($cn,$string);
   }
}


?>
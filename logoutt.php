<?php
session_start();

   if(SESSION_DESTROY()) 
   {
      header("Location:login.php");
   }
?>
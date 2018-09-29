<?php
   require 'kgcon.php';
   session_start();


   $user_check = $_SESSION['admin_in'];
   $ses_sql = mysqli_query($con,"SELECT username and password FROM admins where  username = '$user_check' ");
   $row = mysqli_fetch_array ($ses_sql,MYSQLI_ASSOC);



       if(!isset($_SESSION['admin_in'])){
      header("location:adminlogin.php");
   }
?>

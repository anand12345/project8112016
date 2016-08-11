<?php
     session_start();  //Session start
    $username=$_POST['username'];
     $password=$_POST['password'];

//Checking Admin Username and Password
   if($username=='pv_sons' && $password=='pv@sons_2016')
        {
         $_SESSION['LoggedIn']='Yes';     
         $_SESSION['Admin_name']='Admin';
         $url="Location:index.php" ;
         header($url);   
        exit;
        }    
   $problem="";

  if($username !='pv_sons' OR $password !='pv@sons_2016')
   {
    $problem="Invalid Username or Password";
    }
    $url="Location:admin_login.php?problem=$problem" ;
    header($url);    
    exit;  
?>
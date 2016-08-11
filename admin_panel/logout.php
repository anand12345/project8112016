<?php    
           @ob_start();
           session_start();
           session_destroy();            
     ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PV Sons | Logout</title>

    <!-- Bootstrap Core CSS -->
    <link href="../dist/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/logout.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

</head>
    
    <body>
        
        <div class="container logout">
         
        <h3>You have successfully Logged Out </h3>
        <a href="admin_login.php">Log In </a>
            
        </div>
        

    
    
        <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
         <!-- jQuery -->
    <script src="js/jquery-1.11.2.min.js"></script>
        
   </body>
    
</html>
        
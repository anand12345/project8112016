   <?php
          if (isset($_GET["problem"]))
            {
               $problem=$_GET["problem"];
               echo $problem; 
              
             }
       ?>
<html>
    <head>
<link href="css/admin_login.css" rel="stylesheet"/>
<title>PV Sons</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    </head>
    <body>
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="../images/pv_sons.png">
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="<?php echo htmlspecialchars("admin_authenticate.php");?>"  method="post">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>

                <button class="btn btn-lg  btn-block btn-signin" type="submit" name="submit">Sign in</button>
            </form><!-- /form -->
 
        </div><!-- /card-container -->
    </div><!-- /container -->
        
        </body>
</html>


<?php
         session_start();
         if(!$_SESSION['LoggedIn'])
           {
                 header("location:admin_login.php?problem='Not Logged In'");
                     exit;
         }

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PV Sons | Admin Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="../dist/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

</head>
    
<body>
    
    <div class="container admin_panel_div">

        
        
      <div id="admin_banner">
          <h4>Welcome Admin</h4>
          <a href="logout.php">Logout</a>
      </div>
        
        
  <ul class="nav nav-tabs nav-justified" id="nav_tabs_div">
    <li class="active"><a data-toggle="tab" href="#home">Submitted Forms</a></li>
    <li><a data-toggle="tab" href="#menu1">Equiries</a></li>

  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
                   <div class="table-responsive">
                <table class="table table-bordered info_table">
                    <tr>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Area of Expertise</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>ExperienceInYears</th>
                        <th>ExperienceInMonths</th>
                        <th>Organisation</th>
                        <th>Current Annual Salary</th>
                        <th>Notice Period</th>
                        <th>Resident Country</th>
                        <th>Preferred Location</th>
                        <th>Uploaded Documents</th>



                    </tr>

                    <tbody id="student_list">
    <?php

      include_once("../database/connection.php");
                        $sql="SELECT * FROM recruitment_forms";
                        $result = mysqli_query($con,$sql);
                        $sr_no=1;
                        while($row = mysqli_fetch_array($result)) 
                        {
                            $emp_area_of_expertise=$row['emp_area_of_expertise'];
                            $emp_name=$row['emp_name'];
                            $emp_lastname=$row['emp_lastname'];
                            $emp_mobile=$row['emp_mobile'];
                            $emp_email=$row['emp_email'];
                            $emp_ExperienceInYears=$row['emp_ExperienceInYears'];
                            $emp_ExperienceInMonths=$row['emp_ExperienceInMonths'];     
                            $emp_organisation=$row['emp_organisation'];
                            $emp_current_annual_salary=$row['emp_current_annual_salary'];
                            $emp_Currency=$row['emp_Currency'];
                            $emp_notice_period=$row['emp_notice_period'];
                            $emp_resident_country=$row['emp_resident_country'];            
                            $emp_preferred_location=$row['emp_preferred_location'];   
                           
                            
                            echo "<tr><td>$sr_no</td>";
                            echo "<td>$emp_name $emp_lastname</td>";
                            echo "<td>$emp_area_of_expertise</td>";
                            echo "<td>$emp_mobile</td>";
                            echo "<td>$emp_email</td>";
                            echo "<td>$emp_ExperienceInYears</td>";
                            echo "<td>$emp_ExperienceInMonths</td>";
                            echo "<td>$emp_organisation</td>";
                            echo "<td>$emp_current_annual_salary $emp_Currency</td>";
                            echo "<td>$emp_notice_period</td>";
                            echo "<td>$emp_resident_country</td>";
                            echo "<td>$emp_preferred_location</td>";
                            echo "<td><a href='../recruitment_resume_uploads/$emp_email' target='_blank'>document view</a></td>";    
                             $sr_no++;                      
                            }
                 
        
                        ?>
                                               
                                                
</tbody>

</table>
                    
                </div>
        
                 <a href="export_excel.php" >
                                  <button type="button" class="btn btn-lg button">Export To Excel</button>
                               </a>
    </div>
    <div id="menu1" class="tab-pane fade">
     <div class="table-responsive">
                <table class="table table-bordered info_table">
                    <tr>
                        <th>Sr No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Message</th>
                   



                    </tr>

                    <tbody id="student_list">
    <?php

      include_once("../database/connection.php");
                        $sql1="SELECT * FROM contact_msg";
                        $result1 = mysqli_query($con,$sql1);
                        $sr_no=1;
                        while($row1 = mysqli_fetch_array($result1)) 
                        {
                            $name=$row1['name'];
                            $email=$row1['email'];
                            $contact_mobile=$row1['contact_mobile'];
                            $contact_address=$row1['contact_address'];
                            $message=$row1['message'];
                            
                           
                            
                            echo "<tr><td>$sr_no</td>";
                            echo "<td>$name</td>";
                            echo "<td>$email</td>";
                            echo "<td>$contact_mobile</td>";
                            echo "<td>$contact_address</td>";
                            echo "<td>$message</td>";
                          
                             $sr_no++;                      
                            }
                            mysqli_close($con);
        
                        ?>
                                               
                                                
</tbody>

</table>
                    
                </div>
        
                 <a href="export_excel2.php">
                                  <button type="button" class="btn btn-lg button">Export To Excel</button>
                               </a>
    </div>
 
  </div>

                        

           
  
    </div>
    
    

  <div class="navbar navbar-default navbar-fixed-bottom" id="bottom_footer">
    <div class="container">
      <p class="navbar-text pull-right">Handcrafted by <a href="http://resoneuronance.com" target="_blank">Team Resoneuronance</a>
      </p>
    </div>
    </div>

                        
                    
             <!-- jQuery -->
    <script src="../dist/jquery-1.9.1.min.js"></script>
   
    <!-- Bootstrap Core JavaScript -->
    <script src="../dist/bootstrap/js/bootstrap.min.js"></script>

                
    





</body>


    
</html>
    
    
    
    
    

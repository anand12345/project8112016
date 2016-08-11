<?php
      if(isset($_POST['contact_submit']))
      {
          $contact_name =test_input($_POST['contact_name']);
          $contact_email =test_input($_POST['contact_email']);
          $contact_mobile =test_input($_POST['contact_mobile']);
          $contact_address =test_input($_POST['contact_address']);
          $contact_message =test_input($_POST['contact_message']);
          
          include_once("database/connection.php");
          
      $sql="INSERT INTO contact_msg( name, email,contact_mobile,contact_address, message) VALUES ('$contact_name','$contact_email','$contact_mobile','$contact_address','$contact_message')";
          
          

      if(mysqli_query($con,$sql))
      {
          
                echo "<script>
          window.location = 'index.html';
          </script>";
       }else{
                  echo "<script>
          window.location = 'index.html';
          </script>";
       }
          
      }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
      
      ?>
<?php

if(isset($_POST['emp_form_submit']))
{

include_once("database/connection.php");

    $emp_area_of_expertise =test_input($_POST['emp_area_of_expertise']);
    $emp_name =test_input($_POST['emp_name']);
    $emp_lastname =test_input($_POST['emp_lastname']);
    $emp_email =test_input($_POST['emp_email']);
    $emp_mobile =test_input($_POST['emp_mobile']);
    $emp_ExperienceInYears =test_input($_POST['emp_ExperienceInYears']);
    $emp_ExperienceInMonths =test_input($_POST['emp_ExperienceInMonths']);
    $emp_organisation =test_input($_POST['emp_organisation']);
    $emp_current_annual_salary =test_input($_POST['emp_current_annual_salary']);
    $emp_Currency =test_input($_POST['emp_Currency']);
    $emp_notice_period =test_input($_POST['emp_notice_period']);
    $emp_resident_country =test_input($_POST['emp_resident_country']);
    $emp_preferred_location =test_input($_POST['emp_preferred_location']);


    

    
    
    
$target_dir = "recruitment_resume_uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


    // Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
       echo "<script>
          window.location = 'recruitment-form.php?success=0&notice=Sorry, your file is too large.';
          </script>";
        exit();
}
    
// Allow certain file formats
if($imageFileType != "docx" && $imageFileType != "doc" && $imageFileType != "pdf" ) {
       echo "<script>
          window.location = 'recruitment-form.php?success=0&notice=Sorry, only docx, doc and pdf are allowed.';
          </script>";
        exit();
}else 
{
   
        if (!file_exists("recruitment_resume_uploads/$emp_email")){
           mkdir("recruitment_resume_uploads/$emp_email");
           }
       
		if(!move_uploaded_file($_FILES['fileToUpload']['tmp_name'], "recruitment_resume_uploads/$emp_email/" . $_FILES['fileToUpload']['name']))
        {
               echo "<script>
          window.location = 'recruitment-form.php?notice=Error in uploading files.';
          </script>";
               exit();
		}  
    
}

    
        $sql = "INSERT INTO recruitment_forms( emp_area_of_expertise, emp_name, emp_lastname, emp_mobile, emp_email, emp_ExperienceInYears, emp_ExperienceInMonths, emp_organisation, emp_current_annual_salary, emp_Currency, emp_notice_period, emp_resident_country, emp_preferred_location) VALUES ('$emp_area_of_expertise','$emp_name','$emp_lastname','$emp_mobile','$emp_email','$emp_ExperienceInYears','$emp_ExperienceInMonths','$emp_organisation','$emp_current_annual_salary','$emp_Currency','$emp_notice_period','$emp_resident_country','$emp_preferred_location')";
        

        
        if (mysqli_query($con, $sql))
        {
            
             echo "<script>
          window.location = 'recruitment-form.php?success=1';
          </script>";
      
        }else 
            {
                 echo "<script>
          window.location = 'recruitment-form.php?success=0';
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
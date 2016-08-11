<!doctype html>
<html lang="en-gb" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>PV Sons - Careers</title>
    <link rel="icon" href="images/favicon.ico">
    <meta name="description" content="">
    <meta name="author" content="">
    
  <!-- Material Design fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!-- Bootstrap -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

 
  <!-- Bootstrap Material Design -->
  <link href="dist/material/dist/css/bootstrap-material-design.css" rel="stylesheet">
  <link href="dist/material/dist/css/ripples.min.css" rel="stylesheet">
    <link href="js/jquery.dropdown.css" rel="stylesheet">
 
    <!--    CUSTOM CSS -->
    <link rel="stylesheet" href="css/recruitment.css" />
    <!-- Font Awesome -->
    <link href="dist/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <!--    Google Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Candal' rel='stylesheet' type='text/css'>
</head>

<body>
    
    
        <?php
    
if(isset($_GET['success']))
{
    
    $success1=$_GET['success'];
    
    if($success1==0)
    {
      echo "<div class='alert alert-dismissible alert-danger'>
  <a href='recruitment-form.php' id='notify_link' class='navbar-right'>×</a>
  <strong>Alert! </strong>Error in submitting form.
</div>";
    }else{
             echo "<div class='alert alert-dismissible alert-success'>
  <a href='recruitment-form.php' id='notify_link' class='navbar-right'>×</a>Form submitted.
</div>"; 
    }
}
        
        
if(isset($_GET['notice']))
{
    $notice1=$_GET['notice'];
    echo "<div class='alert alert-dismissible alert-danger'>
  <a href='recruitment-form.php' id='notify_link' class='navbar-right'>×</a>
  <strong>Alert!$notice1.</strong>
</div>";

}
    
?>


        <div class="container" id="main_div">
                    <img src="images/careers-applynow.jpg" class="img-responsive career_banner_img" alt="career_banner"/>

<div  id="reg_form">
<h2 id="reg_form_title">Fill in your details to apply.</h2>
<p class="mandat_txt">Fields marked with <span id="notice_span">*</span> are mandatory</p>

<form role="form" method="post" action="form_registration_confirm.php" id="form1" enctype="multipart/form-data" name="form">
    <div class="row">        
        <div class="col-md-4">
            <label for="emp_area_of_expertise" class="label1">Area of Expertise <span id="notice_span">*</span></label>
        </div>
        <div class="col-md-6">
             <input type="text" class="form-control" id="emp_area_of_expertise" name="emp_area_of_expertise"  required>
        </div>
    </div>
    
<div class="row">
    <div class="col-md-4">
        <label for="emp_name" class="label1">First Name: <span id="notice_span">*</span></label>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control" id="emp_name" name="emp_name" pattern="[a-zA-Z]+" title="Only Enter Letters"  required>
    </div>
</div>

<div class=" row">
    <div class="col-md-4">
        <label for="emp_lastname" class="label1">Last Name: <span id="notice_span">*</span></label>
    </div>
    <div class="col-md-6">
        <input type="text" class="form-control col-md-6" id="emp_lastname" name="emp_lastname" pattern="[a-zA-Z]+" title="Only Enter Letters" required>
    </div>
</div>
    
<div class=" row">
    <div class="col-md-4">
        <label for="emp_email" class="label1">Email Id: <span id="notice_span"> *</span></label>
    </div>
    <div class="col-md-6">
        <input type="email" class="form-control" id="emp_email" name="emp_email" title="your email address" required>
    </div>
</div>
            
<div class="row">
    <div class="col-md-4">
        <label for="emp_mobile" class="label1">Contact Number: <span id="notice_span">*</span></label>
    </div>
    <div class="col-md-6">
        <input type="tel" class="form-control" id="emp_mobile" name="emp_mobile" pattern="[1-9]{1}[0-9]{9}" title="Enter 10 Digit Mobile No." maxlength="10" required>
    </div>
</div>
    
<div class="row">
    <div class="col-md-4">
        <label for="emp_ExperienceInYears" class="label1">Experience : <span id="notice_span">*</span></label>
    </div>
    <div class="col-md-3">
         <select class="form-control select" name="emp_ExperienceInYears" id="emp_ExperienceInYears" required>
		<option value="0">Select Year</option>
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
		<option value="31">31</option>
		<option value="32">32</option>
		<option value="33">33</option>
		<option value="34">34</option>
		<option value="35">35</option>
		<option value="36">36</option>
		<option value="37">37</option>
		<option value="38">38</option>
		<option value="39">39</option>
		<option value="40">40</option>

	</select>

    </div>
        <div class="col-md-3">
                  <select class="form-control select" name="emp_ExperienceInMonths" id="emp_ExperienceInMonths" required>
		<option value="0">Month</option>
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>

	</select>

    </div>
</div>


<div class="row">
    <div class="col-md-4">
        <label for="emp_organisation" class="label1">Current Organisation: <span id="notice_span">*</span></label>
    </div>
    <div class="col-md-6">
        <input class="form-control" id="emp_organisation" type="text" name="emp_organisation" required>
    </div>

</div>
    
<div class="row">
    <div class="col-md-4">
        <label for="emp_current_annual_salary" class="label1">Current Annual Salary : <span id="notice_span">*</span></label>
    </div>
    <div class="col-md-3">
        <input class="form-control" id="emp_current_annual_salary" type="number" name="emp_current_annual_salary" required>
    </div>
    <div class="col-md-3">
        <select class="form-control select" name="emp_Currency" id="emp_Currency" required>
		<option value="Rupees">Rupees</option>
        </select>
    </div>
</div>

    
<div class="row">
    <div class="col-md-4">
        <label for="emp_notice_period" class="label1">Notice Period : <span id="notice_span">*</span></label>
    </div>
    <div class="col-md-6">
        <select class="form-control select" name="emp_notice_period" id="emp_notice_period" required>
            <option value="Immediate">Immediate</option>
            <option value="15 Days">15 Days</option>
            <option value="1 Month">1 Month</option>
            <option value="2 Months">2 Months</option>
            <option value="3 Months">3 Months</option>
            <option value="more than 3 Months">&gt;3 Months</option>

        </select>
    </div>
</div>
    
    <div class="row">
    <div class="col-md-4">
        <label for="emp_resident_country" class="label1">Resident Country : <span id="notice_span">*</span></label>
    </div>
    <div class="col-md-6">
        <select class="form-control select" name="emp_resident_country" id="emp_resident_country" required>
            <option value="India">India</option>
            <option value="Other Country">Other Country</option>
        </select>
    </div>
</div>
    
    
    <div class="row">
    <div class="col-md-4">
        <label for="emp_preferred_location" class="label1">Preferred Location : <span id="notice_span">*</span></label>
    </div>
    <div class="col-md-6">
        <select class="form-control select" name="emp_preferred_location" id="emp_preferred_location" required>
            <option value="Pune">Pune</option>
            <option value="Other">Other</option>
        </select>
    </div>
</div>
    
<div class="row">
    <div class="col-md-4">
        <label for="fileToUpload" class="label1">Upload Your Resume : <br/> (DOCX, DOC, PDF) <span id="notice_span">*</span></label>
    </div>
    <div class="col-md-6">
<!--            <input name="fileToUpload"  id="fileToUpload" type="file" class="form-control file_inputs_multiple" required>-->
     <div class="form-group">
  <input type="file" name="fileToUpload"  id="fileToUpload" multiple="" required>

  <div class="input-group">
    <input type="text" readonly="" class="form-control" placeholder="Upload Resume">
    <span class="input-group-btn input-group-sm">
      <button type="button" class="btn btn-fab btn-fab-mini">
       <i class="fa fa-cloud-upload" aria-hidden="true"></i>
      </button>
    </span>
  </div>
        </div>
        
        
    </div>
</div>


<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-6">
                <button type="submit" class="btn btn-raised btn-info" name="emp_form_submit">Submit</button>
         <button type="reset" class="btn btn-raised btn-info"  name="emp_form_reset">Reset</button>
    </div>

    </div>
            </form>


        </div>

    </div>
        <div class="footer">
            <p>Handcrafted by <a href="http://resoneuronance.com" target="_blank">Team Resoneuronance</a></p>
        </div>

  




    
   
    
    <script src="dist/jquery-1.9.1.min.js" type="text/javascript"></script> 
<script src="dist/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
    <script src="dist/material/dist/js/material.min.js"></script>
<script src="dist/material/dist/js/ripples.min.js"></script>
    <script src="js/jquery.dropdown.js"></script>

<script>
    $.material.init();
    
    $(document).ready(function() {
        $(".select").dropdown({"optionClass": "withripple"});
      });

      $().dropdown({autoinit: "select"});


 
    </script> 
</body>
</html>
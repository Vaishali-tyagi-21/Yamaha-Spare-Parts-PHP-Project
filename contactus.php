
	<!DOCTYPE html>
	<html>
	<head>
	<title>Yamaha</title>
	<link href="Resources/css.css" rel="stylesheet" type="text/css">
	<style>
/* Add this to your CSS file (Resources/css.css) */
.form-border {
    border: 2px solid #3498db; /* Change the border color to a shade of blue */
    border-radius: 10px; /* Add rounded corners to the form */
    padding: 20px; /* Increase the padding for more space inside the form */
    background-color: #f2f2f2; /* Add a light gray background color */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a subtle shadow to the form */
}

.form-border input,
.form-border textarea {
    width: 100%; /* Make input and textarea fields full width */
    padding: 10px; /* Increase padding for input fields */
    margin-bottom: 15px; /* Add spacing between form fields */
    border: 1px solid #ccc; /* Add a border to input and textarea fields */
    border-radius: 5px; /* Add rounded corners to input and textarea fields */
}

.form-border input:focus,
.form-border textarea:focus {
    border: 1px solid #3498db; /* Change border color on focus */
    outline: none; /* Remove the outline on focus for better aesthetics */
}

.form-border button[type="submit"] {
    background-color: #3498db; /* Set the background color for the submit button */
    color: #fff; /* Set text color to white */
    border: none; /* Remove the button border */
    padding: 10px 20px; /* Add padding to the button */
    border-radius: 5px; /* Add rounded corners to the button */
    cursor: pointer; /* Change cursor style on hover */
}

.form-border button[type="submit"]:hover {
    background-color: #2980b9; /* Change button background color on hover */
}

.sub_frame{
	background-color: #2980b9;
}

/* Add any additional styles as needed */

	</style>
	</head>
	<body>
    
	<!-----------------Wrapper----------------->
    
	<div id="wrapper"> 
    
	<!-----------------Header & Navigation Bar----------------->
    
<?php
	include('header.php');
?>
     <!----------------- main frame----------------->
	<div id="mainframe">
 	<div class="sub_frame" style="width:100%">
    <h3>Contact Us</h3>
	<p>
    <div class="row"> 
	<div class="col_3">
	

	<!-----------------Contact us form----------------->
    
	<div class="container" >
	<h3>Message Us</h3>
    <hr>
	<form name="ContactForm" method="post" class="form-border" action="https://formspree.io/f/mpzgnqzl">
	<br>
	<input type="text" name="txtFullname" id="txtFullname" placeholder="Full name" required>
	<br>
	<br>
	<input type="email" name="_replyto" value="cturwash@gmail.com">
	<br>
    <br>
	<input type="text" name="txtSubject" id="txtSubject" placeholder="Subject" required>
	<br>
	<br>
	<textarea name="txtaMessage" id="txtaMessage" placeholder="Your Message...." required minlength="10" maxlength="800"></textarea>
	<br>
	<br>
	<p><input name="Send Message" type="submit" id="Send Message" value="Send Message" onClick="sendFormData();"></p>

	</form>
	</div>
    
    </div>
       	<div class="col_3">
        <h3> Our Place</h3>
        
        <img src="Resources/designimages/Service_Center.jpg" alt="Colombo Store " style="width:550px;height:400px">
</div> 

    
        </div>
	</div>
    <div class="clear"></div>
	<!-----------------Footer----------------->
	<?php include('Resources/footer.php');?>
	</div>
	</div>
    <script src="Resources/js.js"></script>	
</body>
	</html>
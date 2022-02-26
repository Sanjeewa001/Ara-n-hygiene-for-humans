<html>
<head>
	<title> Give us your opinion </title>
	<link rel="stylesheet" href="./css/signup.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	
		
		body {
  background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url('1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
	</style>
</head>
<body>
<?php
    require('backend/db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $First_name = stripslashes($_REQUEST['First_name']);
        //escapes special characters in a string
       $First_name = mysqli_real_escape_string($con, $First_name);
        $Last_name    = stripslashes($_REQUEST['Last_name']);
        $Last_name    = mysqli_real_escape_string($con, $Last_name);
        $Gender = stripslashes($_REQUEST['Gender']);
        $Gender = mysqli_real_escape_string($con, $Gender);
        $E_mail = stripslashes($_REQUEST['E_mail']);
        $E_mail = mysqli_real_escape_string($con, $E_mail);
        $Massage = stripslashes($_REQUEST['Massage']);
        $Massage = mysqli_real_escape_string($con, $Massage);

        $query    = "INSERT into `idea` (First_name,Last_name,Gender,E_mail,Massage)
                     VALUES ('$First_name', '$Last_name','$Gender', '$E_mail','$Massage')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Your Massage was recived.</h3><br/>
                  <p class='link'>Would you like to make a <strong>Donation</strong> <a href='purewater.html'>Donate</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='backend/registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<form class="form" method="post" name="Ideas">
    <h1>Ideas</h1>
    <input type="text" name="First_name" placeholder="First Name">
	<input type="text" name="Last_name" placeholder="Last Name">
	<input type="text" name="Gender" list="Gender" placeholder="Gender">
	<datalist id="Gender">
		<option>Male</option>
		<option>Female</option>
	</datalist>
	<input type="text" name="E_mail" placeholder="Email">
	<input type="text" name="Massage" placeholder="your comment..">
	<button type="submit">Send Comment</button>
</form>
<?php
    }
?>
<!-- footer area -->
    <footer class="footer-distributed">

        <div class="footer-left">

            <h3>
                <a href="index.html"><img src="2.png" style="width:100px;height:110px;"></a>
            </h3>

            <p class="footer-links">
                <a href="index.html">Home</a> ·
                <a href="Target.html">Targets and Indicators</a> ·
                <a href="about.html">Overviewe</a> ·
                <a href="news.html">Progress and Informations</a> ·

            </p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p> The Universe,<br> 1st Street, Colombo, <br> Sri Lanka</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>(+94) 11 115 12 45</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:support@company.com">ara'n_hygiene@gmail.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the Organization </span> This is a information base website based on of Single Goal of Sustainability Development Goals, so in this project we mainly focused on the people who want to get information regarding SDG Goal 06  </p>

            <div class="footer-icons">

                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="https://github.com/Sanjeewa001/Ara-n-hygiene-for-humans"><i class="fa fa-github"></i></a>

            </div>
        </div>
    </footer>
</body>

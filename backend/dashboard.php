<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  padding: 10px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
  background: white;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color: #f1f1f1;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #888;
  width: 100%;
  padding: 20px;
  border-radius: 25px;
  border: 3px solid burlywood;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
  border-radius: 15px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
  border-radius: 15px 50px 30px;
  padding: 20px; 
  
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>User dashboard</h1>
  <p>Welcome to Pure Water organization<div style="Color:blue"> <?php echo $_SESSION['username']; ?>.</p></div>
  
</div>

<div class="topnav">
  <a href="../purewater.html">Home 🌐</a>
  <!--<a href="#">Link</a>
  <a href="#">Link</a> -->
  <a href="logout.php" style="float:right">Log Out ➡️</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Water & Sanitation</h2>
      <h5>Created, feb 2, 2022</h5>
      <div class=""><img src ="../img/cleanwater.png" width="1000" height="500"></div>
      <h3>Water</h3>
      <p>Today, 2 billion people lack access to safely managed drinking water services and 3.6 billion people lack safely managed sanitation services. Unsafe hygiene practices are widespread, compounding the effects on people’s health. The impact on child mortality rates is devastating with more than 700 children under five who die every day from diarrhoeal diseases due to poor sanitation, poor hygiene, or unsafe drinking water.</p>
      <h3>Sanitation</h3>
      <p>Without improved sanitation – a facility that safely separates human waste from human contact – people have no choice but to use inadequate communal latrines or to practise open defecation. For women and girls, finding a place to go to the toilet outside, often having to wait until the cover of darkness, can leave them vulnerable to abuse and sexual assault.
      In the immediate environment, exposed faecal matter will be transferred back into people’s food and water resources, helping to spread serious diseases such as cholera. Beyond the community, the lack of effective waste disposal or sewerage systems can contaminate ecosystems and contribute to disease pandemics.</p>
      <h3>
    <a href="http://sdg.iisd.org/sdgs/goal-6-clean-water-sanitation/" target="_blank">Learn More</a>
    </h3>
    </div>
    
    
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Logs</h2>
      <div class="fakeimg" style="height:100px;">
      <?php
      date_default_timezone_set('Asia/Colombo');
      echo "Today is 📅" . date("Y/m/d") . "<br><br>";
      echo "Time is ⏰".date("h:i a");
      ?>
    </div>
      
    </div>
    <div class="card">
      <h3>Donation</h3>
      <div class=""><img src ="https://cdn.pixabay.com/photo/2018/05/08/21/29/paypal-3384015_1280.png" width="300" height="300"></div>
      <form action="https://www.paypal.com/donate" method="post">
      <!-- Identify your business so that you can collect the payments. -->
      <input type="hidden" name="business" value="zoro22914@gmail.com">
      <!-- Specify details about the contribution -->
      <input type="hidden" name="no_recurring" value="0">
      <input type="hidden" name="item_name" value="Pure Water">
     <input type="hidden" name="item_number" value="Water Campaign">
     <input type="hidden" name="amount" value="25.00">
     <input type="hidden" name="currency_code" value="USD">
     <!-- Display the payment button. -->
    <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" alt="Donate">
    <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
    </div>
    <div class="card">
      <h3>Subscribe</h3>
      <div class=""><img src ="https://cdn.pixabay.com/photo/2018/05/08/21/29/paypal-3384015_1280.png" width="300" height="300"></div>
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post"> <!-- Identify your business so that you can collect the payments. --> <input type="hidden" name="business" value="alice@mystore.com"> <!-- Specify a Subscribe button. --> <input type="hidden" name="cmd" value="_xclick-subscriptions"> <!-- Identify the subscription. --> <input type="hidden" name="item_name" value="Alice's Weekly Digest"> <input type="hidden" name="item_number" value="DIG Weekly"> <!-- Set the terms of the regular subscription. --> <input type="hidden" name="currency_code" value="USD"> <input type="hidden" name="a3" value="5.00"> <input type="hidden" name="p3" value="1"> <input type="hidden" name="t3" value="M"> <!-- Set recurring payments until canceled. --> <input type="hidden" name="src" value="1"> <!-- Display the payment button. --> <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribe_LG.gif" alt="Subscribe"> <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" > </form>
    </div>
  </div>
</div>

<div class="footer">
  <h2><img src="../img/logo.png"></h2>
</div>

</body>
</html>



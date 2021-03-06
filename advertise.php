<?php
session_start();
if($_SESSION['message']) {
  $display_message = $_SESSION['message'];
  $_SESSION['message'] = '';
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="description" content=" " />
<meta name="keywords" content=" " />
    
<!-- TITLE -->
<title>Your Local Life | Save Time, Save Money.</title>

<!-- STYLESHEETS -->
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Abel'>

<!-- JAVASCRIPTS -->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>

<!-- GOOGLE ANALYTICS -->
<script type="text/javascript">
  // <![CDATA[

  // ]]>
</script>
</head>
  
<body> 
  <div class="wrapper">
    <div class="left">
      <h1 class="logo"><a href="index.html">ez deals</a></h1>
      <ul class="nav">
        <li id="pocatello"><a href="#link">East Idaho</a>
          <ul>
            <!-- <li><a href="pocatello/daily-01.html">daily deals</a></li> />-->
            <li><a href="pocatello/vacation-01.html">vacation</a></li>
           <!-- <li><a href="pocatello/activity-01.html">activity</a></li>
            <li><a href="pocatello/food-01.html">food</a></li>
            <li><a href="pocatello/health-01.html">health/beauty</a></li> />-->
          </ul><!--
        </li>
        <li id="idahoFalls"><a href="#link">Idaho Falls</a>
          <ul>
            <li><a href="index.html">daily deals</a></li>
            <li><a href="idaho-falls/vacation-01.html">vacation</a></li>
            <li><a href="idaho-falls/activity-01.html">activity</a></li>
            <li><a href="idaho-falls/food-01.html">food</a></li>
            <li><a href="idaho-falls/health-01.html">health/beauty</a></li>
          </ul>-->
        </li>
        <li id="twinFalls"><a href="#link">Magic Valley</a>
          <ul>
           <!-- <li><a href="twin-falls/daily-01.html">daily deals</a></li> />-->
            <li><a href="twin-falls/vacation-01.html">vacation</a></li>
            <!--<li><a href="twin-falls/activity-01.html">activity</a></li>
            <li><a href="twin-falls/food-01.html">food</a></li>
            <li><a href="twin-falls/health-01.html">health/beauty</a></li> />-->
          </ul><!--
        </li>
        <li id="rexburg"><a href="#link">Rexburg</a>
          <ul>
            <li><a href="rexburg/daily-01.html">daily deals</a></li>
            <li><a href="rexburg/vacation-01.html">vacation</a></li>
            <li><a href="rexburg/activity-01.html">activity</a></li>
            <li><a href="rexburg/food-01.html">food</a></li>
            <li><a href="rexburg/health-01.html">health/beauty</a></li>
          </ul>
        </li>
        <li id="burley"><a href="#link">Burley</a>
          <ul>
            <li><a href="burley/daily-01.html">daily deals</a></li>
            <li><a href="burley/vacation-01.html">vacation</a></li>
            <li><a href="burley/activity-01.html">activity</a></li>
            <li><a href="burley/food-01.html">food</a></li>
            <li><a href="burley/health-01.html">health/beauty</a></li>
          </ul>-->
        </li>
      </ul>
      <p><a href="http://www.facebook.com/pages/Yourlocallife/265814173472610" target="http://yourlocallife.pagodabox.com/practice.html"/><b>JOIN US ON FACEBOOK</b></p>

      <p><a href="http://www.facebook.com/pages/Yourlocallife/265814173472610" target="http://yourlocallife.pagodabox.com/practice.html" /><img src="pocatello/images/product/face1.png" align="" border="590" height="40" width="50" /></a></p>  
      </br>            
      <p><a href="referral.php"><img src="images/refer.png" height="135"  /></P>
    </div>
    <div class="right">
      <a href="about.html" class="contact">about us</a>
      <div class="top">
        <h2>Advertise with Us</h2>
      </div>
      <div class="main-cat">
        <p class="refer">With a business modeled after some of the most successful web marketing companies, Your Local Life is destined to succeed. Hard work and dedication are the heart and soul of this company. Each deal is negotiated to not only bring exceptional products and service to the consumer but to help local business grow. These days’ traditional marketing and advertising can be costly and ineffective. With Your Local Life you are guaranteed results or there is absolutely no cost to you. </p>
        <form method="post" action="advertise-form.php" class="normal">
          <label>Business Name</label>
          <input type="text" name="name" value="name" onFocus="if(this.value=='name'){this.value=''}" onBlur="if(this.value==''){this.value='name'}" />
          <label>Business Address</label>
          <input type="text" name="address" value="address" onFocus="if(this.value=='address'){this.value=''}" onBlur="if(this.value==''){this.value='address'}" />
          <label>Business Phone</label>
          <input type="text" name="phone" value="phone" onFocus="if(this.value=='phone'){this.value=''}" onBlur="if(this.value==''){this.value='phone'}" />
          <label>Business Email</label>
          <input type="text" name="email" value="email" onFocus="if(this.value=='email'){this.value=''}" onBlur="if(this.value==''){this.value='email'}" />
          <?php
            if(isset($display_message)) {
              echo "<p name='bottom' class='thank-you'>" . $display_message . "</p>";
            }
          ?>
          <input type="submit" value="Submit" class="button" />
        </form>
        <div class="extra">
          <h2></h2>
          <p></p>
        </div>
      </div>
      <div class="footer">
        <ul>
          <li><a href="about.html">about us</a></li>
          <li>&#8226;</li>
          <li><a href="advertise.php">advertise with us</a></li>
          <li>&#8226;</li>
          <li><a href="how-it-works.html">how it works</a></li>
          <li>&#8226;</li>
          <li><a href="referral.php">refer a friend</a></li>
        </ul>
        <p>&copy; 2011 your local life</p>
      </div>
    </div>
  </div>
</body>
</html>
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
        <li id="pocatello"><a href="#link">Pocatello</a>
          <ul>
            <li><a href="pocatello/daily-01.html">daily deals</a></li>
            <li><a href="pocatello/vacation-01.html">vacation</a></li>
            <li><a href="pocatello/activity-01.html">activity</a></li>
            <li><a href="pocatello/food-01.html">food</a></li>
            <li><a href="pocatello/health-01.html">health/beauty</a></li>
          </ul>
        </li>
        <li id="idahoFalls"><a href="#link">Idaho Falls</a>
          <ul>
            <li><a href="index.html">daily deals</a></li>
            <li><a href="idaho-falls/vacation-01.html">vacation</a></li>
            <li><a href="idaho-falls/activity-01.html">activity</a></li>
            <li><a href="idaho-falls/food-01.html">food</a></li>
            <li><a href="idaho-falls/health-01.html">health/beauty</a></li>
          </ul>
        </li>
        <li id="twinFalls"><a href="#link">Twin Falls</a>
          <ul>
            <li><a href="twin-falls/daily-01.html">daily deals</a></li>
            <li><a href="twin-falls/vacation-01.html">vacation</a></li>
            <li><a href="twin-falls/activity-01.html">activity</a></li>
            <li><a href="twin-falls/food-01.html">food</a></li>
            <li><a href="twin-falls/health-01.html">health/beauty</a></li>
          </ul>
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
          </ul>
        </li>
      </ul>
    </div>
    <div class="right">
      <a href="about.html" class="contact">about us</a>
      <div class="top">
        <h2>Refer a Friend</h2>
      </div>
      <div class="main-cat">
        <p class="refer">Simple paragraph about how to refer a friend. Anything you want to say to your customers.</p>
        <form method="post" action="refer-form.php">
          <label>Your Email</label>
          <input type="text" name="yourEmail" value="email" onFocus="if(this.value=='email'){this.value=''}" onBlur="if(this.value==''){this.value='email'}" />
          <label>Friends Email</label>
          <input type="text" name="thereEmail" value="email" onFocus="if(this.value=='email'){this.value=''}" onBlur="if(this.value==''){this.value='email'}" />
          <?php
            if(isset($display_message)) {
              echo "<p name='bottom' class='thank-you'>" . $display_message . "</p>";
            }
          ?>
          <input type="submit" value="Submit" class="button" />
        </form>
        <div class="extra">
          <h2>fine print</h2>
          <p>Simple paragraph about how to refer a friend. Anything you want to say to your customers.</p>
        </div>
      </div>
      <div class="footer">
        <ul>
          <li><a href="about.html">about us</a></li>
          <li>&#8226;</li>
          <li><a href="advertise.html">advertise with us</a></li>
          <li>&#8226;</li>
          <li><a href="how-it-works.html">how it works</a></li>
          <li>&#8226;</li>
          <li><a href="referral.html">refer a friend</a></li>
        </ul>
        <p>&copy; 2011 your local life</p>
      </div>
    </div>
  </div>
</body>
</html>
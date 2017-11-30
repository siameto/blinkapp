<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
   <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body onload="" style="background-color: #d3e2e6;">
<div class="container-fluid">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-4">
<div class="anim"></div>
<div class="body_" id="body_"><div id="timediv"></div></div>

<script  src="script.js"></script>
<script type="text/javascript">
    
var interval = setInterval(timestamphome, 1000);




 function timestamphome(){
 var date;
date = new Date();

 
 var time = document.getElementById('timediv'); 
 time.innerHTML = date.toLocaleTimeString();


  }
 

</script>
</div>
<div class="col-md-3" style="margin-top: 12px;">
</div>
<div class="col-md-2"></div>
</div>
</div>

   
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="index.php" class="w3-bar-item w3-button">Chat</a>
  <a href="uploads.php" class="w3-bar-item w3-button">uploads</a>
      <a href="profile.php" class="w3-bar-item w3-button">Profile</a>
      <a href="notification.php" class="w3-bar-item w3-button">Notifications</a>
    <a href="about.php" class="w3-bar-item w3-button">About</a>

      <?php
          echo '<a href="logout.php">LOG OUT</a> <br> <br>'
     ?>

 
</div>

<!-- Page Content -->
<div style="background-color: #6ed7f5;margin-top: 20px;" >
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
  <div class="w3-container">


  </div>
</div>


<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

<div class="container " style="background-image:  url(images/bg3.jpg);
background-size: cover;background-repeat: no-repeat; height:500px">
<div class="col-md-3"></div>
<div class="col-md-6" style="background:rgba(12,172,247,0.6); margin-top: 10px;padding: 0px 30px 40px 30px; ">
	<center><h1>About B-link App</h1></center>
	<center><img src="images/logo.png"></center>
	<p style="padding-top: 20px;color: #000; font-family:arial; ">We consistently hear from clients transitioning to us from other sales agencies that the way Advantage drives business by adding value and being engaged as a strategic partner is unlike anything they previously experienced. We strive to be seen as a
    partner who not only executes against our clients’ strategies but also provides the insights and thought leadership that fuel them. This type of proactive thinking and ownership over delivering profitable growth happens every day throughout our organization
    – business managers scouring the landscape for sales opportunities, retail managers tweaking routing patterns, the Client Team delivering strategic leadership, and our most Senior Executives actively engaged in your busines</p>

	</div>

	<div class="col-md-3"></div>
        




</body>
</html>

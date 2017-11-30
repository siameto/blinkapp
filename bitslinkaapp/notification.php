<!DOCTYPE html>
<html>
<head>
	<title>Notification</title>
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
  <a href="notification.php" class="w3-bar-item w3-button">Notifications</a>
    <a href="profile.php" class="w3-bar-item w3-button">profile</a>
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







    <div class="container-fluid" style="text-align: center;margin-right:30%; ;">
 
     <div class="col-md-2"></div>
     <div class="col-md-8">
           
        <ul class="nav navbar-nav navbar">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notification (<b><img src="images/notification.png"></b>)</a>
          <ul class="dropdown-menu notify-drop">
            <div class="notify-drop-title">
            	<div class="row">
            		<div>Bildirimler (<b>2</b>)</div>
            		<div><a href="" class="rIcon allRead" data-tooltip="tooltip" data-placement="bottom" title="tümü okundu."><i class="fa fa-dot-circle-o"></i></a></div>
            	</div>
            </div>
            <!-- end notify title -->
            <!-- notify content -->
            <div class="drop-content">
            	<li>
            		<div class="notify-img">          <img src="images/hap.jpg"></div>
            		<div><a href="">Dolphine</a>Gwadoya.<a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
            		
            		<hr>
            		<p class="time">Just now</p>
            		</div>
            	</li>
            	<li>
            		<div class="notify-img">  <img src="images/mus.jpg"></div>
            		<div><a href="">Ibrahim</a><a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
            		<p>Lorem ipsum sitsed suscipit. Mauris nisl nulla, tristique nec tristique quis, euismod quis diam.</p>
            		<p class="time">1 hour ago</p>
            		</div>
            	</li>
            	<li>
            		<div class="notify-img">  <img src="images/tarha.jpg"></div>
            		<div><a href="">Benson</a> Matika<a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
            		<p>Lorem ipsum sit dolor amet consilium.</p>
            		<p class="time">29 min ago</p>
            		</div>
            	</li>
            	<li>
            		<div class="notify-img">  <img src="images/gladys.jpg"></div>
            		<div><a href="">Zubeda</a> Ramadhan.  <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
            		<p>Lorem ipsum sit dolor amet consilium.</p>
            		<p class="time">Now 13:18</p>
            		</div>
            	</li>
            	<li>
            		<div class="notify-img"><img src="images/zuu.jpg"></div>
            		<div><a href="">Alice </a> Kavindu. <a href="" class="rIcon"><i class="fa fa-dot-circle-o"></i></a>
            		<p>Lorem ipsum sit dolor amet consilium.</p>
            		<p class="time">2 hours ago</p>
            		</div>
            	</li>
            </div>
            <div class="notify-drop-footer text-center">
            	<a href="#"><i class="fa fa-eye"></i>See more</a>
            </div>
          </ul>
        </li>
      </ul>
          </div> 


          <div class="col-md-2"></div>
            </div>


</div>
</div>
</body>
</html>
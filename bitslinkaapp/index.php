<?php
// require connection
require("includes/connection.php");
require("includes/session.php");

//call confirm logged in
 confirm_logged_in();

$session_id = $_SESSION['user_id'];
//fetch
	$query="SELECT * FROM users_tbl WHERE id ='$session_id'";
	$result = mysqli_query($connection,$query) OR die (mysqli_error($connection,$query));

while ($row = mysqli_fetch_array($result)){
		$session_firstname = $row['firstname'];
		$session_lastname = $row['lastname'];
}
		
 echo '<style="color:#000; font-size:10px;"><h2>Welcome'.$session_firstname.' '.$session_lastname.'</h2>';

      //echo '<a href="loguot.php" class="pull-right">Log out</a><em class="pull-right"></em><br>';

?>


<!DOCTYPE html>
<html>
<head>
	<title>Bits link chat</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script src="js/jquery.min.js"></script>
 <script>
    $(function(){
      $('#btn_post').click(function(){

        var post = $('#post').val();
        

           $.post('includes/data.php',{action:'insert' ,post:post},function(res){

                    $('#result').html(res);
                    $('#result').fadeOut(10000);
                    $('#post').val('');
                   



                  });
          
      });
    });     
      </script>

</head>
<body style="background-color:#d3e2e6">

<div class="container-fluid">
<div class="row">
<div class="col-md-3">
  <div class="container" style="color:blue;">
    <div class="row">
  <button type="button" class="btn btn-primary" style="float: right;" onclick="show()">Notify me!</button>
  </div>
</div>
</div>
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
<script type="text/javascript">
  function show(){       
var title = "new version"
            , options = {
            body: "New notification!",
            icon: "http://bootsnipp.com/img/avatars/80371038613994cd96537912756058cb63fd6adb.jpg"
        };

        if (!("Notification" in window)) {
            alert("This browser does not support desktop notification");
        }
        else if (Notification.permission === "granted") {

            var n = new Notification(title, options);
            n.onshow=function(){
                  setTimeout(n.close.bind(n), 2000); 
            }
            n.onclick = function () {
                n.close();
            };
        }
        else if (Notification.permission !== 'denied') {
            Notification.requestPermission(function (permission) {
                if (permission === "granted") {
                    var n = new Notification(title, options);
                }
            });
        }

}
</script>
</div>
<div class="col-md-3" style="margin-top: 12px;">

</div>
<div class="col-md-2"></div>
</div>
</div>

  <!--start chat-->

<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Chat</a>
  <a href="notification.php" class="w3-bar-item w3-button">Notifications</a>
    <a href="profile.php" class="w3-bar-item w3-button">profile</a>
  <a href="uploads.php" class="w3-bar-item w3-button">Uploads</a>
    <a href="about.php" class="w3-bar-item w3-button">About</a>
    
    <?php
          echo '<a href="logout.php">LOG OUT</a> <br> <br>'
     ?>
 
</div>

<!-- Page Content -->
<div style="background-color: #6ed7f5;margin-bottom: 20px;margin-top: 20px;" >
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

</div>

<div class="container">
	<div class="row">

		<div class="col-md-2"></div>
		<div class="col-md-8" id="form" >

    <h2 style="text-align: center;color:#000;">B-LINK CHAT </h2>


    <hr>
<div id="result"></div>

  <textarea id="post" class="form-control"  style="width: 100%; background-color:#fff;border:none; color:#000;"></textarea>
  <br>

  
<button id="btn_post" class="btn btn-primary"  style="width: 10%; float: right;">POST</button>
</br>
 <hr width="100%">
 	<div class="clear"></div>

    <div class="post-list" style="color:#000;"></div>
</div>
</div>
</div>

		
	</div>
</div>
<script type="text/javascript">

//call function
$(document).ready( function() {
 display_chat_msg(); 
});

   function display_chat_msg() {
    setTimeout( function() { 
    chat_msges();
    display_chat_msg();
    }, 2000);
   }
   
   function chat_msges(){
       $.getJSON("includes/json_display_chats.php", function(data) {
       $("div.post-list").empty();
     $.each(data.result, function(){
     $("div.post-list").append("<li>"+this['chat_msg']+"</li>");
     });
 });
   }








</script>
</body>

</html>




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

<div class="container ">
	<div class="row">
		<div class="full-width bg-transparent">
       <!--================== Snippet for custom input type file on button ================-->

      
        <!--=========================input type file change on button ends here====================-->


        <div class="full-width">
            <h1 class="text-center color">Edit Your Profile Picture</h1>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="custom-form">
                <div class="text-center bg-form">
                    <div class="img-section">
                        <img src="http://lorempixel.com/200/200/nature/" class="imgCircle" alt="Profile picture">
                        <span class="fake-icon-edit" id="PicUpload" style="color: #ffffff;"><span class="glyphicon glyphicon-camera camera"></span></span>
                    <div class="col-lg-12">
                        <h4 class="text-right col-lg-12"><span class="glyphicon glyphicon-edit"></span> Edit Profile</h4>
                        <input type="checkbox" class="form-control" id="checker">
                    </div>
                    </div>
                    <input type="file" id="image-input" onchange="readURL(this);" accept="image/*" disabled class="form-control form-input Profile-input-file" >
                </div>
              
                <div class="col-lg-12 col-md-12 text-center">
                    <button style="margin-top: 20px; border-radius:none;" class="btn btn-info btn-lg custom-btn" id="submit" disabled><span class="glyphicon glyphicon-save"></span>Save</button>
                </div>
                </div>
            </div>
        </div>

    </div>
    </div>
        
	</div>
</div>


<!--==================================== sorry I am a newbie in bootsnipp so I am unable to link js to html in bootsnipp thats why I have included the script in html ===================-->

<script>

    $('input[id=base-input]').change(function() {
        $('#fake-input').val($(this).val().replace("C:\\fakepath\\", ""));
    });

    <!--==================Javascript code for custom input type file on button ================-->

    $('input[id=main-input]').change(function() {
        console.log($(this).val());
        var mainValue = $(this).val();
        if(mainValue == ""){
            document.getElementById("fake-btn").innerHTML = "Choose File";
        }else{
            document.getElementById("fake-btn").innerHTML = mainValue.replace("C:\\fakepath\\", "");
        }
    });

    <!--=========================input type file change on button ends here====================-->

//    ===================== snippet for profile picture change ============================ //

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.imgCircle')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

//    =================================== ends here ============================================ //

    var checkme = document.getElementById('checker');
    var userImage = document.getElementById('image-input');
    var userName = document.getElementById('name');
    var userPhone = document.getElementById('phone');
    var userEmail = document.getElementById('email');
    var userPlace = document.getElementById('place');
    var UserSend = document.getElementById('submit');
    var editPic = document.getElementById('PicUpload');
    checkme.onchange = function() {
        UserSend.disabled = !this.checked;
        userImage.disabled = !this.checked;
        userName.disabled = !this.checked;
        userPhone.disabled = !this.checked;
        userEmail.disabled = !this.checked;
        userPlace.disabled = !this.checked;
        editPic.style.display = this.checked ? 'block' : 'none';
    };
    </script>




</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login bitslink chat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.js"></script>
   <script>
    $(function(){
      $('#btn_login').click(function(){

        var email = $('#email').val();
        var password = $('#password').val();

           $.post('includes/data.php',{action:"login", email:email, password:password},function(res){

                    $('#result').html(res);
                    $('#result').fadeOut(20000);
                    $('#email').val('');
                    $('#password').val('')



                  });
          
      });
    });     
      </script>
</head>
<body>
<div class="container-fluid" style="background-image: url(images/bg3.jpg);
background-size: 100%;background-repeat: no-repeat; height:800px ">
<div class="container">
<div class="row">
    <div class="col-md-2"> </div>
    
    <div class="col-md-8" style="background:rgba(56,184,229,0.6); margin-top: 50px;padding: 0px 30px 40px 30px; " > 

  


      <center><img src="images/logo.png"></center>

   
 <em class="pull-right"></em><a href="Signup.php" class="pull-right">Sign Up</a><br>
 
    <div id="result"></div>
    <hr>

    <label style="color:#fff;">Email</label>
    <span class="email" style="color: #fff;"></span><br>
   <input type="email" id="email"  class="form-control" style="width: 100%"><br>
    <label style="color:#fff;">Password</label>
     <span  class="password" style="color: #fff;"></span><br>
   <input type="password"id="password"   class="form-control" style="width: 100%"><br>
   <center> <button id="btn_login" class="btn btn-primary" style="width: 20%;background-color:#faa61c;">Login</button></center><br>
 

</div>

    <div class="col-md-2"> </div>

</div>
</div>

</div>


<div class="heading"><b>Login Form</b></div>
<div class="slideExpandUp">
<div class="form-triangle"></div>
<div class="form">
  <input type="text" placeholder="&#xf007;&nbsp;&nbsp;Enter Username" class="tbox" /><br>
  <input type="password" placeholder="&#xf023;&nbsp;&nbsp;Enter Password" class="tbox" /><br><br>
  <button type="submit" class="button">
  <span class="front">Submit</span>
  <div class="back"><b>SUCCESS !</b></div>
  </button>
  <br><br><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#"><b>FORGOT PASSWORD ?</b></a>
</div>
</div>

<style type="text/css">
  /*
=======================================
Deleoped By Sayed Faaiz
You can mail me at faaiz.shah@gmail.com 
=======================================
*/
@import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css);
body {margin: 0;}
.heading {
  background-color: #CDDC39;
  width: 100%;
  padding: 10px 0 0px 0;
  text-align: center;
  font-size: 35px;
  font-family: sans-serif;
  height:50px;
  color: #FFFFFF;
}
a {
  text-decoration: none;
  color: #FFFFFF; 
  font-family: sans-serif;
  font-size: 14px;
  transition-duration: 0.4s
}
a:hover {
  color: #000000;  /*============dark cyan============*/
}
.tbox {
  font-family: FontAwesome, "Open Sans", Verdana, sans-serif;
  padding: 10px;
  width: 400px;
  height: 30px;
  font-size: 15px;
  margin: 9px 9px 9px 40px;
  border: 1px solid transparent;
  border-bottom: 1px solid #008b8b; /*============dark cyan============*/
  transition-duration: 0.2s;
  box-shadow: 2px 2px 5px 1px rgba(0,0,0,0.2);
  border-radius: 2px;
}
.tbox:focus {
  border-bottom: 2px solid black;
}
.button {
  font-family: sans-serif;
  font-size: 20px;
  background-color: #FFFFFF;
  color: #CDDC39;
  box-shadow: 2px 2px 5px 1px rgba(0,0,0,0.2);
  border: 1px solid transparent;
  padding: 12px 120px 0px 110px;
  margin: 0 0 0 90px;
  cursor: pointer;
  border-radius: 2px;
  transition: all ease-in;
  transition-duration: 0.5s;
}
.button:focus {
  transform: rotateY(180deg);
  background-color: #CDDC39;
}
.button .front {
  backface-visibility: hidden;
  overflow: hidden;
}
.button .back {
  text-align: center;
  text-decoration: underline;
        font-family: sans-serif;
  font-size: 15px;
  color: #FFFFFF;
  transform: rotateY(180deg);
}
p {
  color: #FFFFFF;
}
.form-triangle {
  width: 0;
  margin: 0 auto;
  border: 12px solid transparent;
  border-bottom-color: #CDDC39;
}
.form {
  margin: 0 auto;
  display: inline-bock;
  background: #CDDC39;
  height: 300px;
  width: 500px;
  padding: 10px;
  box-shadow: 0px 10px 9px 5px rgba(0,0,0,0.2);
}
.slideExpandUp{
  animation-name: slideExpandUp;
  animation-duration: 1.6s; 
  animation-timing-function: ease-out;
  visibility: visible !important; 
}

@keyframes slideExpandUp {
  0% {
    transform: translateY(100%) scaleX(0.5);
  }
  30%{
    transform: translateY(-8%) scaleX(0.5);
  } 
  40%{
    transform: translateY(2%) scaleX(0.5);
  }
  50%{
    transform: translateY(0%) scaleX(1.1);
  }
  60%{
    transform: translateY(0%) scaleX(0.9);    
  }
  70% {
    transform: translateY(0%) scaleX(1.05);
  }     
  80%{
    transform: translateY(0%) scaleX(0.95);   
  }
  90% {
    transform: translateY(0%) scaleX(1.02);
  } 
  100%{
    transform: translateY(0%) scaleX(1);    
  }
}
</style>
</body>
</html>


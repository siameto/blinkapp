<<!DOCTYPE html>
<html lang="en">
<head>
  <title>signup ajax chat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.js"></script>
  <script>
    $(function() {
      $('#btn_register').click (function() {

      var email = $('#email').val();
      var fname = $('#fname').val();
      var lname = $('#lname').val();
      var password = $('#password').val();
      var cpassword = $('#cpassword').val();
      var error_status=0; //zero rep no error


      if(email == "") {
        $('span.email').html('Please Enter Email');
         $('#email').addClass('error-input');
         error_status = 1;
         // body...
      }
       
       if(fname == "") {
        $('span.fname').html('Please Enter Firstname');
         $('#fname').addClass('error-input');
           error_status = 1;
        // body...
      }
     
      if(lname == "") {
        $('span.lname').html('Please Enter Lastname');
         $('#lname').addClass('error-input');
           error_status = 1;
        // body...
      }

      if(password == "") {
        $('span.password').html('Please Enter Password');
         $('#password').addClass('error-input');
           error_status = 1;
        // body...
      }
         
      if(cpassword == "") {
        $('span.cpassword').html('Please Confirm Password');
         $('#cpassword').addClass('error-input');
           error_status = 1;
        // body...
      }

      if(cpassword!=password) {
    $('span.cpassword').html('Passwords do not match');
    $('#cpassword').addClass ('error-input');
      error_status = 1;

   }

    else{
    $('#cpassword').removeClass ('error-input');
   }

//no errors
if(error_status==0){
 
 //insert record
 //syntax-$.post('filename', {data}, function(response){});
 $.post('includes/data.php',{action:"signup", email:email, fname:fname, lname:lname, password:password}, function(res) {

   $('#result').html(res);
   $('#result').fadeOut(2000000);
   $('#email').val('');
   $('#fname').val('');
   $('#lname').val('');
   $('#password').val('');
   $('#cpassword').val('');
     




 });


}


      });
    });
  </script>
</head>
<body style="background-color: #fff">

<div class="container-fluid" style="background-image: url(images/banner2.jpg); background-size:cover; max-height:700px; max-width: 100%;">
    <h2 style="text-align: center;color:#000;font-family: arial;">Chat Sign Up</h2>

<div class="row">
    <div class="col-md-2"> </div>
    
    <div class="col-md-8" style="background:rgba(12,172,247,0.6); margin-top: 10px;padding: 0px 30px 40px 30px; " > 

 <center><img src="images/logo.png"></center>
   

  <div class="clear"></div>
    <div id="result"></div>


    <label style="color:#fff;">Email</label>
    <span class="email" style="color: #fff;"></span><br>
   <input type="email" id="email"  class="form-control" style="width: 100%"><br>
   <label style="color:#fff;">First Name</label>
    <span class="fname" style="color: #fff;"></span><br>
   <input type="text" id="fname" class="form-control" style="width: 100%"><br>
   <label style="color:#fff;">Last Name</label>
    <span class="lname" style="color: #fff;"></span><br>
   <input type="text"id="lname"  class="form-control" style="width: 100%"><br>
    <label style="color:#fff;">Password</label>
     <span class="password" style="color: #fff;"></span><br>
   <input type="password"id="password"  class="form-control" style="width: 100%"><br>
     <label style="color:#fff;">Confirm Password</label>
        <span class="cpassword" style="color: #fff;"></span><br>
   <input type="password" id="cpassword"  class="form-control" style="width: 100%"><br>
   <br>
        <button id="btn_register" class="btn btn-primary" style="width: 100%;">Register</button>

</div>

    <div class="col-md-2"> </div>

</div>
</div>





</body>
</html>
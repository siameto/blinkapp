<!DOCTYPE html>
<html lang="en-us">
<head>
  <title>B-link</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://www.expertphp.in/js/jquery.form.js"></script>


  </head>  
  <body onload="" style="background-color: #d3e2e6;" >



<div class="container-fluid">
<div class="row">



<div class="col-md-3">

</div>
<div class="col-md-4">
<div class="anim"></div>
<div class="body_" id="body_"><div id="timediv"></div></div>

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
  <a href="notification.php" class="w3-bar-item w3-button">Notifications</a>
  <a href="uploads.php" class="w3-bar-item w3-button">uploads</a>
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













<script>
function preview_images() 
{
 var total_file=document.getElementById("images").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<div class='col-md-3'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
 }
}
</script>
</head>
<body>
<div class="row">
 <form action="multiupload.php" method="post" enctype="multipart/form-data">
  <div class="col-md-6">
      <input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple/>
  </div>
  <div class="col-md-6">
      <input type="submit" class="btn btn-primary" name='submit_image' value="Upload Multiple Image"/>
  </div>
 </form>
 </div>
 <div class="row" id="image_preview"></div>


<script>   $('#add_more').click(function() {
          "use strict";
          $(this).before($("<div/>", {
            id: 'filediv'
          }).fadeIn('slow').append(
            $("<input/>", {
              name: 'file[]',
              type: 'file',
              id: 'file',
              multiple: 'multiple',
              accept: 'image/*'
            })
          ));
        });

        $('#upload').click(function(e) {
          "use strict";
          e.preventDefault();

          if (window.filesToUpload.length === 0 || typeof window.filesToUpload === "undefined") {
            alert("No files are selected.");
            return false;
          }

          // Now, upload the files below...
          // https://developer.mozilla.org/en-US/docs/Using_files_from_web_applications#Handling_the_upload_process_for_a_file.2C_asynchronously
        });

        deletePreview = function (ele, i) {
          "use strict";
          try {
            $(ele).parent().remove();
            window.filesToUpload.splice(i, 1);
          } catch (e) {
            console.log(e.message);
          }
        }

        $("#file").on('change', function() {
          "use strict";

          // create an empty array for the files to reside.
          window.filesToUpload = [];

          if (this.files.length >= 1) {
            $("[id^=previewImg]").remove();
            $.each(this.files, function(i, img) {
              var reader = new FileReader(),
                newElement = $("<div id='previewImg" + i + "' class='previewBox'><img /></div>"),
                deleteBtn = $("<span class='delete' onClick='deletePreview(this, " + i + ")'>X</span>").prependTo(newElement),
                preview = newElement.find("img");

              reader.onloadend = function() {
                preview.attr("src", reader.result);
                preview.attr("alt", img.name);
              };

              try {
                window.filesToUpload.push(document.getElementById("file").files[i]);
              } catch (e) {
                console.log(e.message);
              }

              if (img) {
                reader.readAsDataURL(img);
              } else {
                preview.src = "";
              }

              newElement.appendTo("#filediv");
            });
          }
        });</script>











   
















<figure class="snip0020">
<img src="images/web.jpg" class="img-responsive"   style="margin-top: 20px;">
  <figcaption>
    <div><h2>I'm just <span>very</span> selective </h2></div>
    <div>
      <p>.. bout the reality I choose to accept.</p>
      <div class="curl"></div>
    </div>
    <a href="#"></a>
  </figcaption>     
</figure>
<figure class="snip0020">
<img src="images/flat.jpg" class="img-responsive"   style="margin-top: 20px;">
  <figcaption>
    <div><h2>To make a <span>bad day</span> worse</h2></div>
    <div>
      <p>.. spend it wishing for the impossible.</p>
      <div class="curl"></div>
    </div>
    <a href="#"></a>
  </figcaption>     
</figure>
<figure class="snip0020">
<img src="images/twelve.jpg" class="img-responsive"   style="margin-top: 20px;">  
  <figcaption>
    <div><h2>To make a <span>bad day</span> worse</h2></div>
    <div>
      <p>.. spend it wishing for the impossible.</p>
      <div class="curl"></div>
    </div>
    <a href="#"></a>
  </figcaption>     
</figure>






<figure class="snip0020">
<img src="images/thirteen.jpg" class="img-responsive"   style="margin-top: 20px;" > 
  <figcaption>
    <div><h2>I'm just <span>very</span> selective </h2></div>
    <div>
      <p>.. bout the reality I choose to accept.</p>
      <div class="curl"></div>
    </div>
    <a href="#"></a>
  </figcaption>     
</figure>
<figure class="snip0020">
<img src="images/dat.jpg" class="img-responsive"   style="margin-top: 20px;" >  
  <figcaption>
    <div><h2>To make a <span>bad day</span> worse</h2></div>
    <div>
      <p>.. spend it wishing for the impossible.</p>
      <div class="curl"></div>
    </div>
    <a href="#"></a>
  </figcaption>     
</figure>
<figure class="snip0020">
<img src="images/mercy.jpg" class="img-responsive"   style="margin-top: 20px;">  
  <figcaption>
    <div><h2>To make a <span>bad day</span> worse</h2></div>
    <div>
      <p>.. spend it wishing for the impossible.</p>
      <div class="curl"></div>
    </div>
    <a href="#"></a>
  </figcaption>     
</figure>
<figure class="snip0020">
<img src="images/leaf.jpg" class="img-responsive"   style="margin-top: 20px;"> 
  <figcaption>
    <div><h2>To make a <span>bad day</span> worse</h2></div>
    <div>
      <p>.. spend it wishing for the impossible.</p>
      <div class="curl"></div>
    </div>
    <a href="#"></a>
  </figcaption>     
</figure>
<figure class="snip0020">
<img src="images/girl.jpg" class="img-responsive"   style="margin-top: 20px;" > 
 <figcaption>
    <div><h2>To make a <span>bad day</span> worse</h2></div>
    <div>
      <p>.. spend it wishing for the impossible.</p>
      <div class="curl"></div>
    </div>
    <a href="#"></a>
  </figcaption>     
</figure>
<figure class="snip0020">
<img src="images/hair.jpg" class="img-responsive"   style="margin-top: 20px;" > 
  <figcaption>
    <div><h2>To make a <span>bad day</span> worse</h2></div>
    <div>
      <p>.. spend it wishing for the impossible.</p>
      <div class="curl"></div>
    </div>
    <a href="#"></a>
  </figcaption>     
</figure>
<figure class="snip0020">
<img src="images/girl.jpg" class="img-responsive"   style="margin-top: 20px;" > 
 <figcaption>
    <div><h2>To make a <span>bad day</span> worse</h2></div>
    <div>
      <p>.. spend it wishing for the impossible.</p>
      <div class="curl"></div>
    </div>
    <a href="#"></a>
  </figcaption>     
</figure>

<figure class="snip0020">
<img src="images/bo.jpg" class="img-responsive"   style="margin-top: 20px;" > 
  <figcaption>
    <div><h2>To make a <span>bad day</span> worse</h2></div>
    <div>
      <p>.. spend it wishing for the impossible.</p>
      <div class="curl"></div>
    </div>
    <a href="#"></a>
  </figcaption>     
</figure>
<figure class="snip0020">
<img src="images/square.jpg" class="img-responsive"   style="margin-top: 20px;" > 
 <figcaption>
    <div><h2>To make a <span>bad day</span> worse</h2></div>
    <div>
      <p>.. spend it wishing for the impossible.</p>
      <div class="curl"></div>
    </div>
    <a href="#"></a>
  </figcaption>     
</figure>





  </body>
  </html>











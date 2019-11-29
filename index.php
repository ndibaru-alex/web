<!DOCTYPE html>
<html>
<head>
	<title>Welcome To DAca Hotel</title>
</head>
<body>
<?php
include "header.html"
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div id="lide" class="carousel-inner">
     <div class="carousel-item ">
      <img src="images/hr.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item ">
      <img src="images/slide1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/hr.jpg" class="d-block w-100" alt="...">
    </div>
  
    <div class="carousel-item active">
      <img src="images/r1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/r2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/r3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/slide4.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/bed.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/room2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/pool.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/res.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
 <div id="maps" style="margin-top: 50px" >
  
  <h5>location</h5>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15919.264410652626!2d39.6850132!3d-4.0578874!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc5b74ef15e7de030!2sHotel%20Englishpoint%20Mombasa!5e0!3m2!1sen!2see!4v1571157154383!5m2!1sen!2see" width="700" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

</div >
   <h5 style="color: white" class="text p-3 text-center"><b><i>our services and products include</i></b></h5>
<div style="margin-top: 2px">
  <table>
    <thead>
    </thead>
    
    <tr>
      <td><img src="images/food1.jpg" class="rounded-circle"></td>
      <td><img src="images/room.jpg" class="rounded-circle"></td>
    </tr>
    <tr>
      <td><video width="360" height="260" controls class="rounded-top">
  <source src="images/Reel.mp4" type="video/mp4">
Your browser does not support the video tag.
</video></td>
      <td><video width="360" height="260" controls >
  <source src="images/r.mkv" type="video/mp4">
Your browser does not support the video tag.
</video></td>
    </tr>
    <tr>
      <td><img src="images/grill.jpg" class="rounded-circle"></td>
      <td><img src="images/bar.jpg" class="rounded-circle"></td>
      
    </tr>
  </table>
  <?php include "footer.html" ?>
</div>
</body>
</html>
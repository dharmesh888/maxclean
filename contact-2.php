<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contact Us</title>
  <meta charset="utf-8">
  <title>MAX CLEANING</title>
<meta name="viewport" content="width-device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"></script> -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- ---------------------GOOGLE-FONT---------------------- -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="custome.css">

  <!-- <script src="js/script.js"></script> -->
</head>
<body>
  <?php
include('header.php');
?>



<!-- ////////////////////////////////////////BLOG_HEADER_IMG//////////////////////////////////////// -->
<div class="blog-post-header container-fluid">
  <div class="container blog-post-header-content">
    <div class="blog-header-img-overlay">
    <h1>CONTACT</h1>
    <div>
    <span>HOME</span>
    <span>/</span>
    <span style="color:yellow">BLOG</span>
    </div>
  </div>
  </div>
</div>





<!-- /////////////////////////////////////FORM-SECTION////////////////////////////////////////////// -->
<section>
  <div class="form-section container-fluid">
    <div class="row">
      <div class="col-md-8 col-sm-12">
         <h5 class="font-weight-bold form-section-header">LEAVE YOUR COMMENTS</h5>
    <div class="row pb-4">
      <div class="col-lg-6 form-section-input">
        <input type="text" class="add" name="Name" placeholder="Your Name">
      </div>
      <div class="col-lg-6 form-section-input">
        <input type="text" class="add" name="Name" placeholder="Your Email id">
      </div>
    </div>
    <input type="text" name="Name" placeholder="Your Email id" class="form-section-input-subject">
    <input type="text" name="massage" placeholder="Message" class="form-section-input-msg">
    <button type="button" class="btn form-section-btn">SUBMIT</button>
      </div>
      <div class="col-md-4 col-sm-12">
        <div class="form-section-details">
           <div class="icons rounded-circle d-flex justify-content-center align-items-center position-relative">
         <i class="fas fa-phone-alt text-primary"></i>
      </div>

      <div class="icons-sec text-center border py-5 pt-2 ">
        <h6 class="font-weight-bolder">Call us</h6>
        <p class="mb-0 text-secondary">+1-23-456-7890</p>
         <p class="text-secondary">+4-34-745-4351</p>
      </div>
        </div>
         <div class="form-section-details">
           <div class="icons rounded-circle d-flex justify-content-center align-items-center position-relative">
         <i class="fas fa-phone-alt text-primary"></i>
      </div>

      <div class="icons-sec text-center border py-5">
        <h6 class="font-weight-bolder">Mail us</h6>
        <p class="mb-0 "><a href="#" class="text-secondary">info@Cleaningcsb.com</a></p>
         <p><a href="#" class="text-secondary">info@MaxCleaningcsb.com</a></p>
      </div>
        </div>
         <div class="form-section-details">
           <div class="icons rounded-circle d-flex justify-content-center align-items-center position-relative">
         <i class="fas fa-phone-alt text-primary"></i>
      </div>

      <div class="icons-sec text-center border py-5">
        <h6 class="font-weight-bolder">Address</h6>
        <p class="mb-0 text-secondary">Maxcleaning Inc, 06 Highley St,</p>
         <p class="text-secondary">Victoria, Australia.</p>
      </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- /////////////////////COMMENT-SECTION-GOOGLE-MAPS//////////////////////////////////////////// -->
<section class="form-section-googlemaps container-fluid pt-5 p-0">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.7377459040636!2d72.8586179143801!3d19.2937676501061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b1b0c477367b%3A0xac8c178f39d86c2!2sGeecon%20Systems%20Pvt%20Ltd.%20(Software%20Development%20Office)!5e0!3m2!1sen!2sin!4v1625209142686!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>


<?php

  require('footer.php');

?>
</body>
</html>
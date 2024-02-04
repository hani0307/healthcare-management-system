<!DOCTYPE html>
<html lang="en">
<head>
<title>healthcare</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"> 
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
   <style>
    *{
        margin:0;
        padding:0;
        box-string: border-box;
    }
    .carousel-item{
        width:100%;
        height:95vh;
    }
    .txt{
        font-size:26px;
        font-weight:bold;
    }
    button{
        background-color:blue;
        color:white;
        border:none;
        border-radius:5px;
    }
    .container{
      margin:0 auto;
      height:100vh;
      font-weight:bold;
      font-family:times new roman;
      font-size:19px;

    }
    .container2{
      margin:0 auto;
      height:50vh;
      width:100%;
      background-color:white;
    }
    .container3{
      height:30vh;
      weight:100%;
    }
    .container4{
      padding-top:15px;
      padding-left:15px;
      margin:5px;
      height:75vh;
      font-weight:bold;
      font-family:times new roman;
      background-color:white;
      font-size:19px;
    }
    .card{
      transition:transform 0.5s;
    }
    .card:hover{
      tranform: translate(-10px)
    }
    .menubar{
      position:fixed;
      z-index: 10;
      width:100%;
    }
   </style>

</head>
<body>
  <div class="menubar">
<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
  <a class="navbar-brand text-success" href="#">E-HEALTHCARE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active ">
        <a class="nav-link text-light" href="homepage.php">HOME</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         LOGIN
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">user</a>
          <a class="dropdown-item" href="admin/admin.php">admin</a>
        </div>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        TRACK YOUR HEALTH
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="bp.php">BLOOD PRESSURE</a>
          <a class="dropdown-item" href="bmi.php">BMI CALCULATOR</a>
        </div>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="doctor/doclist.php">OUR CONSULTANTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="predictor.php">DISEASE PREDICTOR</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="login.php">BOOK YOUR APPOINTMENT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="blogshome.php">BLOGS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#abt">ABOUT US</a>
      </li>
    </ul>
  </div>
</nav><br>
  </div>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image\back1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
      <p><div class="txt" align="left">DELIVERING CUTTING-EDGE<br> MEDICAL CARE WITH COMPASSION<br>
        <div class="btn"><BUTTON>  <a href="login.php" class="btn btn-primary">BOOK NOW</a></button></div></div></p></div>
    </div>
    <div class="carousel-item">
    <video class="video-slider d-block w-100" src="image\pexels-karolina-grabowska-7195710 (2160p).mp4" autoplay muted loop>
</video>
      <div class="carousel-caption d-none d-md-block text-light">
     <div class="txt">
      <h2>COMPASSION LIVES HERE.CARE THAT LASTS A LIFETIME<br>
    <b>OUR PROMISE</b></h2></div></div>
    </div>
    <div class="carousel-item">
    <video class="video-slider d-block w-100" src="image\pexels-pavel-danilyuk-5998385 (1080p).mp4" autoplay muted loop>
</video>
      <div class="carousel-caption d-none d-md-block text-light">
      <div class="txt">
    <h1><font color="#17202A">OUR DOCTOR ARE WELL-TRAINED DOCTOR</font></h1><br>
</div></div>
</div>
    <div class="carousel-item">
    <video class="video-slider d-block w-100" src="image\production_id_4360483 (2160p).mp4" autoplay muted loop>
</video>
      <div class="carousel-caption d-none d-md-block text-light">
      <div class="txt">
    <h1>TRACK YOUR HEALTH FROM HOME</h1><br>
</div></div>
</div>
</div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div><br>
<div id="abt">
<section  class="py-3 pt-3">
<div  class="container4">
<h2  class="font-weight-bold text-center mt-5"><u>ABOUT-US</u></h2><br>
  <div class="row">
    <div class="col-lg-6 py-3">
<h3><b>E-HEALTHCARE MANAGEMENT</b></h3>
      <div class="pr-5"><p>
Health and wellness </u>is a term used to refer to the overall well-being of an individual.
 Health typically refers to the <u>physical well-being of a person,</u> while wellness refers to the mental, 
 spiritual, and emotional well-being of a person. Health and wellness websites help people get in better
  shape and take control of their well-being so they can live better lives.
be in contact with us e healthcare e-health care, use of digital technologies and 
telecommunications, such as computers, the Internet, and mobile devices, to facilitate health 
improvement and health care services.</p>
  </div><a href="contact.php" class="btn btn-dark text-center">contact-us</a>
  </div>
  <div class="col-lg-6" style="background:url(ab1.jpg) no-repeat">
  </div></div></div>
  </section></div><br><br>
  <footer class="footer-distributed">

<div class="footer-left">
    <h3>E-<span>healthcare</span></h3>

    <p class="footer-links">
        <a href="homepage.php">Home</a>
        |
        <a href="contact.php">Contact</a>
        |
        <a href="blogshome.php">Blog</a>
    </p>

    <p class="footer-company-name">Copyright © 2021 <strong>E-healthcare</strong> All rights reserved</p>
</div>

<div class="footer-center">
    <div>
        <i class="fa fa-map-marker"></i>
        <p><span>CHENNAI</span>
            TAMILNADU</p>
    </div>

    <div>
        <i class="fa fa-phone"></i>
        <p>+91 74597258</p>
    </div>
    <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:sagar00001.co@gmail.com">ehealthcare@gmail.com</a></p>
    </div>
</div>
<div class="footer-right">
    <p class="footer-company-about">
        <span>About the company</span>
        <strong>E-healthcare</strong>
eHealth can be described as the delivery of health care services 
using upcoming electronic information and
 communication technologies
    </p>
    <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
    </div>
</div>
</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>
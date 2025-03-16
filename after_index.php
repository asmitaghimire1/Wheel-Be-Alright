<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!--bootsrap-5 css-->
  <link rel="stylesheet" href="HomePage.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
</head>

<body>
<?php
        include("connection.php");
        ?>
  <!--background image-->
  <div class="background">
    <img class="bg-img1" src="Images/carfixing.jpg" alt="Bg img">
    <div class="bg-text">
      <h3 style="font-size: 10vh;">Auto Service, <br>
        Maintenance <span style="color: #d3071f;">&</span> Repair
      </h3>
      <button class="book-now">Book Now &rarr;</button>
    </div>
    <img class="bg-img1" src="/Images/repairing tool.jpg" alt="Bg img">
    <div class="bg-text">
      <h3 style="font-size: 10vh;">Auto Service, <br>
        Maintenance <span style="color: #d3071f;">&</span> Repair
      </h3>
      <button class="book-now">Book Now &rarr;</button>
    </div>
    <img class="bg-img1" src="/Images/3.jpg" alt="Bg img">
    <div class="bg-text">
      <h3 style="font-size: 10vh;">Auto Service, <br>
        Maintenance <span style="color: #d3071f;">&</span> Repair
      </h3>
      <button class="book-now">Book Now &rarr;</button>
    </div>
  </div>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>

  <!--Slideshow javascript-->

  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("bg-img1");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>
  <!--NAVBAR-->
  <nav class="navbar navbar-expand-lg bg-transparent fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#"><img style="height: 10vh; width: 15vh;" src="Images/mech_logo.png"
          alt="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="background-color: grey;"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" style="padding-left: 25vw; color: red;" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="padding-left: 2vw;" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="padding-left: 2vw;" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="padding-left: 2vw;" href="#">Pages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="padding-left: 2vw;" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="padding-left: 2vw;" href="#">Contact</a>
          </li>
        

        </ul>
      </div>
    </div>
  </nav>
  <div class="container1">
    <div class="about-img">
      <img style="height: 25vw; width: 30vw;" src="Images/about2.jpg" alt="about">
    </div>
    <div class="about-content">
      <h4 style="font-size: 48px;">About us</h4>
      <p>
        Our professional team at 'Wheel be alright' is dedicated to providing top-notch services <br> for all your car
        and motorbike repair needs. With our easy online
        booking system, getting <br> your vehicle fixed has never been more convenient. Whether it's routine
        maintenance, <br>engine repairs, or part replacements, our
        experienced technicians are committed to delivering <br>exceptional results for every customer. We understand
        the inconvenience that vehicle issues <br>can cause,
        so we strive to make the process as seamless as possible. Trust in our expertise <br>and customer-centric
        approach to keep your vehicles running smoothly.
        Book your appointment today and experience the quality service that sets us apart.
      </p>
      </div>
    </div>
  </div>

  <div class="bg-services" style="background-color: black;">
  <div class="services">
    <div>
      <h6 style="font-size: 30px;">What We Do?<hr></h6>
    </div>

    <div >
      <h1 style="font-size: 60px;">Our Services</h1>
    </div>
  </div>
  <div class="container_services">
   
    <!-- Image 1 -->
    <div class="content_img">
      <img src='Images/oil.jpg' width="100%">
      <div>Change Oil and Filter</div>
    </div>

    <!-- Image 2 -->
    <div class="content_img">
      <img src='Images/tire.jpg' width="100%">
      <div>Tire Change and Repair</div>
    </div>

    <!-- Image 3 -->
    <div class="content_img">
      <img src='Images/engine.jpg' width="100%">
      <div>Engine Maintenance</div>
    </div>

</div>
  </div>
</div>
<div class="bg-how" style="background-color: black; padding-top: 3cm;">
  <div class="how_container">
    <div>
      <h6 style="font-size: 30px;">How we work?<hr></h6>
    </div>

    <div >
      <h1 style="font-size: 60px;">Our Processes</h1>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-3 col-md-6 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
      <div class="item active"> <span class="icon carex-car-checklist"></span>
          <h5>Book appointment</h5>
          <p></p>
          <div class="numb">01</div>
      </div>
  </div>
  <div class="col-lg-3 col-md-6 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
      <div class="item"> <span class="icon carex-car-2"></span>
          <h5>Bring your Vehicle</h5>
          <p></p>
          <div class="numb">02</div>
      </div>
  </div>
  <div class="col-lg-3 col-md-6 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
      <div class="item"> <span class="icon carex-car-setting"></span>
          <h5>Get the Vehicle Repaired</h5>
          <p></p>
          <div class="numb">03</div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
          <div class="item"> <span class="icon carex-certificate"></span>
              <h5>Ready for Deliver</h5>
              <p></p>
              <div class="numb">04</div>
          </div>
      </div>
  </div>
  <!--bootstrap-5 js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

  <!--JQUERY CDN link-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
    var nav = document.querySelector('nav');
    window.addEventListener('scroll', function () {
      if (window.pageYOffset >= 70) {
        nav.classList.add('bg-dark', 'shadow');
      }
      else {
        nav.classList.remover('bg-dark');
      }
    })
  </script>
</body>

</html>
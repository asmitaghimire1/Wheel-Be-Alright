<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WheelBeAlright</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="button.html"></script>


<script>
 
    function submitForm(event) {
            event.preventDefault();

            const fullName = document.getElementById('fullName').value;
            const vehicleType = document.getElementById('vehicleType').value;
            const problemDescription = document.getElementById('problemDescription').value;
            const address = document.getElementById('address').value;
            const email = document.getElementById('email').value;
            const phoneNumber = document.getElementById('phoneNumber').value;
            const location = document.getElementById('location').value;

           
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Please enter a valid email address.');
                return;
            }

           
            const phoneRegex = /^[0-9]{10}$/;
            if (!phoneRegex.test(phoneNumber)) {
                alert('Please enter a valid phone number (10 digits only).');
                return;
            }

            
            alert('Form submitted successfully!');
            // Additional logic for form submission can be added here
        }

        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function showPosition(position) {
            const locationInput = document.getElementById('location');
            locationInput.value = `Latitude: ${position.coords.latitude}, Longitude: ${position.coords.longitude}`;
        }
    function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<style>
    /* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
background-color: #555;
color: white;
padding: 16px 20px;
border: none;
cursor: pointer;
opacity: 0.8;
position: fixed;
bottom: 23px;
right: 28px;
width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
display: none;
position: fixed;
bottom: 0;
right: 15px;
border: 3px solid #f1f1f1;
z-index: 9;
}

/* Add styles to the form container */
.form-container {
max-width: 300px;
padding: 10px;
background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
width: 100%;
padding: 15px;
margin: 5px 0 22px 0;
border: none;
background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
background-color: #ddd;
outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
background-color: #04AA6D;
color: white;
padding: 16px 20px;
border: none;
cursor: pointer;
width: 100%;
margin-bottom:10px;
opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
opacity: 1;
}
body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('your-background-image.jpg'); /* Add your background image URL */
      background-size: cover;
      background-position: center;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
  }

  .form-container {
      background-color: rgba(0, 0, 0, 0.8);
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      width: 83%;
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
  }

  form {
      display: flex;
      flex-direction: column;
      align-items:left;
      width: 60%;
  }

  label {
      margin-top: 0px;
  }

  input, select, textarea {
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 100%;
  }

  .location-container {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
  }

  .location-input {
      position: relative;
      display: flex;
  }

  input#location {
      padding-right: 30px; /* Space for the icon */
  }

  button.location-button {
      background: none;
      border: none;
      cursor: pointer;
      margin-left: -30px; /* Adjust the margin based on your design */
  }

  button {
      padding: 10px;
      background-color: #e74c3c;
      color:black;
      border: none;
      cursor: pointer;
      border-radius: 4px;
      transition: background-color 0.3s, transform 0.3s;
  }

  button:hover {
      
      color: black;
      transform: translateY(-5px);
  }

    </style>
</head>

<body>
    
<?php
include("cus_nav.php");
?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-bg-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Auto service,
                                        Maintenance <span style="color: #d3071f;">&</span> Repair</h1>
                                        <button class="book-now" onclick="openForm()">Open Form</button>
                                    <!-- The form -->
<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <label for="fullName">Full Name:</label>
    <input type="text" id="fullName" name="fullName" required>

    <label for="vehicleType">Vehicle Type:</label>
    <select id="vehicleType" name="vehicleType" required>
        <option value="car">Car</option>
        <option value="bike">Bike</option>
    </select>

    <label for="problemDescription">Problem Description:</label>
    <textarea id="problemDescription" name="problemDescription" rows="4" required></textarea>

    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="phoneNumber">Phone Number:</label>
    <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{10}" required>

  
   
        <label for="location">Location:</label>
        <div class="location-container">
        <div class="location-input">
            <input type="text" id="location" name="location" readonly>
            <button type="button" class="location-button" onclick="getLocation()">
                <i class="fas fa-map-marker-alt"></i>
            </button>
            <br>
            </div>
    
  </form>
  </div>
  
  <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                                    
                                </div>
                                <div class="col-lg-5  animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-1.png" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-bg-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Your vehicle is in
                                        safe hand</h1>
                                    <button class="book-now">Book Now &rarr;</button>
                                </div>
                                <div class="col-lg-5  animated zoomIn">
                                    <img class="img-fluid" src="img/carousel-2.png" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3" style="color: red;">Quality Servicing</h5>
                            <p>Elevate your online experience with our unparalleled commitment to quality and seamless
                                website servicing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex  py-5 px-4">
                        <i class="fa fa-users-cog fa-3x text-primary "></i>
                        <div class="ps-4">
                            <h5 class="mb-3" style="color: red;">Expert Workers</h5>
                            <p>Empower your projects with the expertise of our dedicated and skilled workforce for
                                unparalleled success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex py-5 px-4">
                        <i class="fa fa-tools fa-3x text-primary flex-shrink-0"></i>
                        <div class="ps-4">
                            <h5 class="mb-3" style="color: red">Modern Equipment</h5>
                            <p>Enhance efficiency and innovation with our state-of-the-art modern equipment for
                                cutting-edge solutions and performance</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->




    <!-- Service Start -->
    <div class="container-xxl ">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">What we do</h6>
                <hr>
                <h1 class="mb-5" style="color: white;">Our Services</h1>
            </div>
            <div class="content_services">
                <div class="container_services" style="margin-right: 15px;">
                    <img src="img/oil.jpg" alt="oil" width="100%">
                    <div class="caption_service">
                        <p style="font-size: 5vh;">Change oil and Filter</p>
                    </div>
                </div>
                <div class="container_services" style="margin-right: 15px;">
                    <img src="img/engine.jpg" alt="oil" width="100%">
                    <div class="caption_service">
                        <p style="font-size: 5vh;">Engine Maintenance</p>
                    </div>
                </div>
                <div class="container_services" style="margin-right: 15px;">
                    <img src="img/tire.jpg" alt="oil" width="100%">
                    <div class="caption_service">
                        <p style="font-size: 5vh;">Tire change & Repair</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container-xxl ">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase">How we work</h6>
                    <hr>
                    <h1 class="mb-5" style="color: white;">Our Processes</h1>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="content_processes">
                        <div class="container_processes "
                            style="background-color: red; color: white; margin-left: 10vh;">
                            <div class="processes_text">
                                <b>Book the appointment</b>
                            </div>
                        </div>

                        <div class="container_processes">
                            <div class="processes_text">
                                <b> Bring the vehicle</b>
                            </div>
                        </div>
                        <div class="container_processes">
                            <div class="processes_text">
                                <b> something </b>
                            </div>
                        </div>
                        <div class="container_processes">
                            <div class="processes_text">
                                <b> Something </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Booking Start -->
            <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row gx-5">
                        <div class="col-lg-6 py-5">
                            <div class="py-5">
                                <h6 class="text-primary text-uppercase">Book Now</h6>
                                <h1 class="text-white mb-4">Make your appointment
                                </h1>
                                <p class="text-white mb-0">
                                    Get special repair service for your car from our experts with appointment
                                </p>
                                <br>
                                <h6 class="text-primary text-uppercase">Need any help?</h6>
                                <h1 class="text-white mb-4">9800000000
                                </h1>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                                data-wow-delay="0.6s">
                                <h1 class="text-white mb-4">Book For A Service</h1>

                                <button class="app-login">
                                   <a href="cus_login.php"> Login</a>
                                </button>
                                <br>
                                <p class="text-white mb-0">
                                    Don't have an account? </p>
                                <br>
                                <button class="app-login">
                                    <a href="cus_signupform.php">Signup</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Booking End -->


        
            <!-- Template Javascript -->
            <script src="js/main.js"></script>

       



<?php
include("cus_footer.php");
?>

</body>

</html>
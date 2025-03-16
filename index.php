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

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            margin-bottom:0;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            
        }

        .contact, .quick-links, .follow-us, .logo-container {
            flex: 1;
            text-align: left;
            margin-left: 100px;
        }

        .quick-links ul, .social-icons ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .quick-links li {
            margin-left: 0;
            margin-bottom: 10px;
        }

        .quick-links a, .social-icons a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
        }

        .quick-links a:hover, .social-icons a:hover {
            color: #ffcc00;
        }

        .social-icons li {
            margin: 0 10px;
        }

        .social-icons img {
            width: 50px;
            height: 50px;
        }

        .follow-us {
            margin-bottom: 10px;
            margin-left: 0;
        }

        .logo-container {
            text-align: left;
            margin-right: 100px;
        }

        .logo img {
            width: 150px;
            height: 150px;
            border: 1px solid white;
        }

        
        .rights-reserved {
            background-color: red;
            color: black;
            padding: 5px 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    
<?php
include("nav.php");
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
                                    <button class="book-now">Book Now &rarr;</button>
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
                                <b>Login/Signup</b>
                            </div>
                        </div>

                        <div class="container_processes">
                            <div class="processes_text">
                                <b> Book the appointment</b>
                            </div>
                        </div>
                        <div class="container_processes">
                            <div class="processes_text">
                                <b> Get your vechicle serviced </b>
                            </div>
                        </div>
                        <div class="container_processes">
                            <div class="processes_text">
                                <b>Contact Us </b>
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
                                    <a href="cus_login.php">Login</a>
                                </button>
                                <br>
                                <p class="text-white mb-0">
                                    <a href="cus_signupform.php">Don't have an account?</a> </p>
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

            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/counterup/counterup.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="lib/tempusdominus/js/moment.min.js"></script>
            <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
            <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>

<?php            
include("footer.php");
?>

</body>

</html>
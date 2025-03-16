
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
            margin: 0; /* Remove default margin for lists */
        }

        .quick-links li {
            margin-left: 0; /* Adjust margin to align with the heading */
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
            margin-left: 0; /* Adjust margin to align with the heading */
        }

        .logo-container {
            text-align: left;
            margin-right: 100px; 
        }

        .logo img {
            width: 150px; 
            height: 150px;
        ;
    border: 1px solid white;
}

.product-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-top: 30px;
  }

.product-card {
  width: 350px;
  background-color: #f9f9f9;
  border: 5px solid black;
  border-radius: 5px;
  padding: 10px;
  margin: 10px;
  
  }
.product-card img {
  width: 100%;
  height: 100 px;
  border-radius: 5px;
  margin-bottom: 10px;
}

.product-card h3 {
  margin: 0;
  font-size: 18px;
}

.product-card p {
  color: #020000;
  margin: 5px 0;
  justify-content:baseline;
  transition: transform 0.3s ease;
  text-align: justify;
}

.product-card h1 {
  font-size:15 px;
  color: #556B2F;
  margin-left: 5px;

}


.product-card:hover {
  transform: scale(1.15); 
  z-index: 0;
}
.rights-reserved {
            background-color: white;
            color: black;
            padding: 5px 5px;
            text-align: center;
        }


</style>
</head>
<script>
 
  document.addEventListener('DOMContentLoaded', function () {
    var productContainer = document.querySelector('.product-container');
    var productCards = document.querySelectorAll('.product-card');

    productCards.forEach(function (card) {
      card.addEventListener('mouseenter', function () {
        centerAndEnlargeCard(this);
      });

      card.addEventListener('mouseleave', function () {
        resetCardStyle(this);
      });
    });

    function centerAndEnlargeCard(card) {
      productCards.forEach(function (otherCard) {
        if (otherCard !== card) {
          otherCard.style.transition = 'filter 0.3s ease'; // Add filter transition to other cards
          otherCard.style.filter = 'blur(2px)';
        }
      });

      card.style.transform = 'scale(1.15) translateZ(15px)';
      card.style.filter = 'blur(0)';
      card.style.zIndex = '0';
    }

    function resetCardStyle(card) {
      productCards.forEach(function (otherCard) {
        if (otherCard !== card) {
          otherCard.style.transition = 'filter 0.3s ease'; // Add filter transition to other cards
          otherCard.style.filter = 'blur(0)';
        }
      });

      card.style.transform = 'scale(1)';
      card.style.filter = 'blur(0)';
      card.style.zIndex = '0';
    }
  });


</script>



<body background="k.jpg">

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
            <a class="nav-link" style="padding-left: 25vw; color: red;" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="padding-left: 2vw;" href="aboutus.php">About</a>
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
          <li class="log-nav" style="padding-left: 3vh;">
          <div class="dropdown">
        <button class="dropbtn">Signup</button>
        <div id="myDropdown" class="dropdown-content">
        <a href="cus_signupform.php">As Customer</a>
        <a href="mec_signupform.php">As Mechanic</a>
        </div>
        </div>
          </li>
          <li class="log-nav" style="padding-left: 3vh;">
          <div class="dropdown">
        <button class="dropbtn">Login</button>
        <div id="myDropdown" class="dropdown-content">
        <a href="cus_login.php">As Customer</a>
        <a href="mec_login.php">As Mechanic</a>
        </div>
        </div>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>
  

  
  
      <div class="product-container">
        <div class="product-card">
            <h1>About Us</h1>
            <img src="mech_logo.png" alt="Product 2" height="200 px">
            <br>
           <p>Online auto repair shops like T'ired provide a convenient and efficient solution for vehicle maintenance and repair services. These platforms typically operate through websites or mobile apps, offering users the ability to schedule various automotive services at their convenience. Key features of such online auto repair shops may include
          service booking,transparent pricing and qualified mechanics.
          
         
        </div>
        
        <div class="product-card">
          
          <h1>How We Work?</h1>
          <img src="2.webp" alt="Product 2" height="200 px"><br>
          <p>At T'ired, we're not just fixing cars; we're transforming the way you experience automotive services. Discover a new level of convenience, reliability, and trust with our streamlined approach to vehicle maintenance and repair. Your journey to a smoother ride starts here.
           
          We've redefined the automotive service experience with a commitment to simplicity, transparency, and efficiency. 
          </p>
        </div>
        
        <div class="product-card">
         
          <h1>Our Commitment</h1>
          <img src="bgcar.jpg" alt="Product 3" height="200 px"> <br>
          <p>At T'ired, our commitment goes beyond fixing vehicles; it's about building enduring relationships with our valued customers to experience automotive care that revolves around them.
          Our commitment is deeply rooted in the following principles:<br>
          (i)Quality Service<br>
          (ii)Convenience Redefined<br>
          (iii)Customer Satisfaction <br>
          (iv)State-of-the-Art Technology
</p>


        
        
        </div>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>

      <footer>
    <div class="footer-container">
        <div class="contact">
            <h4>Contact Us</h4>
            <p>Lokanthali, Bhaktapur, Nepal</p>
            <p>Email: tired_repair@gmail.com</p>
            <p>Phone: (+977) 9841257894</p>
        </div>
        <div class="quick-links">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="aboutus.php">About Us</a></li>
            </ul>
        </div>
        <div class="follow-us">
            <h4>Follow Us</h4>
            <ul class="social-icons">
                <li><a href="https://www.facebook.com/yogyata.neup"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="logo-container">
            <div class="logo">
                <img src="mech_logo.png" alt="Company Logo">
            </div>
        </div>
    </div>
    <div class="rights-reserved">
    All Rights Reserved to T'ired Automobile Garage
</div>

</footer>
</body>
</html>
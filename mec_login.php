<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
    background-color: #222;
    color: #fff;
    font-family: Arial, sans-serif;
}

.login-container {
    max-width: 300px;
    margin: 100px auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

input {
    width: 39vh;
    padding: 10px;
    margin: 10px 0;
    border: none;
    border-radius: 5px;
    background-color: #333;
    color: #fff;
}

input::placeholder {
    color: #888;
}

button {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: none;
    border-radius: 5px;
    background-color: #d00;
    color: #fff;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #fff;
    color: #000;
}

    </style>
    
    <script>
        document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;

    // Compare email and password with the values used during the signup
    // ...

    if (email && password) {
        // Login successful
        alert('Login successful');
    } else {
        // Invalid email or password
        alert('Invalid email or password');
    }
});
    </script>
</head>
<body>
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <a class="navbar-brand" href="#"><img style="height: 9vh; width: 15vh;" src="img/mech_logo.png"
                    alt="logo"></a> </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active" style="color: rgb(213, 39, 39);">Home</a>
                <a href="aboutus.php" class="nav-item nav-link" style="color: black;">About</a>
                <a href="service.php" class="nav-item nav-link" style="color: black;">Services</a>
                <a href="contact.html" class="nav-item nav-link" style="color: black;">Contact</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                        style="color: black;">Login</a>
                    <div class="dropdown-menu fade-up m-0">
                        <a href="mec_login.php" class="dropdown-item">For Mechanic</a>
                        <a href="cus_login.php" class="dropdown-item">For Customer</a>
                    </div>
                </div>

            </div>
            <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle px-lg-5" data-bs-toggle="dropdown">Signup</a>
                <div class="dropdown-menu fade-up m-0">
                    <a href="mec_signupform.php" class="dropdown-item">For Mechanic</a>
                    <a href="cus_signupform.php" class="dropdown-item">For Customer</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->
    <div class="login-container">
        <h1>Login</h1>
        <form id="login-form" action="mec_logindata.php" method="post">
            <input type="email" id="email" name="email" required>
            <input type="password" id="password" name="password" required>
            <button type="submit" value="submit" id="login-btn">Login</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
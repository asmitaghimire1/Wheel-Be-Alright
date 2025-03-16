<!DOCTYPE html> 
<html>
     <head>
         <title>Sign Up Page</title> 
         <style> 
         body { background-color: black; font-family: Arial, sans-serif; }

        h1 {
            color: white;
            text-align: center;
        }
    
        form {
            width: 300px;
            margin: 0 auto;
        }
    
        label {
            color: white;
        }
    
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="location"],
        input[type="tel"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
        }
    
        input[type="submit"] {
            background-color: red;
            color: white;
            cursor: pointer;
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            transition: 0.3s;
        }
    
        input[type="submit"]:hover {
            background-color: white;
            color: black;
        }
    </style>
    <script>
        function validateForm() {
            let x = document.forms["myForm"]["email"].value;
            let y = document.forms["myForm"]["password"].value;
            let z = document.forms["myForm"]["confirm_password"].value;
            let p = /^\d{10}$/;
            let m = document.forms["myForm"]["mobile"].value;
    
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
    
            let atpos = x.indexOf("@");
            let dotpos = x.lastIndexOf(".");
            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                alert("Not a valid e-mail address");
                return false;
            }
    
            if (y == "") {
                alert("Password must be filled out");
                return false;
            }
    
            if (z == "") {
                alert("Confirm Password must be filled out");
                return false;
            }
    
            if (y != z) {
                alert("Passwords do not match");
                return false;
            }
    
            if (m == "") {
                alert("Mobile Number must be filled out");
                return false;
            }
    
            if (!p.test(m)) {
                alert("Invalid Mobile Number");
                return false;
            }
        }
    </script>
    </head> 
    <body> 
        

    <?php
    include("b_nav.php");
    ?>

        <h1>Sign Up Page</h1>
         <form name="myForm" action="mec_signupdata.php" onsubmit="return validateForm()" method="post">
             <label for="fullname">Full Name:</label><br>
              <input type="text" id="fullname" name="fullname"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
    
        <label for="mobile">Mobile Number:</label><br>
        <input type="tel" id="mobile" name="mobile"><br>

        <label for="location">Location:</label><br>
        <input type="location" id="location" name="location"><br>
    
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
    
        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password"><br>
    
        <input type="submit" value="Submit">
    </form>
    </body> </html>
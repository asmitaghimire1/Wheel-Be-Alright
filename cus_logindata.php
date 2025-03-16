<?php      
// Start the session

session_start();
        include('connection.php');  
        $username = $_POST["email"];  
        $password = $_POST["password"];  
          
            //to prevent from mysqli injection  
            $username = stripcslashes($username);  
            $password = stripcslashes($password);  
            $username = mysqli_real_escape_string($con, $username);  
            $password = mysqli_real_escape_string($con, $password);  

           // var_dump($username,$password);
            
            $user = "SELECT * FROM customer WHERE c_email='$username'";
            $user_get = $con->query($user);
            $row = mysqli_fetch_assoc($user_get);
           // var_dump($row['m_name']);             
            if($username == $row['c_email'] && $password == $row['c_pw'])
            {
                // print_r('yes');       
                // destroy the session       
                $_SESSION['email']=$username;       
                header("Location: http://localhost/wheel/cus_index.php");   
                die;    
            }else{     
                 
                $_SESSION["forget_message"] = "You have entered wrong password or username";
                header("Location: http://localhost/wheel/cus_login.php");
            }      
                die();
    ?> 
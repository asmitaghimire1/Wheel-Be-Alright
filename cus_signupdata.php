<?php
include("connection.php");
$c_name=$_POST["fullname"];
$c_phone=$_POST["mobile"];
$c_email=$_POST["email"];
$c_location=$_POST["location"];
$c_pw=$_POST["password"];

var_dump($c_name,$c_phone,$c_email,$c_location,$c_pw);

$sql="INSERT INTO customer (c_name,c_phone,c_email,c_location,c_pw)
      VALUES ('$c_name','$c_phone','$c_email','$c_location','$c_pw')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
<?php
include("connection.php");
$m_name=$_POST["fullname"];
$m_phone=$_POST["mobile"];
$m_email=$_POST["email"];
$m_location=$_POST["location"];
$m_pw=$_POST["password"];

var_dump($m_name,$m_phone,$m_email,$m_location,$m_pw);

$sql="INSERT INTO mechanic (m_name,m_phone,m_email,m_location,m_pw)
      VALUES ('$m_name','$m_phone','$m_email','$m_location','$m_pw')";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
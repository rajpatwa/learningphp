<?php
include "conn.php";

if(isset($_POST['submit'])){
      $fullname = $_POST['fullname'];
      $gender = $_POST['gender'];
      $age = $_POST['age'];
      $address = $_POST['address'];

  $sql = "INSERT into students (name,gender,age,address) VALUES ('$fullname','$gender','$age','$address')";
    if($conn->query($sql)=== TRUE){
        echo "Student added successfully!";
    } else{
      echo "Student not added.". $conn->error;
    }
}

<html>
  <head></head>
  <body>
    <form method = "POST" action ="">
  Name:<input type = "name" name = "fullname"  placeholder ="Enter the Full Name."><br>
  Gender:<input type = "" name = "gender"  placeholder ="Enter the gender.."><br>
  </form>
  </body>

<?php
  
  $fname = $_POST['fname'];
  $jobdesc = $_POST['jobdesc'];
  $days = $_POST['days'];
  $salary = $_POST['salary'];
  $skills = $_POST['skills'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $number = $_POST['number'];


  //Database connection

  $conn = new mysqli('remotemysql.com','964yLLIoDE','nZHgpFUlBw','964yLLIoDE');
  if($conn->connect_error){
      die('Connecttion Failed :' .$conn->connect_error);
  }else{
      $stmt = $conn->prepare("insert into jobform(fname, jobdesc, days, salary, skills, age, gender,email,number) values(?,?,?,?,?,?,?,?,?)");
      
      $stmt->bind_param("sssisissi",$fname, $jobdesc, $days, $salary, $skills, $age, $gender,$email,$number);
      $stmt->execute();
      header('location: joblistreplica.php');
      $stmt->close();
      $conn->close();


  }



?>
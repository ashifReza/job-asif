<?php

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$number = $_POST['number'];
$quali = $_POST['quali'];



//Database connection

$conn = new mysqli('remotemysql.com','964yLLIoDE','nZHgpFUlBw','964yLLIoDE');
  if($conn->connect_error){
      die('Connecttion Failed :' .$conn->connect_error);
  }else{

    $stmt = $conn->prepare("insert into proform(name,address,email,number,quali) values(?,?,?,?,?)") ; 
    $stmt->bind_param("sssis",$name,$address,$email,$number,$quali);
    $stmt->execute();
    header('location: profilereplica.php');
    $stmt->close();
    $conn->close();


  




}

?>
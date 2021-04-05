<?php

$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$number = $_POST['number'];



//Database connection

$conn = new mysqli('localhost','root','','mydb');
  if($conn->connect_error){
      die('Connecttion Failed :' .$conn->connect_error);
  }else{

    $stmt = $conn->prepare("insert into proform(name,address,email,number) values(?,?,?,?)") ; 
    $stmt->bind_param("sssi",$name,$address,$email,$number);
    $stmt->execute();
    header('location: profile.php');
    $stmt->close();
    $conn->close();


  




}

?>
<?php 

//Dev Section
//$sName = "localhost";
//$uName = "root";
//$pass = "";
//$db_name = "mydb";

//Remote Database Connection
$sName = "remotemysql.com";
$uName = "964yLLIoDE";
$pass = "nZHgpFUlBw";
$db_name = "964yLLIoDE";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}
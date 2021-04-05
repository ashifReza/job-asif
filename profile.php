<?php
require 'db_conn.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\profile.css">

    <style>

         .topbar h2
           {
                 
            float:left;
            color:black;
            text-align: center;
            padding: 20px 26px;
            text-decoration: none;
            font-size: 40px;
            font-weight: bold;


           }



    </style>

</head>
<body>


<div class="container">
    <div class="main">
        <div class="topbar">

            <a href="login.html">logout</a>
            <a href="">support</a>
            <a href="joblist.php">work</a>
            <a href="jf.html">home</a>
            <h2>Employees Page</h2>

        </div>
      <!--  <div class="row">
            <div class="col-md-4 mt-1">
                <div class="card text-center sidebar">
                    <div class="card-body">
                        <img src="https://www.pngitem.com/pimgs/m/146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png"  width="150">
                        <div class="mt-3"></div>
                        <h3>SIMPSON</h3>
                        
                       
                        <a href="">work</a>
                        <a href="">home</a>
                        <a href="">support</a>
                        <a href="">setting</a>
                        <a href="">signout</a>

                    </div>
                </div>
            </div> -->

            <?php
        
           $proform = $conn->query("SELECT * FROM proform ");

           ?>
            
            
            
            
            
            <?php while($proformm = $proform->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="col-md-8 mt-1">
                <div class="card mb-3 content">
                    <h1 class="m-3 pt-3">about</h1>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <h5>full name</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                            <?php echo $proformm['name'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>email</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                            <?php echo $proformm['email'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Phone</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                            <?php echo $proformm['number'] ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Address</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                            <?php echo $proformm['name'] ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- This Section was for projects -->
           
                 <!-- This Section was for projects -->
            </div>
            <?php } ?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        </div>
    </div>


</div>







    <script src="js\bootstrap.min.js"></script>
</body>
</html>
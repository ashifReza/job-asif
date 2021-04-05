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


           .sidebar h2{

                 font-weight: bold;


           }

    </style>

</head>
<body>


<div class="container">
    <div class="main">
        <div class="topbar">

            <a href="login.html">logout</a>
            <a href="profile.php">Employees</a>
            <a href="joblist.php">work</a>
            <a href="jf.html">home</a>
            <h2>Profile Page</h2>

        </div>
        <div class="row">
            <div class="col-md-4 mt-1">
                <div class="card text-center sidebar">
                    <div class="card-body">
                        <img src="https://www.pngitem.com/pimgs/m/146-1468479_my-profile-icon-blank-profile-picture-circle-hd.png"  width="150">
                        <div class="mt-3"></div>
                        <h3>Remember</h3>
                        
                       
                       <h2>
                       “ Choose a job you love, and you will never have to work a day in your life."
                       </h2>

                    </div>
                </div>
            </div> 

            <?php
        
           $proform = $conn->query("SELECT * FROM proform WHERE id=6 ");

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
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Qualifications</h5>
                            </div>
                            <div class="col-md-9 text-secondary">
                            <?php echo $proformm['quali'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 content">
                    <h1 class="m-3">Applied Job</h1>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Job name</h5>
                            </div>

                          
                              <?php 
                              
                              
                              echo $_GET['nm']  
                              
                              
                              
                              ?>
                           
                         
                            <div class="col-md-9 text-secondary">
                          
                            </div>

                            
                           
                        
                        
                        
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        </div>
    </div>


</div>







    <script src="js\bootstrap.min.js"></script>
</body>
</html>
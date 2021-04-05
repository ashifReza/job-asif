<?php
require 'db_conn.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job List Page</title>
    <link rel="stylesheet" href="css/joblist.css">

  
</head>




<body>

    <div class="main section">
        <h1 class="neon">[ Job Listing ] ( ͡ᵔ ͜ʖ ͡ᵔ) </h1>
        <?php
        
           $jobform = $conn->query("SELECT * FROM jobform ORDER BY id DESC ");

        ?>
         <div class="show-todo-section">
             <?php 
             
             if($jobform->rowCount() <= 0) { ?>
         <div class="todo-item">
              <div class="empty">
                  <img src ="f.png" width="100%">
                  <img src="Ellipsis.gif" width="80px">
              </div>
          </div>
       <?php } ?>

           <?php while($jobformm = $jobform->fetch(PDO::FETCH_ASSOC)) { ?>
           <div class="todo-item">
               <!-- <input type="button"> -->
               <h2><?php echo $jobformm['fname'] ?> </h2>
               <br>
               <small style="font-weight:bold">Job Description -</small> <small><?php echo $jobformm['jobdesc'] ?> </small> 
               <small style="font-weight:bold">Skills - </small> <small><?php echo $jobformm['skills'] ?> </small>
               <small style="font-weight:bold">Salary -  <?php echo $jobformm['salary'] ?> </small>
               <small style="font-weight:bold">Number of Working Days -  <?php echo $jobformm['days'] ?> </small>
               <small style="font-weight:bold">Minimun Age -  <?php echo $jobformm['age'] ?> </small>
               <small style="font-weight:bold">Gender(Male(m),Female(f),Both(o) - <?php echo $jobformm['gender'] ?> </small>
               <small style="font-weight:bold">Contact Email - <?php echo $jobformm['email'] ?> </small>
               <small style="font-weight:bold">Contact Number( Phone/Mobile ) - <?php echo $jobformm['number'] ?> </small>
                 
               
              
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            </div>
           <?php } ?>



         </div>







    </div>

   
    
</body>
</html>
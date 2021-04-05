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

    <style>
           
           button{

            position:relative;
            
            left:70%;
            display: block;
	        background: #00A9D4;
	        color: #fff;
	        padding: 15px;
	        cursor: pointer;
	        text-decoration: none;
	        width: 320px;
	        text-align: center;
	        border-radius: 5px;
	        font-size: 20px;

           }

           button:hover {
	               
            background: #00729D;
                       
                }

                
                
                
                
                
                
  .popup .overlay {
  position:fixed;
  top:0px;
  left:0px;
  width:100vw;
  height:100vh;
  background:rgba(0,0,0,0.7);
  z-index:1;
  display:none;
}
 
.popup .content {
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%) scale(0);
  background:#fff;
  width:500px;
  height:170px;
  z-index:2;
  text-align:center;
  padding:20px;
  box-sizing:border-box;
  font-family:"Open Sans",sans-serif;
  color:darkgreen;
}
 
.popup .close-btn {
  cursor:pointer;
  position:absolute;
  right:20px;
  top:20px;
  width:30px;
  height:30px;
  background:#222;
  color:#fff;
  font-size:25px;
  font-weight:600;
  line-height:30px;
  text-align:center;
  border-radius:50%;
}
 
.popup.active .overlay {
  display:block;
}
 
.popup.active .content {
  transition:all 300ms ease-in-out;
  transform:translate(-50%,-50%) scale(1);
}







     </style>
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
               <small style="font-weight:bold">Salary - <?php echo $jobformm['salary'] ?> </small>
               <small style="font-weight:bold">Number of Working Days -  <?php echo $jobformm['days'] ?> </small>
               <small style="font-weight:bold">Minimun Age -  <?php echo $jobformm['age'] ?> </small>
               <small style="font-weight:bold">Gender(Male(m),Female(f),Both(o) - <?php echo $jobformm['gender'] ?> </small>
               <small style="font-weight:bold">Contact Email - <?php echo $jobformm['email'] ?> </small>
               <small style="font-weight:bold">Contact Number( Phone/Mobile ) - <?php echo $jobformm['number'] ?> </small>
                 
               
               <div class="popup" id="popup-1">
                 <div class="overlay"></div>
                    <div class="content">
                      <div class="close-btn" onclick="togglePopup()">&times;</div>
                         <h1>   Are You Sure, Please Type in The Job Name to Confirm</h1>
                         
                           
                         
                           
                            <form action="profilereplica.php">

                          
                            <input type="text" name="nm" value="" >
                         
                          
                        <input type="submit" value="Yes" name="post" id="post">
                                
                         </form>
                        
                         
                        
                           
                        </div>
                      </div>
 
                           <button onclick="togglePopup()">Apply</button>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            </div>
           <?php } ?>



         </div>







    </div>

    <script src="message.js"></script>
    
</body>
</html>
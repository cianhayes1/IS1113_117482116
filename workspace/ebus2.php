<?php

session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        
      
      <style type="text/css">
          
          #payment-details{
                    position:fixed;
                    top:30%;
                    left:20%;
                    z-index:1;
                    color:white;
                   
              
          }
          
          
      </style>
        
    </head>
    <body>
        
      
        
        <ul>
    <li><a href="homepage.html">IS1113 Project</a></li>
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Curriculum Vitae</a>
    <div class="dropdown-content">
      <a href="cv_page1.html">Personal</a>
      <a href="cv_page2.html">Education</a></a>
      <a href="cv_page3.html">Work Experience</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Interests/Hobbies</a>
    <div class="dropdown-content">
      <a href="sport.html">Sport</a>
      <a href="travel.html">Travel</a></a>
    </div>
  </li>
  <li><a href="ebus1.php">Cloud Sevices</a></li>
  
</ul>
              
              <div id="payment-details">
                <h4>Please enter your payment details</h4>
                
                
                    <form action="ebus3.php" method="POST">
                      
                      <label for="user_name">Name:</label> <br><br>
                      
                      <input type="text" id="user_name" name="user_name" placeholder="John Appleseed" maxlength="30"> <br><br><br>
                      
                      <label for="user_email">Email:</label> <br><br>
                      
                      <input type="text" id="user_email" name="user_email" placeholder="johnappleseed@ucc.ie" maxlength="25"> <br><br><br>
        
                      <label for="user_pin">PIN:</label> <br><br>
                      
                      <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4"> <br><br>
  
                     <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                      
                    </form>
                    
                    <br/>
                    <button onClick="validateDetails()">Validate</button>
                    
                </div>   
                
                <?php
                // Set session variables
                $_SESSION["total"] = $_POST["total"];
                ?>
                
    </body>
</html>
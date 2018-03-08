<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Cloud Services | Products</title>
        
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>
      
        <style type="text/css">
            
            #receipt{
                      position:fixed;
                      top:24%;
                      left:2%;
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
      <a href="#cloudservice">Cloud Services</a>
    </div>
  </li>
  <li><a href="ebus1.php">Cloud Services</a></li>
  
</ul>
        
        <div id="receipt">
        
        <h4>Purchase Receipt</h4>
        
        <?php
        // Set session variables
        $_SESSION["user_name"] = $_POST["user_name"];
        $_SESSION["user_email"] = $_POST["user_email"];
        ?>
        
        
        <?php
        // Echo session variables that were set on previous page
        echo "Name: " . $_SESSION["user_name"] . ".";
        ?>
        
        <br/>
        <br/>
        
        <?php
        echo "Email: " . $_SESSION["user_email"] . ".";
        ?>
        <br/>
        <br/>
        <?php
        echo "Total Price: € " . $_SESSION["total"] . ".";
        ?>
        
        
        </div>
    </body>
</html>
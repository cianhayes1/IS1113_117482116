<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Cloud Services | Products</title>
        
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>
        
        <!--jQuery-->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="costcalc.js"></script>
        
        
      
      <style type="text/css">
          
          #products{
                    position:fixed;
                    top:29%;
                    left:15%;
                    z-index:1;
                    color:white;
                    background-color:#428ff4;
                    padding:1%;
                    width:45%;
                   font-size:11pt;
                   font-family: sans-serif;
                   
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
      <a href="aboutcloud.html">About Cloud</a>
    </div>
  </li>
  <li><a href="ebus1.php">Cloud Services</a></li>
  
</ul>
              
            <div id="products">
          
              <h3>Please Choose a Product</h3>
          
            
            <form method="POST" action="ebus2.php">
              
             <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail - €400
              </label>
              
              <br/>
    
               <label for="salesforce">
                <input type="radio" id="salesforce" name="product" onClick="disablebtnProceed()"/>
                SalesForce - €100
              </label>
              
              <br/>
             
             <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 - €200
              </label>
              
              <br/>
              
              <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services - €300
              </label>
              
            <br/>
            <br/>
             
              <label for="subtotal">
                Sub Total:
                <input type="text" id="subtotal" value="0.00" readonly style="mystylesheet.css"/>
              </label>
              
              <br>
              <br>
              
              <label for="discount">
                Discount @ 5%: 
                <input type="text" id="discount" value="0.00" readonly style="mystylesheet.css"/>
              </label>
              
              <br>
              <br>
              
               <label for="vat">
                VAT @ 10%: 
                <input type="text" id="vat" value="0.00" readonly style="mystylesheet.css"/>
              </label>
              
              <br>
              <br>
              
              <label for="total">
                Total: 
                <input type="text" id="total" name="total" value="0.00" readonly style="mystylesheet.css"/>
              </label>
    
              <br>
              <br>
              <br>
              
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            <button type="submit" id="btnProceed" disabled style="mystylesheet.css">Add to Shopping Cart</button>
             
    
            </form>
            <br/>
            
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            
            <button onClick="calculateTotal()" id="btnCalculateTotaletotal" style="mystylesheet.css">Calculate Cost</button>
            
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            
            <a role="button" id="clearchoice" href="ebus1.php"><b>Clear Choice</b></a>
            
           
        </div>
        
        
    
    </body>
</html> 
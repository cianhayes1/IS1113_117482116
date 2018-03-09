/* global $ */

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}

function validateDetails(){
    
   
    
    var pin, name, email;
    
    pin = document.getElementById("user_pin").value;
    
    name = document.getElementById("user_name").value;
    
    email = document.getElementById("user_email").value;
    
    
    if (pin == ""){
        alert("Please enter your PIN");
    }
    
   else if (String(pin).length < 4){
        alert("Please retry pin");
    }
    
   else if (name == ""){
        alert("Please enter your name");
    }
    
   else if (email == ""){
        alert("Please enter your e-mail");
    }
    else{
        enablebtnPurchase();
    }
    
}


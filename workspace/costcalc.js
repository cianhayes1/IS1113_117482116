/* global $ */

function calculateTotal(){
    
    var argTotal;
    
    if(document.getElementById('salesforce').checked) {
      argTotal = 100;
      ('cloud9').checked = false;
    
    }
    else if(document.getElementById('cloud9').checked) {
      argTotal = 200;
    }
    else if(document.getElementById('aws').checked) {
      argTotal = 300;
    }
    else if(document.getElementById('gmail').checked) {
      argTotal = 400;
    }
    else {
      argTotal = 0;
       ('#btnProceed').prop('disabled', true);
    }
    
    calcDisVatTotal(argTotal);
}

function display(parm1, parm2, parm3, parm4){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("discount").value = parm2;
  document.getElementById("vat").value = parm3;
  document.getElementById("total").value = parm4;
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
    document.getElementById("btnProceed").style.backgroundColor = "#1faf07";
    document.getElementById("btnProceed").style.borderColor = "#1faf07";
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}

function calcDisVatTotal(parmSubTotal){
    
    var subTotal, discountAmt, vatAmt, totalPrice, newTotal;
    
    subTotal = parmSubTotal;
    
    discountAmt = subTotal * 0.05;
    
    newSubTotal = subTotal - discountAmt;
    
    vatAmt = newSubTotal * 0.10;
    
    totalPrice = ((subTotal + vatAmt) - discountAmt);
    
    display(subTotal, discountAmt, vatAmt, totalPrice);
    
}
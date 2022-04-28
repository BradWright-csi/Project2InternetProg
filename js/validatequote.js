
/**
 * Validates quotes fields
 */

 "use strict";
 function emailvalidation(id)
 {
     
     var field = id.value;
     var good = false;
     if(field=="")
     {
         document.getElementById("emailmsg").innerHTML="Please enter your email";
         document.getElementById("emailmsg").className="text-danger";
     }
     else
     {
         var hasDot = field.indexOf(".");
         var hasAt = field.indexOf("@");
         if(/^(.+)@(.+)$/.test(field) == false)
         {
             document.getElementById("emailmsg").innerHTML=("Please enter a valid email");
             document.getElementById("emailmsg").className="text-danger";
         }
         else
         {
             document.getElementById("emailmsg").innerHTML="";
             good = true;
         }
     }
 
     return good;
     
 }
 
 function validatephone(id)
 {
     var field = id.value;
     var good = false;
 
     if(field=="")
     {
         document.getElementById("phonemsg").innerHTML="Please enter your phone number";
         document.getElementById("phonemsg").className="text-danger";
     }
     else
     {
         if(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/.test(field) == false)
         {
             document.getElementById("phonemsg").innerHTML=("Please enter a valid phone number");
             document.getElementById("phonemsg").className="text-danger";
         }
         else
         {
             document.getElementById("phonemsg").innerHTML="";
             good = true;
         }
     }
 
     return good;
 }
 
 function validatecard(id)
 {
     var field = id.value;
     var good = false;
 
     if(field=="")
     {
         document.getElementById("cardmsg").innerHTML="Please enter your card number (16-digits)";
         document.getElementById("cardmsg").className="text-danger";
     }
     else
     {
         if(/^[0-9]{16}$/.test(field) == false)
         {
             document.getElementById("cardmsg").innerHTML=("Please enter a valid card number (16-digits)");
             document.getElementById("cardmsg").className="text-danger";
         }
         else
         {
             document.getElementById("cardmsg").innerHTML="";
             good = true;
         }
     }
 
     return good;
 }
 
 function validate(id)
 {
     var emaildID = document.getElementById("email");
     var phoneID = document.getElementById("phone");
     var cardID = document.getElementById("creditcard");
     if(emaildID.value=="" || phoneID.value=="" || cardID.value=="" )
     {
         return false;
     }
     else if(validatephone(phoneID) && emailvalidation(emaildID) && validatecard(cardID))
     {
         return true;
     }
     else
     {
         return false;
     }
 }
 
 function validateSignup(id)
 {
     var emaildID = document.getElementById("email");
     var usernameID = document.getElementById("name");
     var passwordID = document.getElementById("pwd");
 
     usernameID.innerHTML=("");
     passwordID.innerHTML=("");
 
     if(emaildID.value=="" || usernameID.value=="" || passwordID.value=="" )
     {
         if(usernameID.value=="")
         {
             document.getElementById("namemsg").innerHTML=("Please enter your name");
         }   
         if(passwordID.value=="")
         {
             document.getElementById("pwdmsg").innerHTML=("Please enter your password");
         }   
         return false;
     }
     else if(emailvalidation(emaildID))
     {
         return true;
     }
     else
     {
         return false;
     }
 }

/**
 * Validates quotes fields
 */

 "use strict";
 function descvalidation(id)
 {
     
     var field = id.value;
     var good = false;
     if(field=="")
     {
         document.getElementById("descmsg").innerHTML="Please enter a description";
         document.getElementById("descmsg").className="text-danger";
     }
     else
     {
        document.getElementById("descmsg").innerHTML="";
        good = true;
     }
 
     return good;
     
 }
 
 function quantvalidate(id)
 {
     var field = id.value;
     var good = false;
 
     if(field=="")
     {
         document.getElementById("quantmsg").innerHTML="Please enter a quantity";
         document.getElementById("quantmsg").className="text-danger";
     }
     else
     {
         if(field=="e")
         {
             document.getElementById("quantmsg").innerHTML=("Please enter a valid number");
             document.getElementById("quantmsg").className="text-danger";
         }
         else
         {
             document.getElementById("quantmsg").innerHTML="";
             good = true;
         }
     }
 
     return good;
 }
 
 function validate(id)
 {
     var descID = document.getElementById("desc");
     var quantID = document.getElementById("quant");
     if(descID.value=="" || quantID.value=="")
     {
         return false;
     }
     else if(quantvalidate(quantID) && emailvalidation(descID))
     {
         return true;
     }
     else
     {
         return false;
     }
 }
 
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

 function validateSignup(id)
 {
     var emailID = document.getElementById("email");
     var usernameID = document.getElementById("name");
     var passwordID = document.getElementById("pwd");
 
     usernameID.innerHTML=("");
     passwordID.innerHTML=("");
     emailID.innerHTML=("");
 
     if(emailID.value=="" || usernameID.value=="" || passwordID.value=="" )
     {
         if(usernameID.value=="")
         {
            document.getElementById("namemsg").innerHTML=("Please enter your name");
            document.getElementById("namemsg").className="text-danger";
        }   
         if(passwordID.value=="")
         {
            document.getElementById("pwdmsg").innerHTML=("Please enter your password");
            document.getElementById("pwdmsg").className="text-danger";
        }   
         if(emailID.value=="")
         {
            document.getElementById("emailmsg").innerHTML=("Please enter your email");
            document.getElementById("emailmsg").className="text-danger";
        }   
         return false;
     }
     else if(emailvalidation(emailID))
     {
         return true;
     }
     else
     {
         return false;
     }
 }
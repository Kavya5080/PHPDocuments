
function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
{
alert("Only Number");
            return false;
}
else
{

         return true;
}
      }

function verifyPassword() {  
  var pw = document.getElementById("Pass").value;  
  
  if(pw.length < 8) {  
     alert("**Password length must be atleast 8 characters");  
     
  }  
  
//maximum length of password validation  
  if(pw.length > 15) {  
     alert("**Password length must not exceed 15 characters");  
     
  } 
}  

 function Validate() {

        var password = document.getElementById("Pass").value;

        var confirmPassword = document.getElementById("Pass1").value;

        if (password != confirmPassword) {
           
             alert("Passwords do not match.");
        }
      
    
}

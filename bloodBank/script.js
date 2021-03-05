//Show and hide div based on user type
function showhidediv() {
    var userType = document.getElementById("userType");
    var hospitalDiv = document.getElementById("hospitalDiv");
    var userDiv = document.getElementById("userDiv");
    if (userType.value == "2") {
        if (userDiv.style.display === "none") {
            userDiv.style.display = "block";
            hospitalDiv.style.display = "none";
        } else {
            hospitalDiv.style.display = "none";
        }
    }
    else if (userType.value == "1") {

        if (hospitalDiv.style.display === "none") {
            hospitalDiv.style.display = "block";
            userDiv.style.display = "none";
        } else {
            userDiv.style.display = "none";
        }
    }
}

// prompt for unit
function myFunction() {
    

  }

//   get row value

//Date picker


//Phone number validation
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        alert("Only Number");
        return false;
    }
    else {

        return true;
    }
}

//Password validation
function verifyPassword() {
    var pw = document.getElementById("Pass").value;

    if (pw.length < 8) {
        alert("**Password length must be atleast 8 characters");

    }

    //maximum length of password validation  
    if (pw.length > 15) {
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

//email validation
function validateEmail(emailField) {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if (reg.test(emailField.value) == false) {
        alert('Invalid Email Address');
        return false;
    }

    return true;

}




$("#datepicker").datepicker({
    maxDate: 0
});



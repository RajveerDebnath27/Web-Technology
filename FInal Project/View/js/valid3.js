// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}



// Defining a function to validate form
function validateForm() {
    // Retrieving the values of form elements
    var f_name = document.signup-user.fname.value;
   
    var mail = document.signup-user.email.value;
    var password = document.signup-user.password.value;
    



   // Defining error variables with a default value
    var fnameErr = lnameErr = emailErr  =passwordErr= true;



   // Validate first name
    if (f_name == "") {
        printError("fnameErr", "Please enter your  name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if (regex.test(f_name) === false) {
            printError("fnameErr", "Please enter a valid  name");
        } else {
            printError("fnameErr", "");
            fnameErr = false;
        }
    }



 



   // Validate email address
    if (mail == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        var regex = /^\S+@\S+\.\S+$/;
        if (regex.test(mail) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else {
            printError("emailErr", "");
            emailErr = false;
        }
    }



   // Validate password
    if (password == "") {
        printError("passwordErr", "Please enter your password");
    } else {
        var regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
        if (regex.test(password) === false) {
            printError("passwordErr", "Password should contain at least one number, one uppercase character and one special character");
        } else {
            printError("passwordErr", "");
            passwordErr = false;
        }
    }





   // Prevent the form from being submitted if there are any errors
    if ((fnameErr ||passwordErr || emailErr) == true)
     {
        return false;
    }
    else {




    }
};
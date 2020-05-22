
//SIGN UP FORM VALIDATION
$(document).ready(function () {
    $("#register").click(function () {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
       
        if (email.indexOf("@") < 1 || email.lastIndexOf(".") < email.indexOf("@") + 2 || email.lastIndexOf(".") + 2 >= email.length) {
            invalid.push("*Email");
        }

        if (password.length < 4 ) {
            invalid.push("*Password");
        }
        return true;
    });
});

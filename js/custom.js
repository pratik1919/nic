/**
 * Created by Sujan  Chauhan on 1/24/2017.
 */

function checkName(){
    var letters = /^[A-z ]+$/;
   /* var fullName = document.getElementsByName("name").value;*/
    var fullName = document.forms["myForm"]["name"].value;
    /*alert (fullName)*/
    if(fullName.match(letters))
    {
        return true;
    }
    else
    {
        alert("Please enter characters only!");
        return false;
    }
}

function validateEmail() {
    var emails = /\S+@\S+\.\S+/;
    var email = document.forms["myForm"]["email"].value;
    /*alert (email)*/
/*
    if(email.match(emails)) {
         return true;
         }
         else{
         alert("Please enter the correct format");
         return false;
         }*/
        $.ajax({
            url: "../controller/checkEmail.php",
            type: "POST",
            data: {email: email},
            success: function (data) {
                console.log(data)
                $( '#error-email' ).attr(data);
                if(data=="ok")
                {
                    $('#error-email').attr('style', "display:none")
                }
                else
                {
                    $('#error-email').attr('style', "display:block")
                }
            }
        });
    }

function passLength(){
    var password = document.getElementById("password");
    var len = password.value.length;
    /*alert (password)*/
    if(len.value=='' || len<6){
        alert("Please enter the at least 6 character for password")
        return false;

    }
    else{
        return true;
    }

}

function validateUsername() {
    var reg1= /^[a-zA-Z0-9]*$/;
    var reg2 = /^[A-z]+$/;
    var username = document.forms["myForm"]["username"].value;
    var message = document.getElementById('error-username');
    /*alert (username);*/
   /* if(username.match(reg2) || username.match(reg1)) {
        return true
         return true;
         }

         else{
         alert("You have entered invalid format");
         return false;
         }*/


            $.ajax({
                url: "../controller/usernameExist.php",// your username checker url
                type: "POST",
                data: {username: username},
                success: function (data) {
                    $('#error-username').attr(data);
                    if (data == "OK") {
                       /* alert("Success");*/
                        $('#error-username').attr('style', "display:none")
                    }
                    else {
                        $('#error-username').attr('style', "display:block")
                    }
                }
            });
}

$(document).ready(function () {
    $('#login').click(login);
    $('#register').click(register);


    //assign event listener to login & register buttons

   //grab email and pwd fields

   //validate the data in the fields
    //if valid - send the request to DB to register
    //validate on the backend, if not valid, send the response back
    //JS check the response. If positive - redirect to welcome page. Otherwise show the error message on the page
});

function login(event) {
    alert("LOGIN FUNC1");
    let email =$('#username').val();
    event.preventDefault();
    //check if email is valid
    let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    let isEmailValid = re.test(String(email).toLowerCase());

    //if
    $.ajax({
        type: "POST",
        url: "model/requestHandler.php",
        cache: false,
        data: {
            command: "login",
            email: email
        },
        error: function(response, status, error) {
            alert("Error: " + error);
        },
        success: function(data, status, response) {
            alert(data);
        }
    });
    // -- No --
    // $.post("model/requestHandler.php",
    //     {
    //         command: "login"
    //     }, function (response) {
    //         alert(response);
    //  });
    //if not valid send error

    //if valid check if in data base // if is in database, start session and redirect

    //if not in data base throw error

}

function register(event) {
    let register = $("#").val();
    if (register.length !== 10) {
        // reportError("register", "register);
        isError = true;
    }
}
function validate() {
    //prevent the form from submitting to results.php

    event.preventDefault();
    removeErrorDivs();

    let isError = false;

    //Password - must be 10 characters
    let id = $("#password").val();
    if (id.length !== 10) {
        reportError("Password error", "8-16 characters");
        isError = true;
    }

}

function reportError(id, message) {
    let warningDiv = "#" + id;
    let warningText = "#" + id + " span";

    $(warningDiv).show();
    $(warningText).html(message);
}

function removeErrorDivs() {
    let divs = ["#password-error"];

    for (let i = 0; i < divs.length; i++) {
        $(divs[i]).hide();
    }
}
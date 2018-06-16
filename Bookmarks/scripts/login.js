$(document).ready(function () {
    $('#login').click(login);
    $('#register').click(register);


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
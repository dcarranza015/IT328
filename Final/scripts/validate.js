$(document).ready(function () {
    $('button[type="submit"]').on("click", validate);
});

function validate(event) {
    //prevent the form from submitting to results.php

    event.preventDefault();
    removeErrorDivs();

    let isError = false;

    //employee id - must be 10 characters
    let id = $("#inputPassword").val();
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
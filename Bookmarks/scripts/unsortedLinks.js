$(document).ready(function() {
    $('#createList').click(addNewList);
    $('#addBookmark').click(addNewBookmark);

});

function addNewList(event) {
    //stop the form from posting
    event.preventDefault();

    //read in my form values
    let name = $('input[name="name"]').val();
    let rating = $('input[name="rating"]').val();
    let link = $('input[name="link"]').val();


    //update our UI (user interface)
    addTableRow(name, rating, link);

    //send the data to the server (DB)
    insertBookmarkDB(name, rating, link);
}

function addTableRow(name, rating, link) {
    //create an array for our cells to reduce redundacy
    let parts = [name, rating, link];
    let row = document.createElement("tr");

    //create each cell
    for (let i = 0; i < parts.length; i++) {
        let cell = document.createElement("td");
        cell.innerHTML = parts[i];
        row.appendChild(cell);
    }

    //add the edit link
    let editLink = document.createElement("link");
    let edit = document.createElement("div");
    editLink.appendChild(edit);


    //add the preview to the row
    row.appendChild(editLink);

    //add the row to the table
    let tableBody = document.getElementById("linkBody");
    tableBody.append(row);
}

function insertBookmarkDB(name, rating, link) {
    $.ajax({
        type: "GET",
        url: "../models/bookmarkDB.php",
        cache: false,
        data: {
            command: "insert",
            name: name,
            link: link,
            rating: rating
        },
        error: function(response, status, error) {
            alert("Error: " + error);
        },
        success: function(data, status, response) {
            //successfully entered a new color into the DB
        }
    });
}

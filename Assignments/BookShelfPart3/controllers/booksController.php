<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/30/18
 * Time: 10:38 AM
 */

include 'models/booksDB.php';
//loads the addBooks.php page
function handleAddBooks() {

}

//retrieves all books from the DB and loads the viewBooks.php page
function handleViewBooksGet() {
    //prepare the data for the view page
    $books =  getBooks(getConnection());

    //load the view page
    require 'views/viewBooks.php';
}

///* inserts a new book into the DB using data from the form on addBooks.php.
//Afterward retrieves all books from the DB and loads the viewBooks.php page. */
//function handleViewBooksPost() {
//
//}

//loads a new book into the editBooks.php page
function handleEditBooksGet($id) {
    //prepare the data for the view page
    $book = getBook($id);

    //load the view page
    require 'views/editBook.php';

}

/* updates a record from the editBooks.php page form and then redirects to the viewBooks.php page. */
function handleEditBooksPost() {

}

//deletes a book with the given id and displays the deleteBooks.php page
function handleDeleteBooksGet() {

}

/* handles the undo button press and uses session to insert the previously deleted book back into the DB.
Afterwards the user is redirected to viewBooks.php. */
function handleDeleteBooksPost() {

}
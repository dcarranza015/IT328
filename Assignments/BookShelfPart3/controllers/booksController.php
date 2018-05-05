<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/30/18
 * Time: 10:38 AM
 */

/**
 *books controller to work with db
 */
include 'models/booksDB.php';

/**
 * loads the addBooks.php page
 */
function handleAddBooks() {
    require 'views/insertBook.php';
}

/**
 *retrieves all books from the DB and loads the viewBooks.php page
 */
function handleViewBooksGet() {
    //prepare the data for the view page
    $books =  getBooks(getConnection());

    //load the view page
    require 'views/viewBooks.php';
}

/**
 * loads a new book into the editBooks.php page
 * @param $id
 */

function handleEditBooksGet($id) {
    //prepare the data for the view page
    $book = getBook($id);

    //load the view page
    require 'views/editBook.php';

}

/**
 *updates a record from the editBooks.php page form and then redirects to the viewBooks.php page.
 */
function handleEditBooksPost() {
    updateBook($_POST['id'],$_POST['title'],$_POST['fiction'],$_POST['publisher'],$_POST['summary'],$_POST['pages'] );

    header('location: index.php?page=view');
}

/**
 *deletes a book with the given id and displays the deleteBooks.php page
 */
function handleDeleteBooksGet(){
    //prepare the data for the view page
    deleteBook(getConnection());

    //load the view page
    require 'views/deleteBook.php';

}

/**
 *handles the undo button press and uses session to insert the previously deleted book back into the DB.
* Afterwards the user is redirected to viewBooks.php
 */

function handleDeleteBooksPost() {
    updateBook($_SESSION['id'],$_SESSION['title'],$_SESSION['fiction'],$_SESSION['publisher'],$_SESSION['summary'],$_SESSION['pages'] );


    header('location: index.php?page=view');
}

/**
 * updates the books after post
 */
function handleAddBooksPost(){
    $isAddSuccess = addBook($_POST['title'],$_POST['fiction'],$_POST['publisher'],$_POST['summary'],$_POST['pages'] );
    if ($isAddSuccess)
    { // If it ran OK.
        $result = '<div class="alert alert-success">Success</div>';
    }
    else
    {
        $result = '<div class="alert alert-danger">Sorry there was an error</div>';
    }
    require 'views/insertBook.php';
}
<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/30/18
 * Time: 10:38 AM
 */

//returns a new connection to the books database
function getConnection() {
    $user = 'dcarranz_dbuser';
    $pass = 'T3MP0r@ry';
    $host = 'localhost';
    $database = 'dcarranz_it328';

    $connection = mysqli_connect($host, $user, $pass, $database);

    //if we get a false value, something went wrong
    if (!$connection)
    {
        echo 'Error connection to DB: ' . mysqli_connect_error();
        exit;
    }

    return $connection;
}

//returns all books stored in the database
function getBooks($connection) {
    //query for message records
    $query = 'SELECT * FROM books';

    $results = mysqli_query($connection, $query);

    if (!$results)
    {
        echo 'Error retrieving records';
        exit;
    }

    $books = array();
    while ($row = mysqli_fetch_assoc($results))
    {
        $books[] = $row;
    }

    //frees results
    mysqli_free_result($results);

    return $books;
}

function getBook($id){


    $q = "SELECT * FROM books WHERE id = '$id'";

    $rq = mysqli_query(getConnection(), $q);

    //check was the query successful
    if($rq){
        return $r = mysqli_fetch_assoc($rq);
    }else return false;

}
//adds a new book to the database
function addBook($connection, $title, $fiction, $publisher, $summary, $pages) {


    $q = "INSERT INTO books (title, fiction, publisher, summary, pages) VALUES ('$title', '$fiction', '$publisher', '$summary', '$pages')";

    $r = mysqli_query($connection, $q); // Run the query.


    if ($r)
    { // If it ran OK.


        $result = '<div class="alert alert-success">Success</div>';
        return $result;


    }
    else
    {
        $result = '<div class="alert alert-danger">Sorry there was an error</div>';
        return $result;

    }

}

/* searches for the book with the given id and updates all attributes with the input parameters */
function updateBook($id, $title, $fiction, $publisher, $summary, $pages) {

    $q = "UPDATE books 
          SET title = '$title', fiction = '$fiction', publisher = '$publisher', summary = '$summary', pages = '$pages' 
          WHERE id = '$id' ";

    $r = mysqli_query(getConnection(), $q); // Run the query.

    //check was the query successful
    if($r){
        return true;
    }else return false;


}

/* searches for the book with the given id and removes it from the database */
function deleteBook($connection) {

}
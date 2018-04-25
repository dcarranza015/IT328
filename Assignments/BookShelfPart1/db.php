<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/12/18
 * Time: 8:26 PM
 * Connects to the database
 */

    //this is our data layer!

    function getConnection() {
        $user = 'dcarranz_dbuser';
        $pass = 'T3MP0r@ry';
        $host = 'localhost';
        $database = 'dcarranz_it328';

        $connection = mysqli_connect($host, $user, $pass, $database);

        //if we get a false value, something went wrong
        if(!$connection){
            echo 'Error connection to DB: '.mysqli_connect_error();
            exit;
        }

        return $connection;
    }

    /**
     * Gets books that have been submitted and displays them
     * @return array of books
     */
    function getBooks(){
        $connection = getConnection();

        //query for message records
        $query = 'SELECT * FROM books';

        $results = mysqli_query($connection, $query);

        if (!$results){
            echo 'Error retrieving records';
            exit;
        }

        $books = array();
        while($row = mysqli_fetch_assoc($results)) {
            $books[] = $row;
        }

        //frees results
        mysqli_free_result($results);

        return $books;

    }








?>

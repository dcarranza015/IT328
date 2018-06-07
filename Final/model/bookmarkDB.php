<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/30/18
 * Time: 10:38 AM
 */

/**
 * retrieves connection
 * @return mysqli
 */
//returns a new connection to the books database
function getConnection()
{
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

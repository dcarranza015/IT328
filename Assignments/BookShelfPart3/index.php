<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/30/18
 * Time: 10:38 AM
 */
//load shared resources among pages
//require 'database/db.php';
require 'controllers/booksController.php';

//save the HTTP verb
$httpVerb = $_SERVER['REQUEST_METHOD']; //GET or POST
//index.php?page=add;
//determine which page was requested
$page = 'view';
$file = 'viewBooks.php';
if (isset($_GET['page']))
{
    $page = $_GET['page'];
}

//pass control to a controller function
switch ($page)
{
    case 'view':
        handleViewBooksGet();
        break;
    case 'edit':
        if ($httpVerb == 'GET')
        {
            handleEditBooksGet($_GET['id']);
        }
        else
        {//POST
            handleEditBooksPost();
        }
        break;
    case 'delete':
        if ($httpVerb == 'GET')
        {
            handleDeleteBooksGet();
        }
        else
        { //POST
            handleDeleteBooksPost();
        }
        break;
    case 'add':
        if ($httpVerb == 'GET')
        {
            handleAddBooks();
        }
        else
        { //POST
            handleAddBooksPost();
        }
        break;
}

?>
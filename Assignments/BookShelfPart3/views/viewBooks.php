<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/12/18
 * Time: 8:26 PM
 * This page Displays the books that have been submitted
 */

require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $connection = getConnection();

    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $fiction = mysqli_real_escape_string($connection, $_POST['fiction']);
    $publisher = mysqli_real_escape_string($connection, $_POST['publisher']);
    $pages = mysqli_real_escape_string($connection, $_POST['pages']);
    $summary = mysqli_real_escape_string($connection, $_POST['summary']);

    $q = "INSERT INTO books (title, fiction, publisher, summary, pages) VALUES ('$title', '$fiction', '$publisher', '$summary', '$pages')";

    $r = mysqli_query($connection, $q); // Run the query.


    if ($r)
    { // If it ran OK.


        $result = '<div class="alert alert-success">Success</div>';


    }
    else
    {
        $result = '<div class="alert alert-danger">Sorry there was an error</div>';
    }

}
$books = getBooks();
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title> View Book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css"
          integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="insertBook.php">Book Shelf</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="viewBooks.php">View Books <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="insertBook.php">Add Books</a>
            </li>
        </ul>
    </div>
</nav>

<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <?php echo $result; ?>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="list-group">
                <h1>Books Added</h1>
                <?php
                foreach ($books as $book)
                {

                    echo "<ul class='list-group'>";

                    echo "<li class='list-group-item'>" .
                        "<h1>" . $book['title'] . "</h1>";
                    echo "Publisher: " . $book['publisher'] . ", Pages: " . $book['pages'];

                    if ($book['fiction'] == 1)
                        echo ' (fiction)';
                    else
                        echo ' (nonfiction)';

                    echo "<br><br>"
                        . $book['summary']
                        . "<br> <a href='editBook.php?id=" . $book['id'] . "'><i class=\"far fa-edit\"> Edit </i> </a>
                                  <a href='deleteBook.php?id=" . $book['id'] . "'> <i class=\"far fa-trash-alt\"> Delete </i></li> </a>";
                    echo "</ul>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<!--//                        echo "<pre>";-->
<!--//                        var_dump($book);-->
<!--//                        echo "</pre>";-->
<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/12/18
 * Time: 8:26 PM
 * This page Displays the books that have been submitted
 */

require '../models/booksDB.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $connection = getConnection();
    $title = mysqli_real_escape_string($connection, $_POST['title']);
    $fiction = mysqli_real_escape_string($connection, $_POST['fiction']);
    $publisher = mysqli_real_escape_string($connection, $_POST['publisher']);
    $pages = mysqli_real_escape_string($connection, $_POST['pages']);
    $summary = mysqli_real_escape_string($connection, $_POST['summary']);

    addBook($connection, $title, $fiction, $publisher, $summary, $pages);


}
$books = getBooks(getConnection());
?>

<!DOCTYPE html>
<html>
<head>
    <?php require 'components/header.php' ?>
</head>

<body>


<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
       <?php //echo $result; ?>
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
<?php include 'components/footer.php'?>
</body>
</html>
<!--//                        echo "<pre>";-->
<!--//                        var_dump($book);-->
<!--//                        echo "</pre>";-->
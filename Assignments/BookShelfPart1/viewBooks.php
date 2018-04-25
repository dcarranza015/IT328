<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/12/18
 * Time: 8:26 PM
 * This page Displays the books that have been submitted
 */
require 'db.php';

$books = getBooks();



?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <title>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="insertBook.php">Book Shelf</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </nav>
    <div class ="container">
        <div class = "row">
            <div class ="col-sm-12">
                <div class="list-group">
                    <h1>Books Added</h1>
                    <?php
                    foreach ($books as $book) {

                        echo "<ul class='list-group'>";

                        echo   "<li class='list-group-item'>".
                               "<h1>" . $book['title'] . "</h1>";
                        echo   "Publisher: " . $book['publisher'] . ", Pages: " . $book['pages'] ;

                        if($book['fiction'] == 1)
                            echo ' (fiction)';
                        else
                            echo ' (nonfiction)';

                        echo "<br><br>" .$book['summary']. "</ul>" ;
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
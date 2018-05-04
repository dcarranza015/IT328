<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/22/18
 * Time: 11:11 PM
 */

session_start();

if($_SERVER['REQUEST_METHOD'] =='POST'){

    require '../models/booksDB.php';
    $connection = getConnection();

    $id = $_SESSION['id'];

    $title = $_SESSION['title'];
    $fiction =  $_SESSION['fiction'];
    $publisher =  $_SESSION['publisher'];
    $pages = $_SESSION['pages'];
    $summary=  $_SESSION['summary'];

    $q = "INSERT INTO books (title, fiction, publisher, summary, pages) VALUES ('$title', '$fiction', '$publisher', '$summary', '$pages')";

    $r = mysqli_query($connection, $q);

    if ($r) { // If it ran OK.

        $result='<div class="alert alert-success">Success</div>';

        header('location: viewBooks.php');
    }
    else {
        $result='<div class="alert alert-danger">Sorry there was an error</div>';
    }

}

if($_SERVER['REQUEST_METHOD'] =='GET') {
    //get all the information from the DB
    $id = $_GET['id'];

    require '../models/booksDB.php';
    $connection = getConnection();

    $q = "SELECT * FROM books WHERE id = '$id'";

    $rq = mysqli_query($connection, $q);

    $_SESSION = mysqli_fetch_assoc($rq);

    $deleteQuery = "DELETE FROM books  WHERE id = '$id' ";
    if(mysqli_query($connection, $deleteQuery)){
        //delete successful
    }


}

?>
<!DOCTYPE html>
<html>
<head>
    <?php require 'components/header.php'?>
</head>

<body>


    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>
        </div>
    </div>

    <div class="container">

        <form action ="deleteBook.php" method="post">
            <!-- submit the form -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary mb-2 align-items-center" value="Add!">Undo Delete?</button>
            </div>
            <input type="text" hidden value="<?php echo $_GET['id']?>" name="id">
        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <?php include 'components/footer.php'?>
</body>
</html>

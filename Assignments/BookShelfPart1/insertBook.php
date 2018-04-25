<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/12/18
 * Time: 8:26 PM
 * Shows how to insert
 */


if($_SERVER['REQUEST_METHOD'] =='POST'){

    require 'db.php';
    $connection = getConnection();

    $title = mysqli_real_escape_string( $connection, $_POST['title']);
    $fiction = mysqli_real_escape_string( $connection, $_POST['fiction']);
    $publisher = mysqli_real_escape_string( $connection, $_POST['publisher']);
    $pages = mysqli_real_escape_string( $connection, $_POST['pages']);
    $summary= mysqli_real_escape_string( $connection, $_POST['summary']);

    $q = "INSERT INTO books (title, fiction, publisher, summary, pages) VALUES ('$title', '$fiction', '$publisher', '$summary', '$pages')";

    $r = mysqli_query ($connection, $q); // Run the query.

    if ($r) { // If it ran OK.


        header('location: viewBooks.php');
    }
    else {
        $result='<div class="alert alert-danger">Sorry there was an error</div>';
    }

}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="insertBook.php">Book Shelf</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


    </nav>

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>
        </div>
    </div>
    <div class="container">


        <form action ="insertBook.php" method="post">

            <!-- book title -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="title" >Title</label>
                <div class="col-sm-10">
                    <input title="stopYellow" class="form-control" type="text" name="title" value = "<?php echo $_POST['title']?>" >
                </div>
            </div>

            <!-- fiction or not? -->
            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Fiction</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ifFiction" id="fiction" value="yes" <?php if ($fiction = 1 ) echo "checked" ?>>
                            <label class="form-check-label" for="fiction"> yes </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ifFiction" id="nonFiction" value="no" <?php if ($fiction = 0) echo "checked" ?>>
                            <label class="form-check-label" for="nonFiction"> No </label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <!-- publisher -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label"  for="publisher"  >Publisher</label>
                <div class="col-sm-10">
                    <select id="publisher" class="form-control" name="publisher" >
                        <option selected></option>
                        <option value="Harper Collins">Harper Collins</option>
                        <option value="Pearson">Pearson</option>
                        <option value="Scholastic Press">Scholastic Press</option>
                        <option value="Penguin Classics">Penguin Classics</option>
                        <option value="Bantam">Bantam</option>
                        <option value="Mariner Books">Mariner Books</option>
                    </select>
                </div>
            </div>


            <!-- summary -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="summary" >Summary</label>
                <div class="col-sm-10">
                    <textarea name="summary" id="summary" class="form-control" rows="7" ><?php echo $_POST['summary']?></textarea>
                </div>
            </div>


            <!-- # of pages -->
            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="pages" >Pages</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" name="pages" placeholder="546" value="<?php echo $_POST['pages']?>"  >
                </div>
            </div>




            <!-- submit the form -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary mb-2 align-items-center" value="Add!">Add!</button>
            </div>

        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>

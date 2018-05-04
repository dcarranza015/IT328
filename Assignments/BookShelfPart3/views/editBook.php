<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/22/18
 * Time: 10:26 PM
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

    require '../models/booksDB.php';
    $connection = getConnection();

    $id = $_POST['id'];

    $title = $_POST['title'];
    $fiction = $_POST['fiction'];
    $publisher = $_POST['publisher'];
    $pages = $_POST['pages'];
    $summary = $_POST['summary'];

    $q = "UPDATE books 
          SET id = '$id', title = '$title', fiction = '$fiction', publisher = '$publisher', summary = '$summary', pages = '$pages' 
          WHERE id = '$id' ";

    $r = mysqli_query($connection, $q); // Run the query.

    // If it ran OK.
    if ($r)
    {
        $result = '<div class="alert alert-success">Success</div>';
        header('location: viewBooks.php');
    }
    else
    {
        $result = '<div class="alert alert-danger">Sorry there was an error</div>';
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    $id = $_GET['id'];

    require '../models/booksDB.php';
    $connection = getConnection();

    $q = "SELECT * FROM books WHERE id = '$id'";

    $rq = mysqli_query($connection, $q);

    $r = mysqli_fetch_assoc($rq);

    //checks if something is inside
    if (sizeof($r) > 0)
    {
        $title = $r['title'];
        $fiction = $r['fiction'];
        $publisher = $r['publisher'];
        $pages = $r['pages'];
        $summary = $r['summary'];
    }

}

?>
<!doctype html>
<html lang="en">
<head>
    <?php require 'components/header.php' ?>

</head>
<body>


<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <?php echo $result; ?>
    </div>
</div>
<div class="container">


    <form action="editBook.php" method="post">

        <!-- book title -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="title">Title</label>
            <div class="col-sm-10">
                <input title="stopYellow" class="form-control" type="text" name="title" value="<?php echo $title ?>">
            </div>
        </div>

        <!-- fiction or not? -->
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Fiction</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ifFiction" id="fiction"
                               value="yes" <?php if ($fiction) echo 'checked' ?>>
                        <label class="form-check-label" for="fiction"> yes </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ifFiction" id="nonFiction"
                               value="no" <?php if (!$fiction) echo 'checked' ?>>
                        <label class="form-check-label" for="nonFiction"> No </label>
                    </div>
                </div>
            </div>
        </fieldset>

        <!-- publisher -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="publisher">Publisher</label>
            <div class="col-sm-10">
                <select id="publisher" class="form-control" name="publisher">
                    <option selected></option>
                    <option value="Harper Collins" <?php if ($publisher == 'Harper Collins') echo 'selected' ?>>Harper
                        Collins
                    </option>
                    <option value="Pearson" <?php if ($publisher == 'Pearson') echo 'selected' ?>>Pearson</option>
                    <option value="Scholastic Press" <?php if ($publisher == 'Scholastic Press') echo 'selected' ?>>
                        Scholastic Press
                    </option>
                    <option value="Penguin Classics" <?php if ($publisher == 'Penguin Classics') echo 'selected' ?>>
                        Penguin Classics
                    </option>
                    <option value="Bantam" <?php if ($publisher == 'Bantam') echo 'selected' ?>>Bantam</option>
                    <option value="Mariner Books" <?php if ($publisher == 'Mariner Books') echo 'selected' ?>>Mariner
                        Books
                    </option>
                </select>
            </div>
        </div>


        <!-- summary -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="summary">Summary</label>
            <div class="col-sm-10">
                <textarea name="summary" id="summary" class="form-control" rows="7"><?php echo $summary ?></textarea>
            </div>
        </div>


        <!-- # of pages -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="pages">Pages</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="pages" placeholder="546" value="<?php echo $pages ?>">
            </div>
        </div>


        <!-- submit the form -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary mb-2 align-items-center" value="Add!">Save Changes</button>
        </div>
        <input type="text" hidden value="<?php echo $_GET['id'] ?>" name="id">
    </form>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
<?php include 'components/footer.php'?>
</body>
</html>

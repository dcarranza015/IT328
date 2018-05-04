<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/12/18
 * Time: 8:26 PM
 * Shows how to insert
 */


?>
<!doctype html>
<html lang="en">
<head>
    <?php require 'components/header.php' ?>
</head>
<body>


<div class="container">


    <form action="viewBooks.php" method="post">

        <!-- book title -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="title">Title</label>
            <div class="col-sm-10">
                <input title="stopYellow" class="form-control" type="text" name="title"
                       value="<?php echo $_POST['title'] ?>">
            </div>
        </div>

        <!-- fiction or not? -->
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Fiction</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ifFiction" id="fiction"
                               value="yes" <?php if ($fiction = 1) echo "checked" ?>>
                        <label class="form-check-label" for="fiction"> yes </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ifFiction" id="nonFiction"
                               value="no" <?php if ($fiction = 0) echo "checked" ?>>
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
            <label class="col-sm-2 col-form-label" for="summary">Summary</label>
            <div class="col-sm-10">
                <textarea name="summary" id="summary" class="form-control"
                          rows="7"><?php echo $_POST['summary'] ?></textarea>
            </div>
        </div>


        <!-- # of pages -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="pages">Pages</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="pages" placeholder="546"
                       value="<?php echo $_POST['pages'] ?>">
            </div>
        </div>


        <!-- submit the form -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary mb-2 align-items-center" value="Add!">Add!</button>
        </div>

    </form>
</div>
<?php include 'components/footer.php'?>

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
</body>
</html>

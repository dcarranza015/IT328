<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/12/18
 * Time: 8:26 PM
 * Shows how to insert
 */


?>

<?php require 'components/header.php' ?>

<div class="container">


    <form action="index.php?page=add" method="post">
        <?php echo $result; ?>
        <!-- book title -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="title">Title</label>
            <div class="col-sm-10">
                <input title="stopYellow" class="form-control" type="text" name="title">
            </div>
        </div>

        <!-- fiction or not? -->
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Fiction</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ifFiction" id="fiction"
                               value="yes">
                        <label class="form-check-label" for="fiction"> yes </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ifFiction" id="nonFiction" value="no">
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
                          rows="7"></textarea>
            </div>
        </div>

        <!-- # of pages -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="pages">Pages</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="pages" placeholder="546">
            </div>
        </div>

        <!-- submit the form -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary mb-2 align-items-center" value="Add!">Add!</button>
        </div>

    </form>
</div>
<?php include 'components/footer.php'?>



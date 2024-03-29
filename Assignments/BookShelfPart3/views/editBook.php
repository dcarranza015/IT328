<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/22/18
 * Time: 10:26 PM
 */


?>

<?php require 'components/header.php' ?>


<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <?php //echo $result; ?>
    </div>
</div>
<div class="container">


    <form action="index.php?page=edit" method="post">

        <!-- book title -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="title">Title</label>
            <div class="col-sm-10">
                <input title="stopYellow" class="form-control" type="text" name="title" value="<?php echo $book['title'] ?>">
            </div>
        </div>

        <!-- fiction or not? -->
        <fieldset class="form-group">
            <div class="row">
                <legend class="col-form-label col-sm-2 pt-0">Fiction</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ifFiction" id="fiction"
                               value="yes" <?php if ($book['fiction']) echo 'checked' ?>>
                        <label class="form-check-label" for="fiction"> yes </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="ifFiction" id="nonFiction"
                               value="no" <?php if (!$book['fiction']) echo 'checked' ?>>
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
                    <option value="Harper Collins" <?php if ($book['publisher'] == 'Harper Collins') echo 'selected' ?>>Harper
                        Collins
                    </option>
                    <option value="Pearson" <?php if ($book['publisher']  == 'Pearson') echo 'selected' ?>>Pearson</option>
                    <option value="Scholastic Press" <?php if ($book['publisher']  == 'Scholastic Press') echo 'selected' ?>>
                        Scholastic Press
                    </option>
                    <option value="Penguin Classics" <?php if ($book['publisher']  == 'Penguin Classics') echo 'selected' ?>>
                        Penguin Classics
                    </option>
                    <option value="Bantam" <?php if ($book['publisher']  == 'Bantam') echo 'selected' ?>>Bantam</option>
                    <option value="Mariner Books" <?php if ($book['publisher']  == 'Mariner Books') echo 'selected' ?>>Mariner
                        Books
                    </option>
                </select>
            </div>
        </div>


        <!-- summary -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="summary">Summary</label>
            <div class="col-sm-10">
                <textarea name="summary" id="summary" class="form-control" rows="7"><?php echo $book['summary']  ?></textarea>
            </div>
        </div>


        <!-- # of pages -->
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="pages">Pages</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="pages" placeholder="546" value="<?php echo $book['pages']  ?>">
            </div>
        </div>


        <!-- submit the form -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary mb-2 align-items-center" value="Add!">Save Changes</button>
        </div>
        <input type="text" hidden value="<?php echo $book['id']  ?>" name="id">
    </form>
</div>

<?php include 'components/footer.php' ?>

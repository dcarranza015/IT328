<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/22/18
 * Time: 11:11 PM
 */

session_start();



?>
<!DOCTYPE html>
<html>
<head>
    <?php require 'components/header.php'?>
</head>

<body>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php //echo $result; ?>
        </div>
    </div>

    <div class="container">

        <form action ="index.php" method="post">
            <!-- submit the form -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary mb-2 align-items-center" value="Add!">Undo Delete?</button>
            </div>
            <input title="id " type="text" hidden value="<?php echo $_GET['id']?>" name="id">
        </form>

    </div>

  <?php include 'components/footer.php'?>
</body>
</html>

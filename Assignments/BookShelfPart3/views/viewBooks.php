<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/12/18
 * Time: 8:26 PM
 * This page Displays the books that have been submitted
 */


?>

<?php include 'components/header.php' ?>

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
                        . "<br> <a href='index.php?page=edit&id=" . $book['id'] . "'><i class=\"far fa-edit\"> Edit </i> </a>
                                  <a href='index.php?page=delete&id=" . $book['id'] . "'> <i class=\"far fa-trash-alt\"> Delete </i></li> </a>";
                    echo "</ul>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include 'components/footer.php' ?>

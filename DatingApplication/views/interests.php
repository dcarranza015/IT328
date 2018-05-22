<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 5/15/18
 * Time: 11:37 PM
 */
require "parts/header.php"
?>
<include href="views/parts/header.php"></include>

<div class="container">
    <div class="page-header">
        <h1>Interests</h1>
    </div>
    <p><b>In Door Interests</b></p>
    <div class="row">
        <div class="col-sm">
            <label>
                <input type="checkbox" name="outdoor_interests[]" value="tv"> TV
            </label>
        </div>
        <div class="col-sm">
            <label>
                <input type="checkbox" name="outdoor_interests[]" value="movies"> Movies
            </label>
        </div>
        <div class="col-sm">
            <label>
                <input type="checkbox" name="outdoor_interests[]" value="cooking"> Cooking
            </label>
        </div>
        <div class="col-sm">
            <label>
                <input type="checkbox" name="outdoor_interests[]" value="reading"> Reading
            </label>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <label>
                <input type="checkbox" name="outdoor_interests[]" value="sleeping"> Sleeping
            </label>
        </div>
        <div class="col-sm">
            <label>
                <input type="checkbox" name="outdoor_interests[]" value="puzzles"> Puzzles
            </label>
        </div>
        <div class="col-sm">
            <label>
                <input type="checkbox" name="outdoor_interests[]" value="videoGames"> Video Games
            </label>
        </div>
        <div class="col-sm">
            <label>
                <input type="checkbox" name="outdoor_interests[]" value="boardGames"> Board Games
            </label>
        </div>
    </div>
    <p><b>Out Door Interests</b></p>
    <div class="row">
        <div class="col-sm">
            <label>
                <input type="checkbox" name="outdoor_interests[]" value="walking"> Walking
            </label></div>
        <div class="col-sm">
            <label>
                <input type="checkbox" name="outdoor_interests[]" value="hiking"> Hiking
            </label></div>
        <div class="col-sm">
            <label>
                <input type="checkbox" name="outdoor_interests[]" value="biking"> Biking
            </label></div>
        <div class="col-sm">
            <label>
                <input type="checkbox" name="outdoor_interests[]" value="swimming"> Swimming
            </label></div>
    </div>
    <!-- submit the form -->
    <div class="text-right">
        <form class="" action="gettingstarted/interests" method="get">
            <button type="submit" class="btn btn-primary mb-2 align-items-center">Next ></button>
        </form>
    </div>


</div>
<include href="views/parts/footer.php"></include>

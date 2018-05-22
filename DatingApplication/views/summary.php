<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 5/15/18
 * Time: 11:39 PM
 */
require "parts/header.php";
require "parts/footer.php";
?>
<include href="views/parts/header.php"></include>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <!-- Name -->
            <div>
                <label class="col-sm-12 col-form-label border" for="title"> Name: {{ @name }}</label>

            </div>
            <!-- Gender -->
            <div>
                <label class="col-sm-12 col-form-label border" for="title">Gender: </label>

            </div>
            <!-- Age -->
            <div>
                <label class="col-sm-12 col-form-label border" for="title">Age: </label>

            </div>

            <!-- Phone Number -->
            <div>
                <label class="col-sm-12 col-form-label border" for="title">Phone Number: </label>

            </div>
            <!-- Email -->
            <div>
                <label class="col-sm-12 col-form-label border" for="title">Email: </label>

            </div>
            <!-- State -->
            <div>
                <label class="col-sm-12 col-form-label border" for="title">State: </label>

            </div>
            <!-- Seeking -->
            <div>
                <label class="col-sm-12 col-form-label border" for="title">Seeking: </label>

            </div>
            <!-- Interests -->
            <div>
                <label class="col-sm-12 col-form-label border" for="title">Interests: </label>

            </div>
        </div>
        <div class="col-sm ">
            <div class="list-group ">
                <img src="../../DatingApplication/images/profile.png" class="rounded img-fluid "  height="300" width="300" alt="Responsive image">
            </div>
            <!-- Biography -->
            <div>
                <label class="col-sm-12 col-form-label align-items-center" for="title"><h3>Biography:</h3> </label>

            </div>
        </div>
    </div>
</div>
<include href="views/parts/footer.php"></include>

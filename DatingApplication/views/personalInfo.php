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
        <h1>Personal Information</h1>
    </div>
    <form class="" action="/DatingApplication/gettingstarted/personalInfo" method="POST">
        <div class="row">
            <div class="col-sm">
                <!-- First Name -->
                <div>
                    <label class="col-sm-12 col-form-label" for="title">First Name</label>
                    <div class="col-sm-12 form-group">
                        <input title="stopYellow" class="form-control" type="text" name="firstName" value=" ">
                    </div>
                </div>
                <!-- Last Name -->
                <div>
                    <label class="col-sm-12 col-form-label" for="title">Last Name</label>
                    <div class="col-sm-12 form-group">
                        <input title="stopYellow" class="form-control" type="text" name="lastName" value=" ">
                    </div>
                </div>
                <!-- Age -->
                <div>
                    <label class="col-sm-12 col-form-label" for="title">Age</label>
                    <div class="col-sm-12 form-group">
                        <input title="stopYellow" class="form-control" type="text" name="age" value=" ">
                    </div>
                </div>
                <!-- Gender -->
                <div>
                    <label class="col-sm-12 col-form-label" for="title">Gender</label>
                    <div class="col-sm-12 form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male">

                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female">

                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                </div>
                <!-- Phone Number -->
                <div>
                    <label class="col-sm-12 col-form-label" for="title" >Phone Number</label>
                    <div class="col-sm-12 form-group">
                        <input title="stopYellow" class="form-control" type="text" name="phoneNum" value=" ">
                    </div>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="alert alert-secondary" role="alert">
                    <p><b>Note:</b> All information is protected by our privacy policy. Profile information can only be
                        viewed by others with your permission</p>
                </div>
            </div>
        </div>
        <!-- submit the form -->
        <div class="text-right">
            <button type="submit" class="btn btn-primary mb-2 align-items-center">Next ></button>
        </div>
    </form>
</div>

<include href="views/parts/footer.php"></include>

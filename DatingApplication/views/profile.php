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
        <h1>Profile</h1>
    </div>
    <form class="" action="/DatingApplication/gettingstarted/profile" method="post">

        <div class="row">
            <div class="col-sm">
                <!-- Email -->
                <div>
                    <label class="col-sm-12 col-form-label " for="title">Email</label>
                    <div class="col-sm-12 form-group">
                        <input title="stopYellow" class="form-control" type="text" name="email" value=" ">
                    </div>
                </div>

                <!-- State -->
                <div>
                    <div class="col-sm-12 form-group">
                        <label for="exampleFormControlSelect1">State</label>
                        <select id="state" name="state" title="States" class="custom-select custom-select-lg mb-">
                            <option value="Washington">WASHINGTON</option>
                            <option value="Oregon">OREGON</option>
                            <option value="California">CALIFORNIA</option>
                            <option value="Idaho">IDAHO</option>
                            <option value="Montana">MONTANA</option>
                        </select>
                    </div>
                </div>
                <!-- Seeking -->
                <div>
                    <label class="col-sm-12 col-form-label" for="title">Seeking</label>
                    <div class="col-sm-12 form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="male"
                                   value="Male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female"
                                   value="Female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6">
                <label class="col-sm-6 col-form-label" for="summary">Biography</label>
                <div class="col-sm">
                    <textarea name="summary" id="summary" class="form-control" rows="7"></textarea>
                </div>
            </div>
            <!-- submit the form -->
            <div class="text-right">
                <button type="submit" class="btn btn-primary mb-2 align-items-center">Next ></button>
            </div>
    </form>


</div>
<include href="views/parts/footer.php"></include>

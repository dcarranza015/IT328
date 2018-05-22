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

    <div class="row">
        <div class="col-sm">
            <!-- Email -->
            <div>
                <label class="col-sm-12 col-form-label " for="title">Email</label>
                <div class="col-sm-12 form-group">
                    <input title="stopYellow" class="form-control" type="text" name="title" value=" ">
                </div>
            </div>

            <!-- State -->
            <div>
                <div class="col-sm-12 form-group">
                    <label for="exampleFormControlSelect1">State</label>
                    <select title="States" class="custom-select custom-select-lg mb-">
                        <option>WASHINGTON</option>
                        <option>OREGON</option>
                        <option>CALIFORNIA</option>
                        <option>IDAHO</option>
                        <option>MONTANA</option>
                    </select>
                </div>
            </div>
            <!-- Seeking -->
            <div>
                <label class="col-sm-12 col-form-label" for="title">Seeking</label>
                <div class="col-sm-12 form-group">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                               value="option2">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
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
            <form class="" action="gettingstarted/profile" method="get">
                <button type="submit" class="btn btn-primary mb-2 align-items-center">Next ></button>
            </form>
        </div>

</div>
    <include href="views/parts/footer.php"></include>

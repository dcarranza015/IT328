<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 5/15/18
 * Time: 11:37 PM
 */
require "parts/header.php";
require "parts/footer.php";

?>
<include href="views/parts/header.php"></include>

<div class="form-group"></div>
<div>

<div class="container">
    <div class="row">
        <div class="col-md ">
            <div class="list-group">
                <h2 style="text-align: center" >Michael Scott Dating Application!</h2>
                <p>
                    Welcome to the web's most sought out mans dating application website. At Michael Scott's dating
                    website you'll fill out information to see if you're the right one for Mr. Scott. We have a high
                    volume of people filling out the application but your patience is valued.
                </p>
                <br>
               <h4 style="text-align: center">Hear what his Ex's said about him</h4>
                <HR COLOR="gray" WIDTH="100%">
               <i style="text-align: center">Well, Michael, I guess I underestimated you. - Jan Levinson</i>
                <i style="text-align: center">Michael, you cried at that tagline for a movie you made up. - Holly Flax</i>
                <i style="text-align: center">This is so weird. - Carol Stills</i>
                <HR COLOR="gray" WIDTH="100%">

                <!-- submit the form -->
                <div class="text-center">
                    <a class="btn btn-primary mb-2 align-items-center" href="/gettingstarted/personal">Create a Profile</a>
                </div>
            </div>
        </div>
        <div class="col-md ">
            <div class="list-group ">
                <img src="../DatingApplication/images/Boss.jpg" class="rounded img-fluid" alt="Responsive image">
            </div>
        </div>


    </div>
</div>
    <include href="views/parts/footer.php"></include>
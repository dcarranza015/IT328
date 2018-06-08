<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 5/29/18
 * Time: 9:23 PM
 */
?>
<include href="views/parts/header.php"/>
<script src="scripts/login.js?v={{rand(1,100)}}"></script>
<div class="container">
    <div class="row">
        <div class="col-sm-4" style="background-color:cadetblue;">
            <div class="form-group">
                <h2>Login to Navigate</h2>
            </div>
        </div>
        <div class="col-sm" style="background-color:dodgerblue;">
            <div class="form-group row">
                <div class="col-sm">
                    <h3 align="center">Login to continue</h3>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm">
                    <h3 align="center"> Need help getting started?</h3>
                </div>
            </div>

            <form class="validateForm" method="get" action="#">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <div align="center" class="col-sm">
                        <!-- submit the form -->
                        <div class="text-center">
                            <button class="btn btn-primary mb-2 align-items-center" id="login">Login</button>
                            <button class="btn btn-primary mb-2 align-items-center" id="register">Register</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
    <include href="views/parts/footer.php"></include>


<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 5/29/18
 * Time: 9:23 PM
 */
?>

<include href="views/header.php"></include>

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
                    <h3 align="center">Welcome to bookmark share</h3>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm">
                    <h3 align="center"> Need help getting started?.</h3>
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
                            <a class="btn btn-primary mb-2 align-items-center" href="/Final/views/welcome.php">Login</a>
                            <a class="btn btn-primary mb-2 align-items-center" href="/Final/views/welcome.php">Register</a>
                        </div>

                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
    <include href="views/footer.php"></include>


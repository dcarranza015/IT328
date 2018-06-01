<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 5/29/18
 * Time: 7:55 PM
 */
?>
<include href="views/parts/header.php"></include>

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
                    <h1 align="center">Welcome to Bookmark Share</h1>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm">
                    <h3 align="center"> Please login or register for a new account.</h3>
                </div>
            </div>

            <form>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <div align="center" class="col-sm">
                        <button type="button" class="btn btn-secondary">Login</button>
                        <button type="button" class="btn btn-secondary">Register</button>
                    </div>
                </div>

            </form>
        </div>
</div>










<include href="views/parts/footer.php"></include>
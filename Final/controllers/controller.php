<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 5/29/18
 * Time: 7:59 PM
 */
session_start();

function loginPage(){

    echo Template::instance()->render('views/login.php');

}

function welcomePage(){

    //show the view
    echo Template::instance()->render('views/welcome.php');
}
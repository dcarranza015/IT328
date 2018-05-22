<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/26/18
 * Time: 7:13 PM
 */

    function welcome(){

        echo Template::instance()->render('views/welcome.php');

    }

    function personalInfo(){

        //show the view
        echo Template::instance()->render('views/personalInfo.php');
    }

    function profile(){

        //show the view
        echo Template::instance()->render('views/profile.php');
    }

    function interests(){

        //show the view
        echo Template::instance()->render('views/interests.php');
    }


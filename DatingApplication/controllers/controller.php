<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/26/18
 * Time: 7:13 PM
 */
session_start();

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

    function personalInfoPOST($postRequest){
        //save post request to session
        $_SESSION['firstName'] = $postRequest['firstName'];
        $_SESSION['lastName'] = $postRequest['lastName'];
        $_SESSION['age'] = $postRequest['age'];
        $_SESSION['gender'] = $postRequest['gender'];
        $_SESSION['phoneNum'] = $postRequest['phoneNum'];

        //        print_r($postRequest);


        //redirect to the next page
        echo Template::instance()->render('views/profile.php');

    }

    function profileInfoPOST($postRequest){
        //save post request to session
        $_SESSION['state'] = $postRequest['state'];
        $_SESSION['email'] = $postRequest['email'];
        $_SESSION['seeking'] = $postRequest['seeking'];
        $_SESSION['biography'] = $postRequest['biography'];



        // print_r($postRequest);

        //redirect to the next page - right? yes
            echo Template::instance()->render('views/interests.php');

    }

    function interestsPOST($postRequest){
        //save post request to session
        $_SESSION['someVar'] = $postRequest['someVar'];

        // print_r($postRequest);

        //redirect to the next page - right? yes
        echo Template::instance()->render('views/summary.php');

    }


<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/26/18
 * Time: 7:13 PM
 */

    function welcome(){
        echo 'Hello!!';

    }

    function printSaying(){
        //gather up the data needed

        //show the view
        echo Template::instance()->render('views/saying.php');
    }

    function printSpecificSaying($fatFree, $message){
        //save a value as a "router variable"
        $fatFree->set('message', $message);

        echo Template::instance()->render('views/specificSaying.php');
    }

    function printHometown($fatFree, $message){
        //saving a value as a "router variable"
        $fatFree->set('message', $message);

        echo Template::instance()->render('views/homeTown.php');
    }

    function calculatePrimes($fatFree, $low, $high){
        $primes = findPrimes($low, $high);

        // save our data to the router
        $fatFree->set('primes', $primes);

        // load the page
        echo Template::instance()->render('views/primes.php');
    }
<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 4/26/18
 * Time: 7:01 PM
 */


    //turn on global settings
    error_reporting(E_ALL);

    //global includes
    require  'model/model.php';
    require 'controllers/controller.php';

    //load the fat free framework
    $fatFree = require 'vendor/bcosca/fatfree-core/base.php';

    $fatFree->set('ONERROR', function ($fatFree){
        echo $fatFree->get('ERRPOR.text');
    });

    //define some routes
    $fatFree->route('GET /', function (){
        welcome();
    });

    $fatFree->route('GET /favoriteSaying',function (){
        printSaying();
    });

    $fatFree->route('GET /saying/@message', function ($fatFree, $params){
        printSpecificSaying($fatFree, $params['message']);
    });

    $fatFree->route('GET /hometown/@message', function ($fatFree, $params){
        printHometown($fatFree, $params['message']);
    });

    $fatFree->route('GET /primes/@low/@high', function ($fatFree, $params){
       calculatePrimes($fatFree, $params['low'], $params['high']);
    });

    $fatFree->run();
?>
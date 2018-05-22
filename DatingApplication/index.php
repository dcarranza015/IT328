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
        echo $fatFree->get('ERROR.text');
        profile();
    });

    //define some routes
    $fatFree->route('GET /', function (){
        welcome();
    });
    $fatFree->route('GET /gettingstarted', function (){
        welcome();
    });

    $fatFree->route('GET /gettingstarted/personalInfo',function (){
        personalInfo();
    });

    $fatFree->route('GET /gettingstarted/profile',function (){
        profile();
    });

    $fatFree->route('GET /gettingstarted/interests',function (){
        interests();
    });

    $fatFree->run();
?>



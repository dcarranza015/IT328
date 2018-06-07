<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 5/29/18
 * Time: 5:48 PM
 */

//turn on global settings
error_reporting(E_ALL);

//global includes
//require  'model/model.php';
require 'controllers/controller.php';

//load the fat free framework
$fatFree = require 'vendor/bcosca/fatfree-core/base.php';

$fatFree->set('ONERROR', function ($fatFree){
    echo $fatFree->get('ERROR.text');
});

//define some routes
$fatFree->route('GET /welcome', function (){
    loginPage();
});


$fatFree->route('GET /', function (){
    welcomePage();
});

$fatFree->run();



?>


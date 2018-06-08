<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 6/6/18
 * Time: 9:58 PM
 */

    switch ($_POST['command']){
        case 'login':
            loginValidate();
            break;
        case '':

            break;
    }

    function loginValidate(){
        //map my array values to variables
        extract($_POST);
        return "LOGIN VALIDATION";
    }
    function ajaxGetColors(){
        //get an array of color records
        $colorsArray = getColors();

        //send the array to the JS file in the browser as JSON data
        echo json_encode($colorsArray);

    }
?>

<?php
/**
 * Created by PhpStorm.
 * User: dianacarranza
 * Date: 6/6/18
 * Time: 9:58 PM
 */
include_once 'bookmarkDB.php';
    switch ($_POST['command']){
        case 'login':
            echo loginValidate();
            break;
        case '':

            break;
    }

    function loginValidate(){
        //map my array values to variables
        extract($_POST);

        //do backend validation here
        $pattern = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
        preg_match($pattern, $email, $matches);
        

        //if success
        $isValid = checkUser($email, $password);
        return $isValid;
    }

?>

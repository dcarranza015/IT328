<?php
    error_reporting(E_ALL);

    //create a value
    $number = 100;

    //invoke the functions below
    add();
    subtract($number, 10);
    $number = doSomething($number,3);
    var_dump($number);


    echo $number;

    function add(){
        global $number;

        $number++;
    }

    //pass-by-reference with the & ****READ ON THIS*****
    function subtract(&$number, $value){
        $number -= $value;
    }

    function doSomething($value, $command){
        if($command ==1){ //ADD
            return $value +10;
        } elseif ($command ==2){//Subtract
            return $value -10;
        }

    }

?>
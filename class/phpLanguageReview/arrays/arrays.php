<?php
    $vacationSpot = array('Chicago', 'Staycation', 'Canada/Alaska');

    foreach ($vacationSpot as $spot){
        echo "<p>Spot: $spot</p>";
    }

    for($i = 0; $i < sizeof($vacationSpot); $i++){
        echo '<p>Spot: '.$vacationSpot[$i].'</p>';
    }

    //associate arrays map keys to values
    $favoriteMovies = array('Geoff' => 'A Clockwork Orange',
                            'Josh' => 'Lord of the Rings',
                            'Nick' => 'The Matrix');

    //looping over an associative array
    foreach ($favoriteMovies as $key => $value){
        echo "The favorite movie for $key is $value<br>";
    }

?>
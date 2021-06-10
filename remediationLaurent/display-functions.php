<?php

function displayParties(array $parties) {
    foreach($parties as $party) {
        // var_dump($party);
        echo '<h2>' .$party['location'] . '</h2>';
        echo '<h3>' .$party['price'] . ' €</h3>';
        echo '---';
    }
}
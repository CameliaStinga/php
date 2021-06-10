<?php
include __DIR__ . '/database.php';
include __DIR__ . '/display-functions.php';

$allParties = allParties();

displayParties($allParties);

echo '<h1>The most expensive parties :</h1>';

/* un commentaire pour exemple  */
$moreExpensiveThanTheAverageParties = expensiveParties();
displayParties($moreExpensiveThanTheAverageParties);
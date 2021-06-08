<?php
try {


$bdd = new PDO('mysql:host=localhost;dbname=dabest_photographie;charset=utf8', 'camelia', 'nounours_*_21');
}
catch (Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

?>


<?php include "header.php"; ?>
<?php include "database.php"; ?>
<?php include "Catalogue.php"; ?>
<?php include "Article.php"; ?>
<?php include "Panier.php"; ?>
<?php


$panier= new Panier();
$panier->add(3);
$panier->update(3, 2);
displayPanier($panier);

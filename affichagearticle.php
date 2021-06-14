<?php include "header.php"; ?>
<?php include "database.php"; ?>
<?php include "Catalogue.php"; ?>
<?php include "Article.php"; ?>
<?php

$article = new Article("photo mariage", 50, " ", 20, 1, "ON", 30,2);
$article->displayArticle();
$product= new Bol("bol", 50, " ", 20, 1, "ON", 30,3,"rouge", "ovale");
$product->displayBol();







?>

<?php include "footer.php"; ?>


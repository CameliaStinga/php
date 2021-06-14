

<?php include "header.php"; ?>
<?php include "database.php"; ?>
<?php include "Catalogue.php"; ?>
<?php include "Article.php"; ?>
<?php


//création d'un objet catalogue
$catalogue = new Catalogue();
//affichage catalogue
$catalogue->displayCat();

?>



<?php include "footer.php"; ?>





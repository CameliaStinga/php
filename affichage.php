

<?php include "header.php";?>
<?php include "database.php";?>
<?php include "Catalogue.php";?>
<?php include "Article.php"; ?>
<?php

$article= new Article("photo mariage", 50, " ", 20, 1, "ON", 2);
$article -> displayArticle();


?>







<?php include "footer.php";?>





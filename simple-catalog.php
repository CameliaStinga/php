<?php include("header.php") ?>

<?php

$products = ["Mariage", "Baptème", "Scolaire", "Paysage", "Culinaire", "Autres"];
echo " <h3> Catalogue</h3>";
echo '<br>';
echo "<ul> ";
echo "<li> $products[0]</li>";
echo "<li> $products[1]</li>";
echo "<li> $products[2]</li>";
echo "<li> $products[3]</li>";
echo "<li> $products[4]</li>";
echo "<li> $products[5]</li></ul>";
echo '<br>';

sort($products);
echo " <h3> Catalogue</h3>";
echo "<ul>";
echo "<li> $products[0]</li>";
echo "<li> $products[1]</li>";
echo "<li> $products[2]</li>";
echo "<li> $products[3]</li>";
echo "<li> $products[4]</li>";
echo "<li> $products[5]</li> 
</ul>";
echo '<br>';

//echo implode("<br> ", $products) ;

//var_dump (<ul>$products</ul>);

echo "The first product is $products[0]. </br>";
echo "The last product is $products[5].</br>";
echo '<br>';
echo count($products);
?>

<?php
//boucle for
echo '<br>';
echo "<h3> Catalogue for </h3>";
echo "<ul>";
for ($i = 0; $i < count($products); $i = $i + 1) {
    $product = $products[$i];
    echo "<li>$product</li>";
}
echo "</ul>";
?>

<?php
// boucle foreach
echo '<br>';
echo "<ul>";
echo "<h3> Catalogue foreach </h3>";
foreach ($products as $product) {
    echo "<li>$product</li>";
}
echo "</ul>";
?>
<?php
// boucle while
echo '<br>';
echo "<ul>";
echo "<h3> Catalogue while </h3>";
$i = 0;
while ($i < count($products)) {

    $product = $products[$i];
    echo "<li>$product</li>";
    $i = $i + 1;
}
echo "</ul>";
?>
<?php
// boucle do...while
echo '<br>';
echo "<ul>";
echo "<h3> Catalogue do ... while </h3>";
$i = 0;
do {
    $product = $products[$i];

    echo "<li>$product</li>";
    $i = $i + 1;
}

while ($i < count($products));
echo "<ul>";
?>
<?php
include("footer.php")
?>


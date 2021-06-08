<?php include ("header.php")?>
//<pre>
<?php

$products = ["Mariage", "Baptème", "Scolaire", "Paysage","Culinaire", "Autres"

];


	echo "affichage products :<br>";
	print_r($products);
	echo "<hr>";
echo '<ul> products';
echo '<li>Mariage</li>';
  echo '<li> Baptème </li>';
  echo '<li> Scolaire </li>';
  echo '<li> Paysage </li>';
  echo '<li> Culinaire </li>';
  echo '<li> Autres </li>';


</ul>;
?>;
/*sort ($products);

echo implode("<br> ", $products) ;

$first_item = $products[0];
echo  ($first_item);

$last_item = end($products);
echo ($last_item);
?>;
</pre>
<?php include ("footer.php")?>*/

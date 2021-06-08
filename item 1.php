<?php
$variable = "something";
$img = "https://images.unsplash.com/photo-1593642634367-d91a135587b5?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80";
?>
<html>
<header>

</header>
<body>
<h1>PHP et HTML</h1>

<h2>Option ouverture / fermeture de tag PHP</h2>
<h3>
    <?php echo $variable; ?>
</h3>
<img src="<?php echo $img ?>" alt="" width="200">
<hr>

<?php
echo "<h2>Option ouverture / fermeture de tag PHP</h2>";
echo "<h3>$variable</h3>";
echo "<img src=\"".$img."\" alt=\"\" width=\"200\">";
?>

<?php
echo '<h2>Option ouverture / fermeture de tag PHP</h2>';
echo '<h3>'.$variable.'</h3>';
echo '<img src="'.$img.'" alt="" width="200">';
?>

</body>

</html>
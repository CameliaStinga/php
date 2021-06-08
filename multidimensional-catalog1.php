<?php include("header.php") ?>
<?php include "my_functions.php" ?>
<?php
$Catalogue =
  [
    "Mariage" => [
      "Nom" => "Mariage",
      "prix" => 5000,
      "poids" => 10,
      "remise" => 15,
      "photo" => "https://previews.123rf.com/images/daksel/daksel1201/daksel120100004/11855386-Les-anneaux-de-mariage-en-forme-de-coeurs-Banque-d%2527images.jpg"
    ],
    "Bapteme" => [
      "Nom" => "Baptème",
      "prix" => 4000,
      "poids" => 10,
      "remise" => 10,
      "photo" => "https://www.asonimage.fr/I-Grande-6470-carte-de-bapteme.net.jpg"
    ],
    "Scolaire" => [
      "Nom" => "Scolaire",
      "prix" => 6000,
      "poids" => 10,
      "remise" => 15,
      "photo" => "https://www.canetenroussillon.fr/wp-content/uploads/rentreeScolaireGarconFille.jpg"
    ],

    "Paysage" => [
      "Nom" => "Paysage",
      "prix" => 7000,
      "poids" => 15,
      "remise" => 10,
      "photo" => "https://lesdeuxpiedsdehors.com/wp-content/uploads/2017/10/r%C3%A9ussir-ses-photos-de-paysage-en-voyage11.jpg"
    ],
    "Culinaire" => [
      "Nom" => "Culinaire",
      "prix" => 6000,
      "poids" => 10,
      "remise" => 10,
      "photo" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiRb8ZPkL16fAa88m9T82r2OS_6Tk-hSuNrQ&usqp=CAU"
    ],
    "Autres" => [
      "Nom" => "Autres",
      "prix" => 5000,
      "poids" => 10,
      "remise" => 0,
      "photo" => "https://www.chezvlane.com/photo/art/grande/11434438-19087684.jpg?v=1490136573"
    ]
  ];

echo "<h3> Catalogue</h3>";
echo "<table>
    <tr> 
      <th> Nom</th>
      <th> prix</th>
      <th> poids</th>
      <th> remise</th>
      <th> photo</th>
    </tr>
    <tr> 
      <td> " . $Catalogue["Mariage"]["Nom"] . "</td>
      <td> " . $Catalogue["Mariage"]["prix"] . "</td>
      <td> " . $Catalogue["Mariage"]["poids"] . "</td>
      <td> " . $Catalogue["Mariage"]["remise"] . "</td>
      <td> <img src = '" . $Catalogue["Mariage"]["photo"] . "' alt = 'photo mariage' height=60 width=60/></td>
    </tr>
    <tr>
      <td>" . $Catalogue["Bapteme"]["Nom"] . "</td>
      <td>" . $Catalogue["Bapteme"]["prix"] . " </td>
      <td>" . $Catalogue["Bapteme"]["poids"] . "</td>
      <td>" . $Catalogue["Bapteme"]["remise"] . "</td>
      <td><img src = '" . $Catalogue["Bapteme"]["photo"] . "' alt = 'photo baptème' height=60 width=60/></td>
    <tr> 
      <td> " . $Catalogue["Scolaire"]["Nom"] . "</td>
      <td> " . $Catalogue["Scolaire"]["prix"] . "</td>
      <td> " . $Catalogue["Scolaire"]["poids"] . "</td>
      <td> " . $Catalogue["Scolaire"]["remise"] . "</td>
      <td> <img src = '" . $Catalogue["Scolaire"]["photo"] . "' alt = 'photo scolaire' height=60 width=60/></td>
    </tr>
      <td> " . $Catalogue["Paysage"]["Nom"] . "</td>
      <td> " . $Catalogue["Paysage"]["prix"] . "</td>
      <td> " . $Catalogue["Paysage"]["poids"] . "</td>
      <td> " . $Catalogue["Paysage"]["remise"] . "</td>
      <td> <img src = '" . $Catalogue["Paysage"]["photo"] . "' alt = 'photo paysage' height=60 width=60/></td>
    </tr>
    <tr> 
      <td> " . $Catalogue["Culinaire"]["Nom"] . "</td>
      <td> " . $Catalogue["Culinaire"]["prix"] . "</td>
      <td> " . $Catalogue["Culinaire"]["poids"] . "</td>
      <td> " . $Catalogue["Culinaire"]["remise"] . "</td>
      <td> <img src = '" . $Catalogue["Culinaire"]["photo"] . "' alt = 'photo culinaire' height=60 width=60/></td>
    </tr>
    <tr> 
      <td> " . $Catalogue["Autres"]["Nom"] . "</td>
      <td> " . $Catalogue["Autres"]["prix"] . "</td>
      <td> " . $Catalogue["Autres"]["poids"] . "</td>
      <td> " . $Catalogue["Autres"]["remise"] . "</td>
      <td> <img src = '" . $Catalogue["Autres"]["photo"] . "' alt = 'photo autres' height=60 width=60/></td>
    </tr>
  </table>";

?>



<?php
echo "<pre>";
var_dump($Catalogue);
echo "</pre>";
?>


<h3> Catalogue foreach </h3>
          <table>
             <tr> 
                <th> Nom</th>
                <th> prix</th>
                <th> poids</th>
                <th> remise</th>
                <th> photo</th>
             </tr>";

<?php
foreach ($Catalogue as $cle_1 => $valeur_1) {?>

  <tr>
      <td> <?php echo $valeur_1["Nom"]?> </td>
       <td> € - prix TTC " <?php echo formatPrice($valeur_1["prix"]) ?> </td>
      <td> € - prix HT" <?php echo formatPrice(priceEXcludingVAT($valeur_1["prix"])) ?> </td>
      <td> € - prix HT" <?php echo formatPrice(displayDiscountPrice($valeur_1["prix"],$valeur_1["remise"]))?></td>
      <td> <img src='<?php echo $valeur_1["photo"] ?>' alt ='photo' height=60 width=60 /></td>

        <form method="POST" action="cart.php">
        <td>
        <td><label for="form-select" type="number" > Quantité </label></td>
        <td> <input type="number" name = "chiffre" min= "0" placeholder="entre 0 et 300"></td>
        <td><input type="submit" value="commander" /></td>

  </tr>


    </form>
<?php
}
?>


<?php include("footer.php") ?>
<?php include("header.php") ?>
<?php
$Catalogue =
    [
        "Mariage" => [
            "Nom" => "Mariage",
            "prix" => 50,
            "poids" => 10,
            "remise" => 15,
            "photo" => "https://previews.123rf.com/images/daksel/daksel1201/daksel120100004/11855386-Les-anneaux-de-mariage-en-forme-de-coeurs-Banque-d%2527images.jpg"
        ],
        "Bapteme" => [
            "Nom" => "Baptème",
            "prix" => 40,
            "poids" => 10,
            "remise" => 10,
            "photo" => "https://www.asonimage.fr/I-Grande-6470-carte-de-bapteme.net.jpg"
        ],
        "Scolaire" => [
            "Nom" => "Scolaire",
            "prix" => 60,
            "poids" => 10,
            "remise" => 15,
            "photo" => "https://www.canetenroussillon.fr/wp-content/uploads/rentreeScolaireGarconFille.jpg"
        ],

        "Paysage" => [
            "Nom" => "Paysage",
            "prix" => 70,
            "poids" => 15,
            "remise" => 10,
            "photo" => "https://lesdeuxpiedsdehors.com/wp-content/uploads/2017/10/r%C3%A9ussir-ses-photos-de-paysage-en-voyage11.jpg"
        ],
        "Culinaire" => [
            "Nom" => "Culinaire",
            "prix" => 60,
            "poids" => 10,
            "remise" => 10,
            "photo" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiRb8ZPkL16fAa88m9T82r2OS_6Tk-hSuNrQ&usqp=CAU"
        ],
        "Autres" => [
            "Nom" => "Autres",
            "prix" => 50,
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
echo "<pre>";
var_dump($Catalogue);
echo "</pre>";
?>

<?php
echo '<br>';
echo "<h3> Catalogue for</h3>
     <table>
      <tr> 
         <th> Nom</th>
         <th> prix</th>
         <th> poids</th>
         <th> remise</th>
         <th> photo</th>
      </tr>";

$keys = array_keys($Catalogue);
for ($i = 0; $i < count($keys); $i = $i + 1) {
    //echo "<pre>";
    //echo $keys[$i];
    echo "         
           <tr>
               <td>" . $Catalogue[$keys[$i]]["Nom"] . "</td>
               <td>" . $Catalogue[$keys[$i]]["prix"] . "</td>
               <td>" . $Catalogue[$keys[$i]]["poids"] . "</td>
               <td>" . $Catalogue[$keys[$i]]["remise"] . "</td>
               <td> <img src='" . $Catalogue[$keys[$i]]["photo"] . "' alt ='photo' height=60 width=60/></td>
            </tr> ";
//echo "</pre>";

}
echo "</table>";

/*echo "<br> ";
var_dump ($Catalogue ['Mariage']);
echo "<br> ";
var_dump ($Catalogue ['Baptème']);
echo "<br> ";
var_dump ($Catalogue ['Scolaire']);
echo "<br> ";
var_dump ($Catalogue ['Paysage']);
echo "<br> ";
var_dump ($Catalogue ['Culinaire']);
echo "<br> ";
var_dump ($Catalogue ['Autres']);
echo "<br> ";
//echo "<br>Alex's phone number is  $phone_numbers[Alex]. </br>";
//echo "Jessica's phone number is " . $phone_numbers["Jessica"]. "\n";*/


?>

<?php
echo '<br>';
echo "<h3> Catalogue foreach </h3>
          <table>
             <tr> 
                <th> Nom</th>
                <th> prix</th>
                <th> poids</th>
                <th> remise</th>
                <th> photo</th>
             </tr>";


foreach ($Catalogue as $cle_1 => $valeur_1) {
    echo "<tr>";
    foreach ($valeur_1 as $cle_2 => $valeur_2) {

        if ($cle_2 == "photo") {
            echo " <td> <img src='" . $valeur_2 . "' alt ='photo' height=60 width=60/></td>";
            continue;
        }

        echo "<td>" . $valeur_2 . "</td>";

    }
    echo "</tr>";
}
echo "</table>;"
?>

<?php
echo '<br>';
echo "<h3> Catalogue while </h3>
          <table>
             <tr> 
                <th> Nom</th>
                <th> prix</th>
                <th> poids</th>
                <th> remise</th>
                <th> photo</th>
             </tr>";

$i = 0;
while ($i < count($keys)) {

    $keys = array_keys($Catalogue);

    echo "
           <tr>
              <td>" . $Catalogue[$keys[$i]]["Nom"] . "</td>
               <td>" . $Catalogue[$keys[$i]]["prix"] . "</td>
               <td>" . $Catalogue[$keys[$i]]["poids"] . "</td>
               <td>" . $Catalogue[$keys[$i]]["remise"] . "</td>
               <td> <img src='" . $Catalogue[$keys[$i]]["photo"] . "' alt ='photo' height=60 width=60/></td>
            </tr>";
    $i = $i + 1;
}
echo "</table>";

?>
<?php
echo '<br>';
echo "<h3> Catalogue do while </h3>
          <table>
             <tr> 
                <th> Nom</th>
                <th> prix</th>
                <th> poids</th>
                <th> remise</th>
                <th> photo</th>
             </tr>";
$i = 0;

do {
    $keys = array_keys($Catalogue);

    echo " <tr>
               <td>" . $Catalogue[$keys[$i]]["Nom"] . "</td>
               <td>" . $Catalogue[$keys[$i]]["prix"] . "</td>
               <td>" . $Catalogue[$keys[$i]]["poids"] . "</td>
               <td>" . $Catalogue[$keys[$i]]["remise"] . "</td>
               <td> <img src='" . $Catalogue[$keys[$i]]["photo"] . "' alt ='photo' height=60 width=60/></td>
            </tr>";
    $i = $i + 1;
} while ($i < count($keys));

echo "</table>";
?>


<?php include("footer.php") ?>
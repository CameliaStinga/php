<?php include ("header.php")?>
<?php
$Mariage = [
    "Nom" => "Mariage",
    "prix" => 50,
    "poids" => 10,
    "remise" => 15,
    "photo" => "https://previews.123rf.com/images/daksel/daksel1201/daksel120100004/11855386-Les-anneaux-de-mariage-en-forme-de-coeurs-Banque-d%2527images.jpg",
  ];
  $Bapteme= [
    "Nom" => "Baptème",
    "prix" => 40,
    "poids" => 10,
    "remise" => 10,
    "photo" => "https://www.asonimage.fr/I-Grande-6470-carte-de-bapteme.net.jpg",
  ];
  $Scolaire= [
    "Nom" => "Scolaire",
    "prix" => 60,
    "poids" => 10,
    "remise" => 15,
    "photo" => "https://www.canetenroussillon.fr/wp-content/uploads/rentreeScolaireGarconFille.jpg",
  ];

  $Paysage= [
    "Nom" => "Paysage",
    "prix" => 70,
    "poids" => 15,
    "remise" => 10,
    "photo" => "https://lesdeuxpiedsdehors.com/wp-content/uploads/2017/10/r%C3%A9ussir-ses-photos-de-paysage-en-voyage11.jpg",
  ];
  $Culinaire= [
    "Nom" => "Culinaire",
    "prix" => 60,
    "poids" => 10,
    "remise" => 10,
    "photo" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiRb8ZPkL16fAa88m9T82r2OS_6Tk-hSuNrQ&usqp=CAU",
  ];
  $Autres= [
    "Nom" => "Autres",
    "prix" => 50,
    "poids" => 10,
    "remise" => 0,
    "photo" => "https://www.chezvlane.com/photo/art/grande/11434438-19087684.jpg?v=1490136573",
  ];
  echo "<br>";

  echo "<table>
  <tr> 
  <th> Nom</th>
  <th> prix</th>
  <th> poids</th>
  <th> remise</th>
  <th> photo</th>
  </tr>
  <tr> 
  <td> ".$Mariage["Nom"]."</td>
  <td> ".$Mariage["prix"]."</td>
  <td> ".$Mariage["poids"]."</td>
  <td> ".$Mariage["remise"]."</td>
  <td> <img src = '".$Mariage["photo"]."' alt = 'photo mariage' height=60 width=60/></td>
  </tr>
  <tr>
  <td>".$Bapteme["Nom"]."</td>
  <td>".$Bapteme["prix"]." </td>
  <td>".$Bapteme["poids"]."</td>
  <td>".$Bapteme["remise"]."</td>
  <td><img src = '".$Bapteme["photo"]."' alt = 'photo baptème' height=60 width=60/></td>
  <tr> 
  <td> ".$Scolaire["Nom"]."</td>
  <td> ".$Scolaire["prix"]."</td>
  <td> ".$Scolaire["poids"]."</td>
  <td> ".$Scolaire["remise"]."</td>
  <td> <img src = '".$Scolaire["photo"]."' alt = 'photo scolaire' height=60 width=60/></td>
  </tr>
  <td> ".$Paysage["Nom"]."</td>
  <td> ".$Paysage["prix"]."</td>
  <td> ".$Paysage["poids"]."</td>
  <td> ".$Paysage["remise"]."</td>
  <td> <img src = '".$Paysage["photo"]."' alt = 'photo paysage' height=60 width=60/></td>
  </tr>
  <tr> 
  <td> ".$Culinaire["Nom"]."</td>
  <td> ".$Culinaire["prix"]."</td>
  <td> ".$Culinaire["poids"]."</td>
  <td> ".$Culinaire["remise"]."</td>
  <td> <img src = '".$Culinaire["photo"]."' alt = 'photo culinaire' height=60 width=60/></td>
  </tr>
  <tr> 
  <td> ".$Autres["Nom"]."</td>
  <td> ".$Autres["prix"]."</td>
  <td> ".$Autres["poids"]."</td>
  <td> ".$Autres["remise"]."</td>
  <td> <img src = '".$Autres["photo"]."' alt = 'photo autres' height=60 width=60/></td>
  </tr>
  </table>";
  

  //echo "$Mariage[Nom],$Mariage[prix],$Mariage[poids], $Mariage[remise],<img src = '$Mariage[photo]' alt = photo mariage height=40 width=40/></br>";

  //echo "$Baptème[Nom] $Baptème[prix] $Baptème[poids] $Baptème[remise] <img src = '$Baptème[photo]' alt = photo baptème height=60 width=60/></br>";
  
  /*echo "<tr> 
  <td> $Culinaire[Nom]</td>
  <td> $Culinaire[prix]</td>
  <td> $Culinaire[poids]</td>
  <td> $Culinaire[remise]</td>
  <td> <img src = '$Culinaire[photo]' alt = photo culinaire height=60 width=60/></td>
  </tr></br>";

  <table>
  <tr>
    <td>&nbsp;</td>
    <td>Knocky</td>
    <td>Flor</td>
    <td>Ella</td>
    <td>Juan</td>
  </tr>
  print_r ($Mariage);
  echo "<br> ";
  print_r ($Baptème);
  echo "<br> ";
  print_r ($Scolaire);
  echo "<br> ";
  print_r ($Paysage);
  echo "<br> ";
  print_r ($Culinaire);
  echo "<br> ";
  print_r ($Autres);
  echo "<br> ";*/
  //echo "<br>Alex's phone number is  $phone_numbers[Alex]. </br>";
  //echo "Jessica's phone number is " . $phone_numbers["Jessica"]. "\n";
?>
<?php

/*echo "<table>
<tr> 
<th> Nom</th>
<th> prix</th>
<th> poids</th>
<th> remise</th>
<th> photo</th>
</tr></table>";

foreach($Mariage as $key=>$value){


  echo "
  <tr> 
  <td> ".$value."</td>
  </tr>
  ";*/
  //var_dump($value);
  //if (is_array($key)){
    
      /*echo "
  <tr> 
  <td> ".$Mariage["value"]."</td>
  <td> <img src = '".$Mariage["value"]."' alt = 'photo mariage' height=60 width=60/></td>
  </tr>
  ";
      
 }*/

  




?>
<?php include ("footer.php")?>
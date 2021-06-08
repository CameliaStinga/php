<?php include("header.php") ?>
    <html>
    <body>
    
<?php include ("my_functions.php")?>
<?php include ("Produits.php")?>
<?php
$quantite=(int) $_POST ["quantite"];
$name = $_POST["Nom"];
$prixTTC=$_POST["prix"];
$poids=$_POST["poids"];
$poids_total=$poids*$quantite;
$remise=$_POST["remise"];
$prix_total_TTC=$prixTTC*$quantite;
$remise_prix=$prixTTC*(1-$remise/100);

priceEXcludingVAT($_POST["prix"]);
//displayDiscountPrice($_POST["prix"],$_POST["remise"];
//$prix_remise=(int)displayDiscountPrice($_POST["prix"],$_POST["remise"];
$prix_HT=priceEXcludingVAT($_POST["prix"]);
$prix_total_HT=$prix_HT*$quantite;
$TVA=$prix_total_TTC-$prix_total_HT;
$prix_total_TTC_remise=$remise_prix*$quantite;
frais_de_port ($poids_total, $prixTTC);
$frais_de_port=frais_de_port ($poids_total, $prixTTC);
$prix_total_TTC_frais_de_port=$prix_total_TTC+$frais_de_port;
?>
<table class="table">
        <thead>
        <tr>
            <th colspan="2">
                <h1 align = "center"> Formulaire catalogue</h1>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td align="center">
                <h3>Nom</h3>
            </td>
            <td align="center">
                <h3>Prix unitaire TTC (€) </h3>
            </td>
            <td align="center">
                <h3>Prix unitaire HT (€)</h3>
            </td>
            <td align="center">
                <h3>Remise (%)</h3>
            </td>
            <td align="center">
                <h3> Prix unitaire TTC remisé (€)</h3>
            </td> 
            <td align="center">
                <h3>Poids (g)</h3>
            </td>
            
            
            <td align="center">
                <h3>Photos</h3>
            </td>
            <td align="center">
                <h3>Quantité (nb)</h3>
            </td>
            <td align="center">
                <h3>Poids total (g)</h3>
                </td>
            <td align="center">
                <h3>Prix total HT (€)</h3>
            </td>
            <td align="center">
                <h3>TVA (€)</h3>
            </td>
            <td align="center">
                <h3>Prix total TTC (€)</h3>
            </td>
            
            <td align="center">
                <h3>Prix total TTC remisé (€)</h3>
            </td>
                
            <td align="center">
                <h3>Frais de port (€)</h3>
            </td>
            <td align="center">
                <h3>Prix total + frais de port (€)</h3>
            </td>
            <td align="center">
                <h3>Transporteur</h3>
            </td>
        </tr>


<tr>
    <td align="center"> <?php echo $name;?></td>
  
    <td align="center">  <?php echo $prixTTC?></td>
      <td align="center">  <?php echo $prix_HT ?> </td>
      <td align="center">  <?php echo $remise?></td>
      <td align="center"> <?php echo $remise_prix;?></td>
      <td align="center"> <?php echo $poids?> </td>
      <td align="center"> <img src='<?php //echo $valeur["photo"] ?>' alt ='photo' height=60 width=60 /></td>
      <td align="center"> <?php echo $quantite;?></td>
      <td align="center"> <?php echo $poids_total?> </td>
      <td align="center"> <?php echo $prix_total_HT;?></td>
      <td align="center"> <?php echo $TVA;?></td>
      <td align="center"> <?php echo $prix_total_TTC;?></td>
      <td align="center"> <?php echo $prix_total_TTC_remise;?></td>
      <td align="center"> <?php echo $frais_de_port;?></td>
      <td align="center"> <?php echo $prix_total_TTC_frais_de_port;?></td>
      <td align="center"> <?php echo $_POST["Transporteur"];?></td>
    </tr>
</table>
<?php

 //formatPrice($_POST["prix"]);


//$prix_total_TTC = ($prix_TTC* $quantité);
     //echo $_POST["prix_total_TTC"];

?>


<p> Go <a href="multidimensional-catalog.php"> Back</a> to the catalogue</p>

</body>
</html>

<?php include("footer.php") ?>
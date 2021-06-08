<?php include("header.php") ?>

<?php include("my_functions.php") ?>
<?php
include("Produits.php")
?>
<?php global $Catalogue; ?>
<table class="table">
    <thead>
        <tr>
            <th colspan="2">
                <h1 align="center"> Catalogue </h1>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td align="center">
                <h3>Nom</h3>
            </td>
            <td align="center">
                <h3>Prix TTC (€) </h3>
            </td>
            <td align="center">
                <h3>Prix HT (€)</h3>
            </td>
            <td align="center">
                <h3>Remise (%)</h3>
            </td>
            <td align="center">
                <h3>Poids (g)</h3>
            </td>
            <td align="center">
                <h3>Photos</h3>
            </td>
            <td align="center">
                <h3>Prix TTC remisé (€)</h3>
            </td>
            <td align="center">
                <h3>Quantité/Transporteur</h3>
            </td>
            <td align="center">
                <h3>Frais de port</h3>
            </td>
        </tr>

        <?php
        foreach ($Catalogue as $cle_1 => $valeur) { ?>

            <tr>
                <td align="center"> <?php echo $valeur["Nom"]  ?> </td>
                <td align="center"> <?php echo formatPrice($valeur["prix"]) ?></td>
                <td align="center"> <?php echo formatPrice(priceEXcludingVAT($valeur["prix"])) ?> </td>
                <td align="center"> <?php echo $valeur["remise"]  ?> </td>
                <td align="center"> <?php echo $valeur["poids"]  ?> </td>
                <td align="center"> <img src='<?php echo $valeur["photo"] ?>' alt='photo' height=60 width=60 /></td>
                <td align="center"> <?php echo formatPrice(displayDiscountPrice($valeur["prix"], $valeur["remise"])) ?></td>
                
                <form method="POST" action="cart.php">

                    <td align="left"><label for="form-select" type="number"> </label>

                        <input type="hidden" name="Nom" value="<?php echo $cle_1; ?>" />
                        <input type="hidden" name="remise" value="<?php echo $valeur["remise"]; ?>" />
                        <input type="hidden" name="prix" value="<?php echo formatPrice($valeur["prix"]); ?>" />
                        <input type="hidden" name="prixHT" value="<?php echo formatPrice(priceEXcludingVAT($valeur["prix"])); ?>" />
                        <input type="hidden" name="prixremise" value="<?php echo formatPrice(displayDiscountPrice($valeur["prix"], $valeur["remise"])); ?>" />
                        <input type="hidden" name="poids" value="<?php echo $valeur["poids"]; ?>" />
                        <input type="number" name="quantite" min="0" placeholder="entre 0 et 1000" />
                        <input type="hidden" name="frais de port" value="<?php echo frais_de_port ($poids_total, $prixTTC); ?>" />
                        
                        <select type = text name="Transporteur">
                            <option value="choix du transporteur">Transporteur</option>
                            <option value="La Poste">La Poste</option>
                            <option value="TNT">TNT</option>
                            <option value="autre">autre </option>
                        </select>
                        <input type="submit" class="btn btn-primary" value="commander" />
                    </td>

            </tr>


            </form>

        <?php
        }
        ?>
    </tbody>
</table>

<?php include("footer.php") ?>
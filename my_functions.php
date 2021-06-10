

<?php
//caculer le prix en euros
function formatPrice($price_cts)
{
    $formatPrice=$price_cts/100;
return (int)$formatPrice;
}

//$formatPrice=formatPrice(5000);
echo"<br>";
?>
<?php
function priceQuantity ($formatPrice, $quantite ){
    $priceQuantity= $formatPrice *$quantite;
    return (int)$priceQuantity;

}
$priceQuantity=priceQuantity (50, 3);
//echo "prix total est de $priceQuantity";
?>
<?php
function priceExcludingVAT ($price_TTC)
{

    $TVA=20;
    $priceExcludingVAT=($price_TTC*100)/(100+$TVA);
    return (int) $priceExcludingVAT;
   
}
$priceEXcludingVAT=priceExcludingVAT(7000);
$formatPrice=$priceEXcludingVAT/100;
//echo " Le prix sans tva est de: $formatPrice euros";
echo"<br>";

?>

<?php
function displayDiscountPrice($price_TTC,$discount)
{   
    $displayDiscountPrice=$price_TTC*(1-$discount/100);
    return (int)$displayDiscountPrice;
}

$displayDiscountPrice=displayDiscountPrice(1500,50);
$formatPrice=$displayDiscountPrice/100;
//echo "Le prix de vente remisé est de: $formatPrice euros.";

?>
<?php
function frais_de_port ($poids_total, $prixTTC) {

    if ($poids_total<=500) {

       return  5;
       
    }

    else if ($poids_total<=2000) {

        return (int)$prixTTC*0.1;
    }

    
       return 0;

    
}
?>
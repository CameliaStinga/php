<?php


function bddAccess() {
    return $bdd=new PDO(  'mysql:host=localhost;dbname=dabest_photographie;charset=utf8', 'camelia', 'nounours_*_21');


}

?>

<?php
function allCustomers (){
    $bdd=bddAccess();
// On récupère tout le contenu de la table customers (querry1);
$r1 = $bdd->query('SELECT * FROM customers');

// On affiche chaque entrée une à une
while ($donnees = $r1->fetch())
{
    ?>

        <strong>Client</strong> : <?php echo $donnees['last_name']. '  '.$donnees['first_name']; ?><br />
        L'émail de ce client est : <?php echo $donnees['email']; ?> et il habite à <?php echo $donnees['address'].'  '.$donnees['postcode'].' ' .$donnees['city']; ?>.<br />


    <?php
}


$r1->closeCursor(); // Termine le traitement de la requête
}
?>

        <?php
        function oneCustomer (){
            $bdd=bddAccess();
        $r2= $bdd->query('SELECT first_name FROM customers WHERE  first_name=\'Charlize\'');
        while ($donnees = $r2->fetch())
        {
        ?>
    <strong>Le client demandé est </strong> : <?php echo $donnees['first_name']; ?><br />
    <?php
    }
    $r2->closeCursor();
        }
    ?>



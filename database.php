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
}echo"<br>";
$r1->closeCursor(); // Termine le traitement de la requête
}
?>
        <?php
        echo"<br>";
        function oneCustomer (){
            $bdd=bddAccess();
        $r2= $bdd->query('SELECT first_name FROM customers WHERE  first_name=\'Charlize\'');
        while ($donnees = $r2->fetch())
        {
        ?>
    <strong>Le client demandé est </strong> : <?php echo $donnees['first_name']; ?><br />
    <?php
    } echo"<br>";
    $r2->closeCursor();
        }

    ?>
<?php

function orderProducts (){
    $bdd=bddAccess();
    $r3= $bdd->query('SELECT products.name, order_product.quantity, products.price
                               FROM products 
                               INNER JOIN order_product ON(products.id=order_product.product_id)
                               WHERE order_product.order_id = 1');
    while ($donnees = $r3->fetch())
    {
        ?>
        <strong>Les produits de la commande id=1 sont </strong> : <?php echo $donnees['name'];?><br/>
        <strong> La quantité est de</strong> : <?php echo $donnees['quantity'];?><br/>
        <strong> Le prix est de</strong> : <?php echo $donnees['price'];?><br/>
        <?php

    }   echo"<br>";
    $r3->closeCursor();
}
?>

<?php
    function ordersCharlize (){
    $bdd=bddAccess();
    $r4= $bdd->query('SELECT orders.number, sum(order_product.quantity*products.price) AS totalPrice
                               FROM orders 
                               INNER JOIN order_product ON orders.id=order_product.order_id
                               INNER JOIN products ON order_product.product_id=products.id
                               INNER JOIN customers ON customers.id=orders.customer_id
                               WHERE customers.first_name =\'Charlize\'
                               Group by orders.number');
    while ($donnees = $r4->fetch())
    {
    ?>
    <strong>Liste des commandes</strong> : <?php echo $donnees['number'];?><br/>
    <strong> Le prix total de la commande</strong> : <?php echo $donnees['totalPrice'];?><br/>

<?php

}echo"<br>";
$r4->closeCursor();
}
?>

<?php
function insertOrder (){
    $bdd=bddAccess();
 $bdd->exec('INSERT INTO orders(date,number,customer_id) 
                               VALUES (\'2021-06-08\',\'order00007\',2)');
    echo "Commande ajoutée!";
    echo"<br>";
}
?>
<?php
function deleteOrder ($id){
    $bdd=bddAccess();
    $req = $bdd->prepare('DELETE FROM `orders` WHERE `orders`.`id` = :id');
    $req->execute(array(
            'id'=>$id,
    ));
    echo "Commande effacée!";
    }
?>
<?php
function upDate ($id){
    $bdd=bddAccess();
    $req = $bdd->prepare('DELETE FROM `orders` WHERE `orders`.`id` = :id');
    $req->execute(array(
        'id'=>$id,
    ));
    echo "Commande effacée!";
}
?>
<?php


function bddAccess()
{
return new PDO('mysql:host=localhost;dbname=dabest_photographie;charset=utf8', 'camelia', 'nounours_*_21');
}

?>

<?php
function allCustomers()
{
    $bdd = bddAccess();

    // On récupère tout le contenu de la table customers (querry1);

    $r1 = $bdd->query('SELECT * FROM customers');

    // On affiche chaque entrée une à une
    while ($donnees = $r1->fetch()) {
?>
        <strong>Client</strong> : <?php echo $donnees['last_name'] . '  ' . $donnees['first_name']; ?><br />
        L'émail de ce client est : <?php echo $donnees['email']; ?> et il habite à <?php echo $donnees['address'] . '  ' . $donnees['postcode'] . ' ' . $donnees['city']; ?>.<br />
<?php
    }
    echo "<br>";
    $r1->closeCursor(); // Termine le traitement de la requête
}
?>

<?php
function allProducts()
{
    $bdd = bddAccess();

    // On récupère tout le contenu de la table customers (querry1);

    $rp = $bdd->query('SELECT * FROM products');

    // On affiche chaque entrée une à une
    while ($products = $rp->fetch()) {
?>
        <table class="table">
            <tr>
            <tr>
                <td><?php echo $products['name']; ?> </td>
            </tr>
            <tr>
                <td><?php echo $products['price']; ?> </td>
            </tr>
            <tr>
                <td> <img src='<?php echo $products["picture"] ?>' alt='photo' height=60 width=60 />
            <tr>
                <td><?php echo $products['weight']; ?> </td>
            </tr>
            <tr>
                <td><?php echo $products['quantity']; ?> </td>
            </tr>
            <tr>
                <td><?php echo $products['available']; ?> </td>
            </tr>
            <tr>
                <td><?php echo $products['size']; ?> </td>
            </tr>
            <tr>
                <td><?php echo $products['categories_id']; ?> </td>
            </tr>
        </table>

<?php
    }
    echo "<br>";
    $rp->closeCursor(); // Termine le traitement de la requête
}
?>



<?php
echo "<br>";
function oneCustomer()
{
    $bdd = bddAccess();
    $r2 = $bdd->query('SELECT first_name FROM customers WHERE  first_name=\'Charlize\'');
    while ($donnees = $r2->fetch()) {
?>
        <strong>Le client demandé est </strong> : <?php echo $donnees['first_name']; ?><br />
<?php
    }
    echo "<br>";
    $r2->closeCursor();
}

?>
<?php

function orderProducts()
{
    $bdd = bddAccess();
    $r3 = $bdd->query('SELECT products.name, order_product.quantity, products.price
                               FROM products 
                               INNER JOIN order_product ON(products.id=order_product.product_id)
                               WHERE order_product.order_id = 1');
    while ($products = $r3->fetch()) {
?>
        <strong>Les produits de la commande id=1 sont </strong> : <?php echo $products['name']; ?><br />
        <strong> La quantité est de</strong> : <?php echo $products['quantity']; ?><br />
        <strong> Le prix est de</strong> : <?php echo $products['price']; ?><br />
<?php

    }
    echo "<br>";
    $r3->closeCursor();
}
?>

<?php
function ordersCharlize()
{
    $bdd = bddAccess();
    $r4 = $bdd->query('SELECT orders.number, sum(order_product.quantity*products.price) AS totalPrice
                               FROM orders 
                               INNER JOIN order_product ON orders.id=order_product.order_id
                               INNER JOIN products ON order_product.product_id=products.id
                               INNER JOIN customers ON customers.id=orders.customer_id
                               WHERE customers.first_name =\'Charlize\'
                               Group by orders.number');
    while ($donnees = $r4->fetch()) {
?>
        <strong>Liste des commandes</strong> : <?php echo $donnees['number']; ?><br />
        <strong> Le prix total de la commande</strong> : <?php echo $donnees['totalPrice']; ?><br />

<?php

    }
    echo "<br>";
    $r4->closeCursor();
}
?>

<?php
function insertOrder()
{
    $bdd = bddAccess();
    $bdd->exec('INSERT INTO orders(date,number,customer_id) VALUES (\'2021-06-08\',\'order00007\',2)');
    echo "Commande ajoutée!";
    echo "<br>";
}
?>
<?php
function deleteOrder($id)
{
    $bdd = bddAccess();
    $req = $bdd->prepare('DELETE FROM `orders` WHERE `orders`.`id` = :id');
    $req->execute(array(
        'id' => $id,
    ));
    echo "Commande effacée!";
    echo "<br>";
}
?>
<?php
//function upDate (){
// $bdd=bddAccess();
//$modif=$bdd->execute('UPDATE products SET price=price*1,05  WHERE categories_id = 3');

//
//echo $modif;
//}

function insertCustomer()
{
    $bdd = bddAccess();
    $bdd->exec('INSERT INTO customers (last_name,first_name,email,address, postcode, city) VALUES (\'GOSLING\', \'Ryan\', \'ryan.gosling@gmail.com\',\'56 rue Verdun\',95000, \'Paris\')');
    echo "Ryan ajouté!";
    echo "<br>";
}
?>
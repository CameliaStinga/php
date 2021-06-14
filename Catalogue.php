<?php


class Catalogue
{
//argument
    public $allProducts = [];
//constructeur
    public function __construct()
    {//on admet que la base de données est un objet PDO
        $bdd = new PDO('mysql:host=localhost;dbname=dabest_photographie;charset=utf8', 'camelia', 'nounours_*_21');
        //on fait la requête pour recuperer les produits
        $allProducts = $bdd->query('SELECT * FROM products');
        foreach ($allProducts as $products) {
            //condition pour créer/instancier les produits qui ont les deux propriétés supplémentaires
            if ($products['color'] === 'bleu' or $products['form'] === 'rond') {
                $products = new Bol($products['name'], $products['price'], $products['picture'], $products['weight'], $products['quantity'], $products['available'], $products['size'], $products['categories_id'], $products['color'], $products['form']);
                //on empile les variables à la fin du tableau
                array_push($this->allProducts, $products);
            } else {
                //créer/instancier les produits ayant les caractéristiques habituelles
                $products = new Article($products['name'], $products['price'], $products['picture'], $products['weight'], $products['quantity'], $products['available'], $products['size'], $products['categories_id']);
                //emplier les produits dans le tableau
                array_push($this->allProducts, $products);
            }
        }
        //chaque entrée sera récupérée et placée dans le tableau(allproducts)
        $allProducts->fetchAll(Pdo::FETCH_ASSOC);
    }

// fonction pour afficher le catalogue selon les caractéristiques des produits
    function displayCat()
    {

        foreach ($this->allProducts as $product) {
            //on utilise instanceof pour vérifier qu'il s'agit d'un objet instancié d'une classe
            if ($product instanceof Bol) {
                $product->displayBol();
            } else {
                $product->displayArticle();
            }
        }
    }
}



<?php
class Article {
    public $name ="photo";
    public $price;// = 50
    public $picture; //= //"https://www.mairie-saintjean.fr/wp-content/uploads/2017/03/Mariageok-848x478.jpg";
    public $weight;//= //20;
    public $quantity;// = 1;
    public $available; //= "ON";
    public $categories_id;// = 2;

public function __construct ($name, $price, $picture, $weight, $quantity, $available, $categories_id) {
    $this->name=$name;
    $this->price=$price;
    $this->picture=$picture;
    $this->weight=$weight;
    $this->quantity=$quantity;
    $this->available=$available;
    $this->categories_id=$categories_id;
    }

public function displayArticle() {?>
<table class="table">
    <th>
    <tr>
        <td> <?php echo "le nom du produit est: $this->name" ;?></td>
    <td> <?php echo "le prix du produit est de: $this->price €" ; ?></td>
    <td> <?php echo "la photo du produit est: $this->picture"; ?></td>
        <td> <?php echo "le poids du produit est: $this->weight g"; ?></td>
    <td> <?php echo "la quantité est de: $this->quantity" ;?></td>
    <td> <?php echo "le produit est disponible: $this->available" ;?></td>
    <td> <?php echo "la catégorie du produit est: $this->categories_id"; ?></td>
    </tr>

</th>
</table>
<?php
}


} ?>



<?php
class Article
{
    public $name; // = "photo";
    private $price; // = 50
    public $picture; // "https://www.mairie-saintjean.fr/wp-content/uploads/2017/03/Mariageok-848x478.jpg";
    public $weight; //= //20;
    public $quantity; // = 1;
    public $available; //= "ON";
    public $size; //=30;
    public $categories_id; // = 2;


    //le constructeur d'une classe a pour role d'initialiser l'objet 
    //en cours de création, c'est-à-dire d'initialiser la valeur des attributs
    // (soit en assignant directement des valeurs spécifiques, soit en appelant diverses méthodes).
    public function __construct($name, $price, $picture, $weight, $quantity, $available, $size, $categories_id)
    {
        $this->name = $name;
        $this->price = $price;
        $this->picture = $picture;
        $this->weight = $weight;
        $this->quantity = $quantity;
        $this->available = $available;
        $this->size = $size;
        $this->categories_id = $categories_id;
    }
    public function setPrice($price)
    {
        return $this->price = $price;
    }

    public function displayArticle()
    { ?>
        <table class="table">

            <tr>
                <td colspan="2">
                    <strong align="center"> Article </strong>
                </td>
            </tr>

            <tr>
                <td align="left">
                    <p>Name</p>
                </td>

                <td align="left">
                    <p>Price </p>
                </td>
                <td align="left">
                    <p>Picture</p>
                </td>
                <td align="left">
                    <p>Weight</p>
                </td>
                <td align="left">
                    <p>Quantity</p>
                </td>
                <td align="left">
                    <p>Available</p>
                </td>
                <td align="left">
                    <p>Size</p>
                </td>
                <td align="left">
                    <p>categories_id</p>
                </td>
            </tr>

            <tr>

                <td> <?php echo " $this->name"; ?></td>
                <td> <?php echo " $this->price"; ?></td>
                <td> <?php echo '<img src="' . $this->picture . '" alt= "" height="60" width="60">' ?></td>
                <td> <?php echo " $this->weight "; ?></td>
                <td> <?php echo " $this->quantity"; ?></td>
                <td> <?php echo " $this->available"; ?></td>
                <td> <?php echo " $this->size"; ?></td>
                <td> <?php echo " $this->categories_id"; ?></td>
            </tr>


        </table>
    <?php
    }
}

class Bol extends Article
{
    public $color;
    public $form;

    function __construct($name, $price, $picture, $weight, $quantity, $available, $size, $categories_id, $color, $form)
    {
        parent::__construct($name, $price, $picture, $weight, $quantity, $available, $size, $categories_id);
        $this->color = $color;
        $this->form = $form;
    }


    //getter: pour renvoyer la valeur prix 
    //public function getprice()
    //{
       //return $this->price;
    //}


    //setter: pour assigner la valeur à l'argument prix 

    //getter : affiche (renvoie ) toutes les valeurs et donc le prix
    public function displayBol()

    { ?>

        <table class="table">

            <tr>
                <td colspan="2">
                    <strong align="center"> Article </strong>
                </td>
            </tr>

            <tr>
                <td align="left">
                    <p>Name</p>
                </td>

                <td align="left">
                    <p>Price </p>
                </td>
                <td align="left">
                    <p>Picture</p>
                </td>
                <td align="left">
                    <p>Weight</p>
                </td>
                <td align="left">
                    <p>Quantity</p>
                </td>
                <td align="left">
                    <p>Available</p>
                </td>
                <td align="left">
                    <p>Size</p>
                </td>
                <td align="left">
                    <p>categories_id</p>
                </td>

                <td align="left">
                    <p>color</p>

                </td>
                <td align="left">
                    <p>form</p>
                </td>
            </tr>

            <tr>

                <td> <?php echo " $this->name"; ?></td>
                <td> <?php echo  $this->setPrice(200); ?></td>
                <td> <?php echo '<img src="' . $this->picture . '" alt= "" height="60" width="60">' ?></td>
                <td> <?php echo " $this->weight "; ?></td>
                <td> <?php echo " $this->quantity"; ?></td>
                <td> <?php echo " $this->available"; ?></td>
                <td> <?php echo " $this->size"; ?></td>
                <td> <?php echo " $this->categories_id"; ?></td>
                <td> <?php echo " $this->color"; ?></td>
                <td> <?php echo " $this->form"; ?></td>
            </tr>


        </table>
<?php
    }

    
}

?>
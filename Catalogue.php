<?php
include "database.php";

class Catalogue {

   public array $allProducts=[];

    public function __construct (array $allProducts) {
        $allProducts->query('SELECT *FROM Products');



        //foreach (this->allproducts[] as $product){

        }
?>
<pre>
<?php vardump($allProducts);?>
</pre>
        }
    }


}


?>
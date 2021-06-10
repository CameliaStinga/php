<?php

require_once __DIR__ . '/Drink.php';
require_once __DIR__ . '/AlcoolDrink.php';
require_once __DIR__ . '/SoftDrink.php';
require_once __DIR__ . '/Glass.php';
require_once __DIR__ . '/Order.php';

?>

<html lang="">
    <head>
        <title></title>
    </head>

    <body>

    <pre>
    <?php

        $coca = new SoftDrink('Coca');
        $verreDeCoca = new Glass(100);
        $verreDeCoca->fill($coca);

        $pastis = new AlcoolDrink('Pastis', 50);
        $verreDePastis = new Glass(100);
        $verreDePastis->fill($pastis);

        $biere = new AlcoolDrink('Bière', 5);
        $verreDeBiere = new Glass(100);
        $verreDeBiere->fill($biere);

        $commande = new Order(1);
        $commande->addGlass($verreDeCoca);
        $commande->addGlass($verreDeBiere);
        $commande->addGlass($verreDePastis);

        // print_r($commande->getGlasses());

        foreach ($commande->getGlasses() as $glass) {
            $drink = $glass->drink;
            print_r($drink->getName());
        }

        $commandeTable2 = new Order(2);
        $commandeTable2->fromCustomerOrder([
            ['name' => 'orangina', 'size' => 25],
            ['name' => 'coca', 'size' => 25],
        ]);

        foreach ($commandeTable2->getGlasses() as $glass) {
            $drink = $glass->drink;
            print_r($drink->getName());
        }
    ?>
        </pre>

    </body>
</html>
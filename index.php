<?php
/**********
 * Include
 * ********/ 

include_once __DIR__ . '/classes/Electronics.php';

include_once __DIR__ . '/classes/Smartphone.php';

include_once __DIR__ . '/classes/Computer.php';

include_once __DIR__ . '/classes/Domestic_appliances.php';

include_once __DIR__ . '/classes/Washing_machines.php';

include_once __DIR__ . '/classes/Fridge.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>
</head>
<body>
    <h2>Smartphone</h2>
    <ul>
        <?php 
            echo $smartphone1->printProducts() . $smartphone1->printElectronics() .
                $smartphone1->printSmartphoneSpecs();
        ?>
    </ul>
    <ul>
        <?php 
            echo $smartphone2->printProducts() . $smartphone2->printElectronics() .
                $smartphone2->printSmartphoneSpecs();
        ?>
    </ul>

    <ul>
        <?php 
            echo $smartphone3->printProducts() . $smartphone3->printElectronics() .
                $smartphone3->printSmartphoneSpecs();
        ?>
    </ul>

    <h2>Computer</h2>    
    <ul>
        <?php 
            echo $computer1->printProducts() . $computer1->printElectronics() .
                $computer1->printComputerSpecs();
        ?>
    </ul>

    <ul>
        <?php 
            echo $computer2->printProducts() . $computer2->printElectronics() .
                $computer2->printComputerSpecs();
        ?>
    </ul>

    <ul>
        <?php 
            echo $computer3->printProducts() . $computer3->printElectronics() .
                $computer3->printComputerSpecs();
        ?>
    </ul>

    <h2>Lavatrici</h2>
    <ul>
        <?php 
            echo $washing1->printProducts(). 
                $washing1->printDomesticApp() . 
                $washing1->printWashingMach();
        ?>
    </ul>

    <ul>
        <?php 
            echo $washing2->printProducts(). 
                $washing2->printDomesticApp() . 
                $washing2->printWashingMach();
        ?>
    </ul>
    <ul>
        <?php 
            echo $washing3->printProducts(). 
                $washing3->printDomesticApp() . 
                $washing3->printWashingMach();
        ?>
    </ul>

    <h2>Frigoriferi</h2>
    <ul>
        <?php 
                echo $fridge1->printProducts(). 
                    $fridge1->printDomesticApp() . 
                    $fridge1->printFridge();
            ?>
    </ul>

    <ul>
        <?php 
                echo $fridge2->printProducts(). 
                    $fridge2->printDomesticApp() . 
                    $fridge2->printFridge();
            ?>
    </ul>

    <ul>
        <?php 
                echo $fridge3->printProducts(). 
                    $fridge3->printDomesticApp() . 
                    $fridge3->printFridge();
            ?>
    </ul>
    
</body>
</html>
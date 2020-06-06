<?php
/**********
 * Include
 * ********/ 

include_once __DIR__ . '/classes/Electronics.php';

include_once __DIR__ . '/classes/Smartphone.php';

include_once __DIR__ . '/classes/Computer.php';



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
        echo $computer1->printProducts() . $smartphone3->printElectronics() .
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
    
</body>
</html>
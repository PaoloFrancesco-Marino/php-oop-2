<?php
/**********
 * Include
 * ********/ 

include_once __DIR__ . '/classes/electronics.php';

include_once __DIR__ . '/classes/smartphone.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>
</head>
<body>
    <ul>
        <li>
            <?php 
                echo $smartphone1->printProducts() . $smartphone1->printElectronics() .
                    $smartphone1->printSmartphoneSpecs();
            ?>
        </li>

        <li>
            <?php 
            echo $smartphone2->printProducts() . $smartphone2->printElectronics() .
                $smartphone2->printSmartphoneSpecs();
            ?>
        </li>
        <li>
            <?php 
            echo $smartphone3->printProducts() . $smartphone3->printElectronics() .
                $smartphone3->printSmartphoneSpecs();
            ?>
        </li>
    </ul>
    
    
    

</body>
</html>
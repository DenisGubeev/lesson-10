<?php

require_once 'classes/interfaces/ProductInterface.php';
require_once 'classes/Product.php';

require_once 'classes/interfaces/SmartphoneInterface.php';
require_once 'classes/traits/SmartphoneTrait.php';
require_once 'classes/Smartphone.php';

require_once 'classes/interfaces/CarInterface.php';
require_once 'classes/Car.php';

require_once 'classes/BagOfPotatoes.php';
$smartphone = new Smartphone('Sony Xperia Z5', 40000, 'tech', 0.2);

$car = new Car('BMW', 2300000, 'car', 1700);

$bagOfPotatoes = new BagOfPotatoes('Avrora', 20, 'food', 12);

?>

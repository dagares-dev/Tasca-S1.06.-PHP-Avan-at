<?php
declare(strict_types=1);

require_once 'Car.php';

$car1 = new Car("Seat Ibiza", "5639LMB", "sin plomo 95", 180);

echo "<h2>Nivell 2</h2>";
echo "<h3>Exercici 2</h3>";

$car1->startTurbo();
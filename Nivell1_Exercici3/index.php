<?php
declare(strict_types=1);

require_once 'NinjaTurtle_MagicMethods.php';

$turtles = [
    new NinjaTurtle("Leonardo", "azul", "katanas"),
    new NinjaTurtle("Raphael", "rojo", "sais"),
    new NinjaTurtle("Donatello", "morado", "bo"),
    new NinjaTurtle("Michelangelo", "naranja", "nunchakus"),
];

echo "<h2>Nivell 1</h2>";
echo "<h3>Exercici 3</h3>";

foreach ($turtles as $turtle) {
    echo $turtle . "<br>";
}

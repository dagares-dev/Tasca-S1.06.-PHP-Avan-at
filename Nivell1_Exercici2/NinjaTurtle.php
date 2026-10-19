<?php
/*
Fes un programa que faci servir almenys un parell de constants màgiques:
Exercici inventat -> crear una classe de Tortuga Ninja, cadascuna ha de tenir un nom, color i arma obligatòriament.
 */
declare(strict_types=1);

class NinjaTurtle
{
    public function __construct(
        private string $name,
        private string $color,
        private string $weapon
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getWeapon(): string
    {
        return $this->weapon;
    }

    public function introduceTurtle(): string
    {
        return "Soy la tortuga ninja {$this->getName()}, "
            . "mi color es el {$this->getColor()}, "
            . "y mi arma: {$this->getWeapon()}."
            . " [Clase: " . __CLASS__ . "]"
            . " [Método: " . __METHOD__ . "]"
            . " [Línea: " . __LINE__ . "]";
    }
}
<?php
/*
Sobreescriu alguna de les lògiques d’entre tots els mètodes màgics que hi ha (que no sigui __construct)
*/
declare(strict_types=1);

class NinjaTurtle {
    public function __construct(
        private string $name,
        private string $color,
        private string $weapon
    ) {}

    public function getName(): string { 
        return $this->name; }
    public function getColor(): string { 
        return $this->color; }
    public function getWeapon(): string { 
        return $this->weapon; }

        public function __toString(): string {
        return "{$this->name} tiene la bandana {$this->color} y lleva {$this->weapon}"
            . " [Clase: " . __CLASS__ . "]"
            . " [Método: " . __METHOD__ . "]"
            . " [Línea: " . __LINE__ . "]";
    }

    /*
    -VERSION ORIGINAL-
    public function introduceTurtle(): string {
    return "Soy la tortuga ninja {$this->name}, mi color es el {$this->color}, y mi arma: {$this->weapon}."
        . " [Clase: " . __CLASS__ . "]"
        . " [Método: " . __METHOD__ . "]"
        . " [Línea: " . __LINE__ . "]";}
    */
}
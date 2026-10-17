<?php
/*
Implementa una classe Car que tingui informació sobre un cotxe (marca, matrícula, tipus de combustible, velocitat màxima).
A més, implementa un Trait anomenat Turbo que tingui un mètode boost() que mostri un missatge “S’ha iniciat el turbo”. 
Usa aquest mètode des de la classe Car.
*/
declare(strict_types=1);

trait Turbo
{
    public function boost(): void
    { echo "S'ha iniciat el turbo\n";}
}

class Car
{
    use Turbo;

    public function __construct(
        public string $brand,
        public string $licensePlate,
        public string $fuelType,
        public int $maxSpeed,
    ) {}

    public function startTurbo(): void
    { $this->boost();}
}
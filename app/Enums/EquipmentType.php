<?php

namespace App\Enums;

class EquipmentType
{
    const WEAPON = 'Broń';
    const HELMET = 'Hełm';
    const ARMOR = 'Zbroja';
    const LEGS = 'Spodnie';
    const BOOTS = 'Buty';
    const SHIELD = 'Tarcza';
    const GLOVES = 'Rękawice';

    const TYPE = [
        self::WEAPON,
        self::HELMET,
        self::ARMOR,
        self::LEGS,
        self::BOOTS,
        self::SHIELD,
        self::GLOVES
    ];
}

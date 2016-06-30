<?php
namespace DrdPlus\Stamina\EnumTypes;

use Doctrineum\Integer\IntegerEnumType;

class MalusFromFatigueType extends IntegerEnumType
{
    const MALUS_FROM_FATIGUE = 'malus_from_fatigue';

    /**
     * @return string
     */
    public function getName()
    {
        return self::MALUS_FROM_FATIGUE;
    }
}
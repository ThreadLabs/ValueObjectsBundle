<?php

namespace ThreadLabs\ValueObjectsBundle\Value\UnitMeasurement;

/**
 * @author Stephen Wilkinson
 */
class Angle extends AbstractUnitMeasurement
{
    const UNIT_DEGREES = 'degrees';

    const UNIT_DEGREES_SHORT = '°';

    const UNIT_RADIANS = 'radians';

    const UNIT_RADIANS_SHORT = 'rad';

    /**
     * {@inheritdoc}
     */
    public function getValidUnits()
    {
        return [
            self::UNIT_DEGREES,
            self::UNIT_RADIANS
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getUnitShorthand()
    {
        switch ($this->unit)
        {
            case self::UNIT_DEGREES:
                return self::UNIT_DEGREES_SHORT;
            case self::UNIT_RADIANS:
                return self::UNIT_RADIANS_SHORT;
            default:
                return null;
        }
    }
}
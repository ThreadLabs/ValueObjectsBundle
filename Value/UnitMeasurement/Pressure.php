<?php

namespace ThreadLabs\ValueObjectsBundle\Value\UnitMeasurement;

/**
 * @author Stephen Wilkinson
 */
class Pressure extends AbstractUnitMeasurement
{
    const UNIT_MILLIBAR = 'millibars';

    const UNIT_MILLIBAR_SHORT = 'hPa';

    /**
     * {@inheritdoc}
     */
    public function getValidUnits()
    {
        return [
            self::UNIT_MILLIBAR
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getUnitShorthand()
    {
        switch ($this->unit)
        {
            case self::UNIT_MILLIBAR:
                return self::UNIT_MILLIBAR_SHORT;
            default:
                return null;
        }
    }
}
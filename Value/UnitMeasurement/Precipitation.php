<?php

namespace ThreadLabs\ValueObjectsBundle\Value\UnitMeasurement;

/**
 * @author Stephen Wilkinson
 */
class Precipitation extends AbstractUnitMeasurement
{
    const UNIT_MILLIMETRE = 'millimetres';

    const UNIT_MILLIMETRE_SHORT = 'mm';

    /**
     * {@inheritdoc}
     */
    public function getValidUnits()
    {
        return [
            self::UNIT_MILLIMETRE
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getUnitShorthand()
    {
        switch ($this->unit)
        {
            case self::UNIT_MILLIMETRE:
                return self::UNIT_MILLIMETRE_SHORT;
            default:
                return null;
        }
    }
}
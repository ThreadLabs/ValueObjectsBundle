<?php

namespace ThreadLabs\ValueObjectsBundle\Value\UnitMeasurement;

/**
 * @author Stephen Wilkinson
 */
class Speed extends AbstractUnitMeasurement
{
    const UNIT_METER_SEC = 'metre/sec';

    const UNIT_METER_SEC_SHORT = 'm/s';

    const UNIT_MILES_HOUR = 'miles/hour';

    const UNIT_MILES_HOUR_SHORT = 'mph';

    /**
     * {@inheritdoc}
     */
    public function getUnitShorthand()
    {
        switch ($this->unit)
        {
            case self::UNIT_METER_SEC:
                return self::UNIT_METER_SEC_SHORT;
            case self::UNIT_MILES_HOUR:
                return self::UNIT_MILES_HOUR_SHORT;
            default:
                return null;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getValidUnits()
    {
        return [
            self::UNIT_METER_SEC,
            self::UNIT_MILES_HOUR
        ];
    }
}
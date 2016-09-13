<?php

namespace ThreadLabs\ValueObjectsBundle\Value\UnitMeasurement;

/**
 * @author Stephen Wilkinson
 */
class Temperature extends AbstractUnitMeasurement
{
    const UNIT_KELVIN = 'Kelvin';

    const UNIT_KELVIN_SHORT = 'K';

    const UNIT_CELSIUS = 'Celsius';

    const UNIT_CELSIUS_SHORT = '°C';

    const UNIT_FAHRENHEIT = 'Fahrenheit';

    const UNIT_FAHRENHEIT_SHORT = '°F';

    /**
     * {@inheritdoc}
     */
    public function getValidUnits()
    {
        return [
            self::UNIT_CELSIUS,
            self::UNIT_FAHRENHEIT,
            self::UNIT_KELVIN
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getUnitShorthand()
    {
        switch ($this->unit)
        {
            case self::UNIT_KELVIN:
                return self::UNIT_KELVIN_SHORT;
            case self::UNIT_CELSIUS:
                return self::UNIT_CELSIUS_SHORT;
            case self::UNIT_FAHRENHEIT:
                return self::UNIT_FAHRENHEIT_SHORT;
            default:
                return null;
        }
    }
}
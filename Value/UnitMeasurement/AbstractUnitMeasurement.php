<?php

namespace ThreadLabs\ValueObjectsBundle\Value\UnitMeasurement;

/**
 * @author Stephen Wilkinson
 */
abstract class AbstractUnitMeasurement
{
    const INVALID_UNIT_MESSAGE = 'Invalid unit "s%"; accepted values: %s';

    /**
     * @var float
     */
    protected $value;

    /**
     * @var string
     */
    protected $unit;

    /**
     * @param float  $value
     * @param string $unit
     *
     * @throws \InvalidArgumentException If populated with invalid unit
     */
    public function __construct($value, $unit)
    {
        $validUnits = $this->getValidUnits();

        if (!in_array($unit, $validUnits)) {
            throw new \InvalidArgumentException(sprintf(self::INVALID_UNIT_MESSAGE, $unit, implode(', ', $validUnits)));
        }
    }

    /**
     * @return string[]
     */
    abstract public function getValidUnits();

    /**
     * @return string
     */
    abstract public function getUnitShorthand();

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s%s', $this->getValue(), $this->getUnitShorthand());
    }

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }
}
<?php

namespace SOLID\SRP;

class Bus
{
    /**
     * @var int
     */
    private int $BusNumber;

    /**
     * @var string
     */
    private string $color="red";

    /**
     * @var int
     */
    private int $MaximumPassenger;

    /**
     * @var int
     */
    private int $MaximumSpeed;

    /**
     * @var Route
     */
    private Route $routs;

    /**
     * @var Driver
     */
    private Driver $driver;

    public function __construct(int $BusNumber)
    {
        return $this->setBusNumber($BusNumber);
    }

    /**
     * @return int
     */
    public function getBusNumber(): int
    {
        return $this->BusNumber;
    }

    /**
     * @param int $BusNumber
     * @return int
     */
    public function setBusNumber(int $BusNumber): int
    {
        return $this->BusNumber = $BusNumber;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getMaximumPassenger(): int
    {
        return $this->MaximumPassenger;
    }

    /**
     * @param int $MaximumPassenger
     */
    public function setMaximumPassenger(int $MaximumPassenger): void
    {
        $this->MaximumPassenger = $MaximumPassenger;
    }

    /**
     * @return int
     */
    public function getMaximumSpeed(): int
    {
        return $this->MaximumSpeed;
    }

    /**
     * @param int $MaximumSpeed
     */
    public function setMaximumSpeed(int $MaximumSpeed): void
    {
        $this->MaximumSpeed = $MaximumSpeed;
    }

    /**
     * @return Driver
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }

    /**
     * @param Driver $driver
     */
    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    /**
     * @return Route
     */
    public function getRouts(): Route
    {
        return $this->routs;
    }

    /**
     * @param Route $route
     * @return void
     */
    public function addRoute(Route $route):void
    {
        $this->routs = $route;
    }

}

<?php

declare(strict_types=1);

namespace MobilityWork\Entity;

class Customer
{
    /**
     * @var string
     */
    protected $simplePhoneNumber;

    /**
     * @return string
     */
    public function getSimplePhoneNumber(): string
    {
        return $this->simplePhoneNumber;
    }

    /**
     * @param string $simplePhoneNumber
     */
    public function setSimplePhoneNumber(string $simplePhoneNumber): void
    {
        $this->simplePhoneNumber = $simplePhoneNumber;
    }
}

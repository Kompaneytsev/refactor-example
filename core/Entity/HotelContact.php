<?php

declare(strict_types=1);

namespace MobilityWork\Entity;

class HotelContact
{
    /**
     * @var string
     */
    protected $email;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return HotelContact
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }
}

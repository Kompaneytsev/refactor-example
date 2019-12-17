<?php

declare(strict_types=1);

namespace MobilityWork\Entity;

class User
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}

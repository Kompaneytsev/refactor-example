<?php

declare(strict_types=1);

namespace MobilityWork\Entity;

class Currency
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }
}

<?php

declare(strict_types=1);

namespace MobilityWork\Enum;

interface ReservationSource
{
    public const CUSTOMER = 'customer';
    public const HOTEL = 'hotel';
    public const PRESS = 'press';
    public const PARTNER = 'partner';
}

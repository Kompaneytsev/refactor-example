<?php

declare(strict_types=1);

namespace MobilityWork\Repository;

use MobilityWork\Entity\Reservation;

abstract class ReservationRepository
{
    abstract function getByRef(string $number): ?Reservation;
}

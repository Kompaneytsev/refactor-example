<?php

declare(strict_types=1);

namespace MobilityWork\Service;

use MobilityWork\Entity\Hotel;
use MobilityWork\Entity\HotelContact;

abstract class HotelContactsService
{
    abstract public function getMainHotelContact(Hotel $hotel): HotelContact;
}

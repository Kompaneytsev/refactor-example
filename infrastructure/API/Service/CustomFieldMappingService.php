<?php

declare(strict_types=1);

namespace Zendesk\API\Service;

use MobilityWork\Dto\CustomFieldsDto;

class CustomFieldMappingService
{
    public const CUSTOMER_TYPE = 80924888;
    public const RESERVATION_NUMBER = 80531327;
    public const ROOM_NAME = 80531287;
    public const ROOM_PRICE = 80924568;
    public const BOOKED_DATE = 80531307;
    public const BOOKED_TIME = 80918728;
    public const HOTEL_EMAIL = 80531267;
    public const HOTEL_NAME = 80918668;
    public const HOTEL_ADDRESS = 80918648;
    public const LANGUAGE_NAME = 80918708;

    public function convert(CustomFieldsDto $dto): array
    {
        return [
            self::CUSTOMER_TYPE => $dto->getCustomerType(),
            self::RESERVATION_NUMBER => $dto->getReservationNumber(),
            self::ROOM_NAME => $dto->getRoomName(),
            self::ROOM_PRICE => $dto->getRoomPrice(),
            self::BOOKED_DATE => $dto->getBookedDate(),
            self::BOOKED_TIME => $dto->getBookedTime(),
            self::HOTEL_EMAIL => $dto->getHotelEmail(),
            self::HOTEL_NAME => $dto->getHotelName(),
            self::HOTEL_ADDRESS => $dto->getHotelAddress(),
            self::LANGUAGE_NAME => $dto->getLanguageName(),
        ];
    }
}

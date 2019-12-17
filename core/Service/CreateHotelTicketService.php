<?php

declare(strict_types=1);

namespace MobilityWork\Service;

use MobilityWork\Dto\CustomFieldsDto;
use MobilityWork\Entity\Language;
use MobilityWork\Enum\ReservationSource;
use MobilityWork\Enum\UserType;
use Zendesk\API\Dto\RequestUserCreateOrUpdateDto;
use Zendesk\API\Dto\ResponseTicketCreateDto;

class CreateHotelTicketService extends AbstractCreateTicketService
{
    public function create(string $firstName,
                           string $lastName,
                           string $phoneNumber,
                           string $email,
                           string $city,
                           string $website,
                           string $hotelName,
                           string $message,
                           Language $language): ?ResponseTicketCreateDto
    {
        $customFieldsDto = (new CustomFieldsDto())
            ->setCustomerType(ReservationSource::HOTEL)
            ->setHotelName($hotelName)
            ->setHotelAddress($city)
            ->setLanguageName($language->getName());

        $userCreateOrUpdateDto = new RequestUserCreateOrUpdateDto(
            $email,
            $firstName . ' ' . mb_strtoupper($lastName),
            $phoneNumber,
            UserType::END_USER,
            ['website' => $website]
        );

        $subject = mb_strlen($message) > 50 ? mb_substr($message, 0, 50) . '...' : $message;
        return $this->sendRequest($userCreateOrUpdateDto, $subject, $message, $customFieldsDto);
    }
}

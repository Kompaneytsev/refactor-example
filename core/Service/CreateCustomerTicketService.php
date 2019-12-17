<?php

declare(strict_types=1);

namespace MobilityWork\Service;

use MobilityWork\Dto\CustomFieldsDto;
use MobilityWork\Entity\Hotel;
use MobilityWork\Entity\Language;
use MobilityWork\Enum\ReservationSource;
use MobilityWork\Enum\UserType;
use MobilityWork\Repository\ReservationRepository;
use Zendesk\API\Dto\RequestUserCreateOrUpdateDto;
use Zendesk\API\Dto\ResponseTicketCreateDto;

class CreateCustomerTicketService extends AbstractCreateTicketService
{
    /**
     * @var ReservationRepository
     */
    protected $reservationRepository;

    /**
     * @var HotelContactsService
     */
    protected $hotelContactsService;


    /**
     * @param ReservationRepository $reservationRepository
     */
    public function setReservationRepository(ReservationRepository $reservationRepository): void
    {
        $this->reservationRepository = $reservationRepository;
    }

    /**
     * @param HotelContactsService $hotelContactsService
     */
    public function setHotelContactsService(HotelContactsService $hotelContactsService): void
    {
        $this->hotelContactsService = $hotelContactsService;
    }

    public function create(string $firstName,
                           string $lastName,
                           string $phoneNumber,
                           string $email,
                           string $message,
                           ?string $reservationNumber,
                           ?Hotel $hotel,
                           Language $language): ?ResponseTicketCreateDto
    {
        $reservation = null;
        if (!empty($reservationNumber)) {
            $reservation = $this->reservationRepository->getByRef($reservationNumber);
            if ($reservation !== null && $hotel === null) {
                $hotel = $reservation->getHotel();
            }
        }

        $customFieldsDto = (new CustomFieldsDto())
            ->setCustomerType(ReservationSource::CUSTOMER)
            ->setReservationNumber($reservationNumber)
            ->setLanguageName($language->getName());

        if ($hotel !== null) {
            $customFieldsDto
                ->setHotelEmail($this->hotelContactsService->getMainHotelContact($hotel)->getEmail())
                ->setHotelName($hotel->getName())
                ->setHotelAddress($hotel->getAddress());
        }

        if ($reservation !== null) {
            $customFieldsDto
                ->setRoomName($reservation->getRoom()->getRoomName())
                ->setBookedDate($reservation->getBookedDate()->format('Y-m-d'))
                ->setRoomPrice($reservation->getRoomPrice() . ' ' . $reservation->getHotel()->getCurrency()->getCode())
                ->setBookedTime($reservation->getBookedStartTime()->format('H:i') . ' - ' . $reservation->getBookedEndTime()->format('H:i'));
        }

        $userCreateOrUpdateDto = new RequestUserCreateOrUpdateDto(
            $email,
            $firstName . ' ' . mb_strtoupper($lastName),
            $phoneNumber ?? ($reservation !== null ? $reservation->getCustomer()->getSimplePhoneNumber() : ''),
            UserType::END_USER
        );
        $subject = mb_strlen($message) > 50 ? mb_substr($message, 0, 50) . '...' : $message;
        return $this->sendRequest($userCreateOrUpdateDto, $subject, $message, $customFieldsDto);
    }
}

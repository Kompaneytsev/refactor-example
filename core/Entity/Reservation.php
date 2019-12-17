<?php

declare(strict_types=1);

namespace MobilityWork\Entity;

use DateTime;

class Reservation
{
    /**
     * @var string
     */
    protected $reservationNumber;

    /**
     * @var Hotel
     */
    protected $hotel;

    /**
     * @var Room
     */
    protected $room;

    /**
     * @var DateTime
     */
    protected $bookedDate;

    /**
     * @var DateTime
     */
    protected $bookedStartTime;

    /**
     * @var DateTime
     */
    protected $bookedEndTime;

    /**
     * @var int
     */
    protected $roomPrice;

    /**
     * @var Customer
     */
    protected $customer;

    /**
     * @return string
     */
    public function getReservationNumber(): string
    {
        return $this->reservationNumber;
    }

    /**
     * @param string $reservationNumber
     * @return Reservation
     */
    public function setReservationNumber(string $reservationNumber): self
    {
        $this->reservationNumber = $reservationNumber;
        return $this;
    }

    /**
     * @return Hotel
     */
    public function getHotel(): Hotel
    {
        return $this->hotel;
    }

    /**
     * @param Hotel $hotel
     * @return Reservation
     */
    public function setHotel(Hotel $hotel): self
    {
        $this->hotel = $hotel;
        return $this;
    }

    /**
     * @return Room
     */
    public function getRoom(): Room
    {
        return $this->room;
    }

    /**
     * @param Room $room
     * @return Reservation
     */
    public function setRoom(Room $room): self
    {
        $this->room = $room;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getBookedDate(): DateTime
    {
        return $this->bookedDate;
    }

    /**
     * @param DateTime $bookedDate
     * @return Reservation
     */
    public function setBookedDate(DateTime $bookedDate): self
    {
        $this->bookedDate = $bookedDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getRoomPrice(): int
    {
        return $this->roomPrice;
    }

    /**
     * @param int $roomPrice
     */
    public function setRoomPrice(int $roomPrice): void
    {
        $this->roomPrice = $roomPrice;
    }

    /**
     * @return DateTime
     */
    public function getBookedStartTime(): DateTime
    {
        return $this->bookedStartTime;
    }

    /**
     * @param DateTime $bookedStartTime
     */
    public function setBookedStartTime(DateTime $bookedStartTime): void
    {
        $this->bookedStartTime = $bookedStartTime;
    }

    /**
     * @return DateTime
     */
    public function getBookedEndTime(): DateTime
    {
        return $this->bookedEndTime;
    }

    /**
     * @param DateTime $bookedEndTime
     */
    public function setBookedEndTime(DateTime $bookedEndTime): void
    {
        $this->bookedEndTime = $bookedEndTime;
    }

    /**
     * @return Customer
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * @param Customer $customer
     */
    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }
}

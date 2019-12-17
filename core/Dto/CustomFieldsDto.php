<?php

declare(strict_types=1);

namespace MobilityWork\Dto;

class CustomFieldsDto
{
    /**
     * 80924888
     *
     * @var string
     */
    protected $customerType;

    /**
     * 80531327
     *
     * @var string|null
     */
    protected $reservationNumber;

    /**
     * 80531267
     *
     * @var string|null
     */
    protected $hotelEmail;

    /**
     * 80918668
     *
     * @var string|null
     */
    protected $hotelName;

    /**
     * 80918648
     *
     * @var string|null
     */
    protected $hotelAddress;

    /**
     * 80918708
     *
     * @var string|null
     */
    protected $languageName;

    /**
     * 80531287
     *
     * @var string|null
     */
    protected $roomName;

    /**
     * 80531307
     *
     * @var string|null
     */
    protected $bookedDate;

    /**
     * 80924568
     *
     * @var string|null
     */
    protected $roomPrice;

    /**
     * 80918728
     *
     * @var string|null
     */
    protected $bookedTime;

    /**
     * @return string
     */
    public function getCustomerType(): string
    {
        return $this->customerType;
    }

    /**
     * @param string $customerType
     * @return CustomFieldsDto
     */
    public function setCustomerType(string $customerType): self
    {
        $this->customerType = $customerType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReservationNumber(): ?string
    {
        return $this->reservationNumber;
    }

    /**
     * @param string|null $reservationNumber
     * @return CustomFieldsDto
     */
    public function setReservationNumber(?string $reservationNumber): self
    {
        $this->reservationNumber = $reservationNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHotelEmail(): ?string
    {
        return $this->hotelEmail;
    }

    /**
     * @param string|null $hotelEmail
     * @return CustomFieldsDto
     */
    public function setHotelEmail(?string $hotelEmail): self
    {
        $this->hotelEmail = $hotelEmail;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHotelName(): ?string
    {
        return $this->hotelName;
    }

    /**
     * @param string|null $hotelName
     * @return CustomFieldsDto
     */
    public function setHotelName(?string $hotelName): self
    {
        $this->hotelName = $hotelName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHotelAddress(): ?string
    {
        return $this->hotelAddress;
    }

    /**
     * @param string|null $hotelAddress
     * @return CustomFieldsDto
     */
    public function setHotelAddress(?string $hotelAddress): self
    {
        $this->hotelAddress = $hotelAddress;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguageName(): ?string
    {
        return $this->languageName;
    }

    /**
     * @param string|null $languageName
     * @return CustomFieldsDto
     */
    public function setLanguageName(?string $languageName): self
    {
        $this->languageName = $languageName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRoomName(): ?string
    {
        return $this->roomName;
    }

    /**
     * @param string|null $roomName
     * @return CustomFieldsDto
     */
    public function setRoomName(?string $roomName): self
    {
        $this->roomName = $roomName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBookedDate(): ?string
    {
        return $this->bookedDate;
    }

    /**
     * @param string|null $bookedDate
     * @return CustomFieldsDto
     */
    public function setBookedDate(?string $bookedDate): self
    {
        $this->bookedDate = $bookedDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRoomPrice(): ?string
    {
        return $this->roomPrice;
    }

    /**
     * @param string|null $roomPrice
     * @return CustomFieldsDto
     */
    public function setRoomPrice(?string $roomPrice): self
    {
        $this->roomPrice = $roomPrice;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBookedTime(): ?string
    {
        return $this->bookedTime;
    }

    /**
     * @param string|null $bookedTime
     * @return CustomFieldsDto
     */
    public function setBookedTime(?string $bookedTime): self
    {
        $this->bookedTime = $bookedTime;
        return $this;
    }
}

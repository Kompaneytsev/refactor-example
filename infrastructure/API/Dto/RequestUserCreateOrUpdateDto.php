<?php

declare(strict_types=1);

namespace Zendesk\API\Dto;

class RequestUserCreateOrUpdateDto
{
    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $role;

    /**
     * @var mixed[]
     */
    protected $userFields;

    public function __construct(string $email, string $name, string $phone, string $role, array $userFields = [])
    {
        $this->email = $email;
        $this->name = $name;
        $this->phone = $phone;
        $this->role = $role;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @return mixed[]
     */
    public function getUserFields(): array
    {
        return $this->userFields;
    }
}

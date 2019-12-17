<?php

declare(strict_types=1);

namespace Zendesk\API\Dto;

use MobilityWork\Entity\User;

class ResponseUserCreateOrUpdateDto
{
    /**
     * @var User
     */
    protected $user;

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }
}

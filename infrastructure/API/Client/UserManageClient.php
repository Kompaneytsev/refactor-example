<?php

declare(strict_types=1);

namespace Zendesk\API\Client;

use Zendesk\API\Dto\RequestUserCreateOrUpdateDto;
use Zendesk\API\Dto\ResponseUserCreateOrUpdateDto;
use Zendesk\API\Exception\RequestUserCreateOrUpdateException;

abstract class UserManageClient
{
    /**
     * @var HttpClient
     */
    protected $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param RequestUserCreateOrUpdateDto $dto
     * @return ResponseUserCreateOrUpdateDto
     * @throws RequestUserCreateOrUpdateException
     */
    abstract public function createOrUpdate(RequestUserCreateOrUpdateDto $dto): ResponseUserCreateOrUpdateDto;
}

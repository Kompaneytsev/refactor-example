<?php

declare(strict_types=1);

namespace Zendesk\API\Client;

use Zendesk\API\Dto\RequestTicketCreateDto;
use Zendesk\API\Dto\ResponseTicketCreateDto;
use Zendesk\API\Exception\RequestTicketCreateException;

abstract class TicketManageClient
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
     * @param RequestTicketCreateDto $dto
     * @return ResponseTicketCreateDto
     * @throws RequestTicketCreateException
     */
    abstract public function create(RequestTicketCreateDto $dto): ResponseTicketCreateDto;
}

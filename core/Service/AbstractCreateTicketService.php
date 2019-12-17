<?php

declare(strict_types=1);

namespace MobilityWork\Service;

use MobilityWork\Dto\CustomFieldsDto;
use MobilityWork\Enum\TicketPriority;
use MobilityWork\Enum\TicketStatus;
use MobilityWork\Enum\TicketType;
use Psr\Log\LoggerInterface;
use Zendesk\API\Dto\RequestTicketCreateDto;
use Zendesk\API\Dto\RequestUserCreateOrUpdateDto;
use Zendesk\API\Dto\ResponseTicketCreateDto;
use Zendesk\API\Exception\RequestTicketCreateException;
use Zendesk\API\Exception\RequestUserCreateOrUpdateException;
use Zendesk\API\Service\CustomFieldMappingService;
use Zendesk\API\Client\TicketManageClient;
use Zendesk\API\Client\UserManageClient;

abstract class AbstractCreateTicketService
{
    /**
     * @var UserManageClient
     */
    protected $userManageService;

    /**
     * @var TicketManageClient
     */
    protected $ticketManageService;

    /**
     * @var CustomFieldMappingService
     */
    protected $customFieldMapping;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function __construct(UserManageClient $userManageService,
                                TicketManageClient $ticketManageService,
                                CustomFieldMappingService $customFieldMapping,
                                LoggerInterface $logger)
    {
        $this->userManageService = $userManageService;
        $this->ticketManageService = $ticketManageService;
        $this->customFieldMapping = $customFieldMapping;
        $this->logger = $logger;
    }

    /**
     * Making request to ticket creation API and obtain errors
     *
     * @param RequestUserCreateOrUpdateDto $userCreateOrUpdateDto
     * @param string $subject
     * @param string $message
     * @param CustomFieldsDto $customFieldsDto
     * @return ResponseTicketCreateDto|null
     */
    protected function sendRequest(RequestUserCreateOrUpdateDto $userCreateOrUpdateDto,
                                   string $subject,
                                   string $message,
                                   CustomFieldsDto $customFieldsDto): ?ResponseTicketCreateDto
    {
        try {
            $response = $this->userManageService->createOrUpdate($userCreateOrUpdateDto);

            $ticketCreateDto = new RequestTicketCreateDto($response->getUser()->getId(),
                $subject,
                $message,
                TicketPriority::PRIORITY_NORMAL,
                TicketType::TYPE_QUESTION,
                TicketStatus::STATUS_NEW,
                $this->customFieldMapping->convert($customFieldsDto)
            );

            return $this->ticketManageService->create($ticketCreateDto);
        } catch (RequestUserCreateOrUpdateException $exception) { // order is important
            $this->logger->error($exception->getMessage(), [
                'requester_email' => $userCreateOrUpdateDto->getEmail()
            ]);
            return null;
        } catch (RequestTicketCreateException $exception) {
            $this->logger->error($exception->getMessage(), [
                'requester_id' => $response->getUser()->getId()
            ]);
            return null;
        }
    }
}

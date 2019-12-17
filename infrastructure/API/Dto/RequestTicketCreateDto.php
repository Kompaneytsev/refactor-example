<?php

declare(strict_types=1);

namespace Zendesk\API\Dto;

class RequestTicketCreateDto
{
    /**
     * @var int
     */
    protected $requesterId;

    /**
     * @var string
     */
    protected $subject;

    /**
     * @var string
     */
    protected $commentBody;

    /**
     * @var string
     */
    protected $priority;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var array
     */
    protected $custom_fields;

    public function __construct(int $requesterId,
                                string $subject,
                                string $commentBody,
                                string $priority,
                                string $type,
                                string $status,
                                array $custom_fields)
    {
        $this->requesterId = $requesterId;
        $this->subject = $subject;
        $this->commentBody = $commentBody;
        $this->priority = $priority;
        $this->type = $type;
        $this->status = $status;
        $this->custom_fields = $custom_fields;
    }
}

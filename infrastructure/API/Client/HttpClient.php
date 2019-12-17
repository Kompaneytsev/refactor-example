<?php

declare(strict_types=1);

namespace Zendesk\API\Client;

abstract class HttpClient
{
    protected $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    /**
     * @param string $rule
     * @param mixed[] $params
     * @return HttpClient
     */
    abstract public function setAuth(string $rule, array $params): self;
}

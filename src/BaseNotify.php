<?php

namespace Printi\NotifyBundle;

use Aws\Sns\SnsClient;

class BaseNotify
{
    /** @var array $config */
    protected $config;

    /** @var SnsClient $snsClient */
    protected $snsClient;

    /**
     * BaseNotify constructor.
     *
     * @param array     $config
     * @param SnsClient $snsClient
     */
    public function __construct(array $config, SnsClient $snsClient)
    {
        $this->config    = $config;
        $this->snsClient = $snsClient;
    }

    public function publishAwsSns(string $topic, array $message = [])
    {

    }
}

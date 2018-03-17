<?php

namespace Avir\DataBase;


class DbConnect
{
    /**
     * @var DbConfig
     */
    private $configuration;

    /**
     * @param DbConfig $config
     */
    public function __construct(DbConfig $config)
    {
        $this->configuration = $config;
    }

    public function getDsn(): string
    {
        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort(),
            $this->configuration->getCharset()
        );
    }
}
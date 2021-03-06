<?php

namespace mespinosaz\Utility\ObjectTemplate;

class IdentifiedObject
{
    private $identifier;

    public function __construct($identifier)
    {
        $this->identifier = $identifier;
    }

    public function getId()
    {
        return $this->identifier;
    }
}

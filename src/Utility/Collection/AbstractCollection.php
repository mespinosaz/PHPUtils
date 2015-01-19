<?php

namespace mespinosaz\Utility\Collection;

abstract class AbstractCollection
{
    protected $collection;

    public function __construct()
    {
        $this->collection = array();
    }

    abstract public function add();

    public function get($key)
    {
        return $this->collection[$key];
    }

    public function size()
    {
        return count($this->collection);
    }
}

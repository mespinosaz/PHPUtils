<?php

namespace mespinosaz\Utility\Collection;

class Collection extends AbstractCollection
{
    public function add()
    {
        list($value) = func_get_args();
        $this->collection[] = $value;
    }
}

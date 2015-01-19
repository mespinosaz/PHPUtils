<?php

namespace mespinosaz\Utility\Tests\Collection;

use mespinosaz\Utility\Collection\Collection;

class CollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $collection = new Collection();

        $this->assertEquals(0, $collection->size());
        $collection->add(1);
        $this->assertEquals(1, $collection->size());
    }

    public function testGet()
    {
        $originalElement = '123';
        $collection = new Collection();
        $collection->add($originalElement);
        $element = $collection->get(0);
        $this->assertEquals($element, $element);
    }
}

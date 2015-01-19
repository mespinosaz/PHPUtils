<?php

namespace mespinosaz\Utility\Tests\Collection;

use mespinosaz\Utility\Collection\HashedCollection;

class HashedCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
        $collection = new HashedCollection();

        $this->assertEquals(0, $collection->size());
        $collection->add('id', 1);
        $this->assertEquals(1, $collection->size());
        $this->assertTrue($collection->exists('id'));
    }

    public function testIdentifiers()
    {
        $collection = new HashedCollection();
        $originalKeys = array('id', 'id2');
        $collection->add($originalKeys[0], 1);
        $collection->add($originalKeys[1], 1);
        $keys = $collection->getIdentifiers();
        $numKeys = count($keys);
        $this->assertEquals($numKeys, 2);
        sort($originalKeys);
        sort($keys);
        $this->assertEquals(serialize($originalKeys), serialize($keys));
    }
}

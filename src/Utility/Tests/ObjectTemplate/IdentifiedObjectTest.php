<?php

namespace mespinosaz\Utility\Tests\ObjectTemplate;

use mespinosaz\Utility\ObjectTemplate\IdentifiedObject;

class HashedCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testId()
    {
        $id =  'test_id';
        $object = new IdentifiedObject($id);
        $this->assertEquals($id, $object->id());
    }
}

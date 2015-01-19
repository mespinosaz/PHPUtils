<?php

namespace mespinosaz\Utility\Tests\Position;

use mespinosaz\Utility\Position\Position2D;

class HashedCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testBasic()
    {
        $x = 1;
        $y = -2;
        $position = new Position2D($x, $y);
        $this->assertEquals($x, $position->x());
        $this->assertEquals($y, $position->y());
    }
}
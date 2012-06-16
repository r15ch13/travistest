<?php
require_once '../index.php';

class Wurst_Tests_WurstTest extends PHPUnit_Framework_TestCase
{
    public function testWurst()
    {
        $wurst = new Wurst('Kaese');

        $this->assertEquals('Kaese', $wurst->Name());
    }
}

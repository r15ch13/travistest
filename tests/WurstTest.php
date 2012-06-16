<?php
require_once dirname(__FILE__).'/../index.php';

class Wurst_Tests_WurstTest extends PHPUnit_Framework_TestCase
{
    public function testWurst()
    {
        $wurst = new Wurst('Kaese');

        $this->assertEquals('Kaese', $wurst->Name());
    }
}

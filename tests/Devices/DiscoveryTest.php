<?php

namespace duncan3dc\SonosTests\Devices;

use duncan3dc\Sonos\Devices\Discovery;
use duncan3dc\Sonos\Devices\Factory;
use Mockery;

class DiscoveryTest extends \PHPUnit_Framework_TestCase
{
    private $devices;

    public function setUp()
    {
        $factory = Mockery::mock(Factory::class);
        $this->devices = new Discovery($factory);
    }


    public function testGetNetworkInterface()
    {
        $this->assertNull($this->devices->getNetworkInterface());
    }


    public function testSetNetworkInterfaceString()
    {
        $this->devices->setNetworkInterface("eth0");
        $this->assertSame("eth0", $this->devices->getNetworkInterface());
    }


    public function testSetNetworkInterfaceInteger()
    {
        $this->devices->setNetworkInterface(0);
        $this->assertSame(0, $this->devices->getNetworkInterface());
    }


    public function testSetNetworkInterfaceEmptyString()
    {
        $this->devices->setNetworkInterface("");
        $this->assertSame("", $this->devices->getNetworkInterface());
    }
}

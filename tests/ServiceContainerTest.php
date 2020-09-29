<?php

use PHPUnit\Framework\TestCase;

use AWSM\LibTools\Exceptions\ToolsException;
use AWSM\LibTools\Interfaces\ServiceInterface;

require 'Assets/ServiceContainer.php';
require 'Assets/Service.php';

final class ServiceContainerTest extends TestCase
{
    public function testAddRemove() 
    {
        $sc = new ServiceContainer();
        $service = new Service();

        $sc->addService( 'fantastic_service', $service );
        $service = $sc->getService( 'fantastic_service' );

        $this->assertInstanceOf( ServiceInterface::class, $service );

        $sc->removeService( 'fantastic_service' );

        $this->expectException( ToolsException::class );
        $sc->getService( 'fantastic_service' );
    }

    public function testPriority() {
        $sc = new ServiceContainer();
        $service1 = new Service();
        $service2 = new Service();
        $service3 = new Service();

        $service1->setId('s1');
        $service2->setId('s2');
        $service3->setId('s3');

        $sc->addService( 'service1',$service1, 3 );
        $sc->addService( 'service2',$service2, 2 );
        $sc->addService( 'service3',$service3, 1 );

        $services = $sc->getServices( false );
        $this->assertEquals( 's1', $services[0]->getId() );
        $this->assertEquals( 's2', $services[1]->getId() );
        $this->assertEquals( 's3', $services[2]->getId() );

        $services = $sc->getServices();
        $this->assertEquals( 's3', $services[0]->getId() );
        $this->assertEquals( 's2', $services[1]->getId() );
        $this->assertEquals( 's1', $services[2]->getId() );

    }
}

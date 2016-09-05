<?php

namespace Acme\StoreBundle\Tests\Controller;

use Acme\StoreBundle\Controller\MyController;

class MyControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
    {
	$calc = new MyController();
	$result = $calc->add(30, 12);
	// assert that our calculator added the numbers correctly!
	$this->assertEquals(42, $result);
    }

}


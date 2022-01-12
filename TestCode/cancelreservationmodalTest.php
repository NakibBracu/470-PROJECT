<?php

use PHPUnit\Framework\TestCase;

class cancelreservationmodalTest extends TestCase{

	protected $customer;

	public function setUp(){

		$this->customer = new \App\Models\cancelreservationmodal;
	
	}

	public function testgetCustomername(){

		$this->customer->setCustomername('Sakib');
	
		$this->assertEquals($this->customer->getCustomerName(), 'Sakib');
	
	}
}	
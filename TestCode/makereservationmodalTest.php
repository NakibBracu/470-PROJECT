<?php

use PHPUnit\Framework\TestCase;

class makereservationmodalTest extends TestCase{

	protected $customer;

	public function setUp(){

		$this->customer = new \App\Models\makereservationmodal;
	
	}

	public function testgetCustomername(){

		$this->customer->setCustomername('Sakib');
	
		$this->assertEquals($this->customer->getCustomerName(), 'Sakib');
	
	}

	public function testgetNumberofGuest(){

		$this->customer->setNumberofGuest(5);

		$this->assertEquals($this->customer->getNumberofGuest(), 5);

	}

}
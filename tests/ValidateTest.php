<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{
	public function test_email(){
		$email = Validate::email('dvelasquez@platzi.com');
		$this->assertTrue($email);
	}
}
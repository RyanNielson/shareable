<?php

use Mockery as m;
use RyanNielson\Shareable\Buttons\GooglePlus;

class ButtonsGooglePlusTest extends PHPUnit_Framework_TestCase {

    public function setUp()
    {
        $this->environment = m::mock('Illuminate\View\Environment');
    }
    
	public function tearDown()
	{
		m::close();
	}
    
    public function testRenderExists()
    {
        $googlePlus = new GooglePlus($this->environment);
        $this->assertTrue(method_exists($googlePlus, 'render'),  'Class does not have method render');
    }
}
<?php

use Mockery as m;
use RyanNielson\Shareable\Buttons\Twitter;

class ButtonsTwitterTest extends PHPUnit_Framework_TestCase {

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
        $twitter = new Twitter($this->environment);
        $this->assertTrue(method_exists($twitter, 'render'),  'Class does not have method render');
    }
}
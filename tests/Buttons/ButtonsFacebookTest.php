<?php

use Mockery as m;
use RyanNielson\Shareable\Buttons\Facebook;

class ButtonsFacebookTest extends PHPUnit_Framework_TestCase {

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
        $facebook = new Facebook($this->environment);
        $this->assertTrue(method_exists($facebook, 'render'),  'Class does not have method render');
    }
}
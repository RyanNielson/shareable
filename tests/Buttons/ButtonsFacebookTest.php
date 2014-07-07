<?php

use Mockery as m;
use RyanNielson\Shareable\Buttons\Facebook;

class ButtonsFacebookTest extends PHPUnit_Framework_TestCase {

    public function setUp()
    {
        $this->view = m::mock('Illuminate\View\Factory');
    }

    public function tearDown()
    {
        m::close();
    }

    public function testRenderExists()
    {
        $facebook = new Facebook($this->view);
        $this->assertTrue(method_exists($facebook, 'render'),  'Class does not have method render');
    }
}

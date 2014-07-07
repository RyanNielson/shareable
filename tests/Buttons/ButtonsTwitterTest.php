<?php

use Mockery as m;
use RyanNielson\Shareable\Buttons\Twitter;

class ButtonsTwitterTest extends PHPUnit_Framework_TestCase {

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
        $twitter = new Twitter($this->view);
        $this->assertTrue(method_exists($twitter, 'render'),  'Class does not have method render');
    }
}

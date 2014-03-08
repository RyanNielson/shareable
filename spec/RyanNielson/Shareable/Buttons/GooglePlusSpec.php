<?php

namespace spec\RyanNielson\Shareable\Buttons;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GooglePlusSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RyanNielson\Shareable\Buttons\GooglePlus');
    }
}

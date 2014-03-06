<?php

namespace spec\RyanNielson\Shareable;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ShareableSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('RyanNielson\Shareable\Shareable');
    }
}

<?php

namespace spec\Liuggio\Blog;

use Liuggio\Blog\State;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StateSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(State::STATE_DRAFT);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Liuggio\Blog\State');
    }

    function it_is_initializable_by_factory_method()
    {
        $this::published()->shouldHaveType('Liuggio\Blog\State');
    }
}

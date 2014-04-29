<?php

namespace spec\Liuggio\Blog;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AuthorSpec extends ObjectBehavior
{
    function it_should_always_have_a_nickname($nickname)
    {
        $this->beConstructedWith($nickname);
        $this->shouldHaveType('Liuggio\Blog\Author');
    }
}

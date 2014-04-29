<?php

namespace spec\Liuggio\Blog;

use Liuggio\Blog\Author;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PostSpec extends ObjectBehavior
{
    function let(Author $author)
    {
        $this->beConstructedWith($author, 'title', 'body');
    }

    function it_should_be_created_with_author_title_and_text()
    {
        $this->shouldHaveType('Liuggio\Blog\Post');
    }

    function it_should_be_created_as_drafted()
    {
        $this->isPublic()->shouldBe(false);
    }

    function it_should_move_from_drafted_to_published()
    {
        $this->publish();
        $this->isPublic()->shouldBe(true);
    }

    function it_should_raise_exception_during_publish_if_it_was_alread_public()
    {
        $this->publish();
        $this->shouldThrow('Exception')->duringPublish();
    }
}

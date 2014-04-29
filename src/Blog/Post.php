<?php

namespace Liuggio\Blog;

class Post
{
    private $author;
    private $title;
    private $body;
    private $state;
    private $createdAt;

    public function __construct(Author $author, $title, $body)
    {
        $this->author = $author;
        $this->title = $title;
        $this->body = $body;
        $this->state = State::draft();
        $this->createdAt = new \Datetime("now");
    }

    public function isPublic()
    {
        return $this->state->isPublic();
    }

    public function publish()
    {
        if (!$this->couldBePublished()) {
            throw new \Exception("Could not do this transition");
        }

        return $this->state = State::published();
    }

    public function getAuthorNickname() {

        return $this->author->getNickname();
    }

    public function getTitle()
    {
        return $this->title;
    }

    private function couldBePublished()
    {
        return !$this->isPublic();
    }
}

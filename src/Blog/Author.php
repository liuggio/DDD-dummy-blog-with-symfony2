<?php

namespace Liuggio\Blog;

class Author
{
    private $nickname;

    function __construct($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * @return mixed
     */
    public function getNickname()
    {
        return $this->nickname;
    }
}
